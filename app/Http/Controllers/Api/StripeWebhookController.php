<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Jobs\ProcessOrder;
use Illuminate\Http\Request;
use Stripe\Event;
use Stripe\Exception\SignatureVerificationException;
use Stripe\PaymentIntent;
use Stripe\StripeClient;
use Stripe\Webhook;
use UnexpectedValueException;

class StripeWebhookController extends Controller
{
    protected StripeClient $stripe;

    protected ?string $endpointSecret;

    public function __construct()
    {
        $this->stripe         = new StripeClient(config('services.stripe.secret'));
        $this->endpointSecret = config('services.stripe.wh_secret');
    }

    public function handle(Request $request)
    {
        try {
            $event = Event::constructFrom($request->toArray());
        } catch (UnexpectedValueException $e) {
            abort(422, 'Webhook error while parsing basic request.');
        }

        if ($this->endpointSecret) {
            // Only verify the event if there is an endpoint secret defined
            // Otherwise, use the basic decoded event
            try {
                $event = Webhook::constructEvent(
                    payload: $request->getContent(),
                    sigHeader: $request->header('stripe-signature'),
                    secret: $this->endpointSecret
                );
            } catch (SignatureVerificationException $e) {
                // Invalid payload
                abort(422, 'Webhook error while validating signature.');
            }
        }

        match ($event->type) {
            'payment_intent.succeeded' => $this->handlePaymentIntentSucceeded($event->data->object),

            // Define and call a method to handle the processing of payment intent.
            'payment_intent.processing' => null,

            // Define and call a method to handle the failed payment.
            'payment_intent.payment_failed' => null,

            // Unexpected event type
            default => report(new \Exception('Received unknown event type')),
        };

        return response()->noContent();
    }

    protected function handlePaymentIntentSucceeded(PaymentIntent $paymentIntent): void
    {
        ProcessOrder::dispatch($paymentIntent);
        // dd($paymentIntent);
    }
}

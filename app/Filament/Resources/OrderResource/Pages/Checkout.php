<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\OrderResource;
use App\Models\User;
use Filament\Resources\Pages\Concerns\InteractsWithRecord;
use Filament\Resources\Pages\Page;
use NumberFormatter;
use Stripe\Customer;
use Stripe\PaymentIntent;
use Stripe\StripeClient;

class Checkout extends Page
{
    use InteractsWithRecord;

    protected static string $resource = OrderResource::class;

    protected static string $view = 'filament.resources.order-resource.pages.checkout';

    protected StripeClient $stripe;

    public string $checkoutKey;

    public string $clientSecret;

    public function __construct()
    {
        $this->stripe = new StripeClient(config('services.stripe.secret'));
    }

    public function mount(int | string $record): void
    {
        $formatter = new NumberFormatter(app()->getLocale(), NumberFormatter::CURRENCY);

        $this->record     = $this->resolveRecord($record);
        $this->heading    = 'Checkout: ' . $this->record->order_id;
        $this->subheading = $formatter->formatCurrency($this->record->total_price / 131, 'usd');
        $this->checkoutKey = 'checkout.' . $this->record->id;
        $this->clientSecret = $this->getClientSecret();
    }

    protected function getClientSecret(): string
    {
        $user          = $this->record->user;
        $customer      = $this->getStripeCustomer($user);
        $paymentIntent = $this->getPaymentIntent($customer);

        return $paymentIntent->client_secret;
    }

    protected function getStripeCustomer(User $user): Customer
    {
        if ($user->stripe_customer_id !== null) {
            return $this->stripe->customers->retrieve($user->stripe_customer_id);
        }

        $customer = $this->stripe->customers->create([
            'name'  => $user->name,
            'email' => $user->email,
        ]);

        $user->update(['stripe_customer_id' => $customer->id]);

        return $customer;
    }

    protected function getPaymentIntent(Customer $customer): PaymentIntent
    {
        $paymentIntentId = session($this->checkoutKey);

        if ($paymentIntentId === null) {
            return $this->createNewPaymentIntent($customer);
        }

        $paymentIntent = $this->stripe->paymentIntents->retrieve($paymentIntentId);

        if ($paymentIntent->status !== 'requires_payment_method') {
            return $this->createNewPaymentIntent($customer);
        }

        if ($paymentIntent->status === 'processing') {
            return redirect()->route('filament.admin.pages.payment-status', [
                'payment_intent'               => $paymentIntent->id,
                'payment_intent_client_secret' => $paymentIntent->client_secret,
                'redirect_status'              => $paymentIntent->status,
            ]);
        }

        return $paymentIntent;
    }

    protected function createNewPaymentIntent(Customer $customer): PaymentIntent
    {
        $paymentIntent = $this->stripe->paymentIntents->create([
            'customer'           => $customer->id,
            'setup_future_usage' => 'off_session',
            'amount'             => (int)$this->record->total_price,
            'currency'           => config('services.stripe.currency'),
            'metadata'           => [
                'order_id' => $this->record->id,
                'user_id'    => $this->record->user->id,
            ],
        ]);

        session([$this->checkoutKey => $paymentIntent->id]);

        return $paymentIntent;
    }
}

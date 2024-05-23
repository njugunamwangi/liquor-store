<?php

namespace App\Jobs;

use App\Enums\OrderStatus;
use App\Enums\PaymentMethod;
use App\Enums\PaymentStatus;
use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Stripe\PaymentIntent;

class ProcessOrder implements ShouldQueue
{
    protected $paymentIntent;

    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(PaymentIntent $paymentIntent)
    {
        $this->paymentIntent = $paymentIntent;
    }

    public function handle(): void
    {
        // dd($this->paymentIntent);
        $metadata = $this->paymentIntent->metadata;
        $amount   = $this->paymentIntent->amount_received;

        $model = Order::find($metadata['order_id']);

        $model->update([
            'payment_status' => PaymentStatus::Paid,
            'order_status' => OrderStatus::Processing,
            'payment_method' => PaymentMethod::PayStack,
        ]);
    }
}

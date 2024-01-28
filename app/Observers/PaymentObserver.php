<?php

namespace App\Observers;

use App\Models\Payment;
use Filament\Notifications\Notification;

class PaymentObserver
{
    /**
     * Handle the Payment "created" event.
     */
    public function created(Payment $payment): void
    {
        Notification::make()
            ->title($payment->user->name . ' made payment for order ' . $payment->order->order_id )
            ->success()
            ->icon('heroicon-o-banknotes')
            ->body('New payment received')
            ->sendToDatabase($payment->user);
    }

    /**
     * Handle the Payment "updated" event.
     */
    public function updated(Payment $payment): void
    {
        //
    }

    /**
     * Handle the Payment "deleted" event.
     */
    public function deleted(Payment $payment): void
    {
        //
    }

    /**
     * Handle the Payment "restored" event.
     */
    public function restored(Payment $payment): void
    {
        //
    }

    /**
     * Handle the Payment "force deleted" event.
     */
    public function forceDeleted(Payment $payment): void
    {
        //
    }
}

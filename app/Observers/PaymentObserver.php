<?php

namespace App\Observers;

use App\Filament\Resources\PaymentResource;
use App\Models\Payment;
use App\Models\Role;
use App\Models\User;
use Filament\Notifications\Actions\Action;
use Filament\Notifications\Notification;

class PaymentObserver
{
    /**
     * Handle the Payment "created" event.
     */
    public function created(Payment $payment): void
    {
        $recipients = User::role(Role::IS_ADMIN)->get();

        foreach ($recipients as $recipient) {
            Notification::make()
                ->title($payment->user->name . ' made payment for order ' . $payment->order->order_id )
                ->success()
                ->icon('heroicon-o-banknotes')
                ->body('New payment received')
                ->actions([
                    Action::make('View')
                        ->url(PaymentResource::getUrl('view', ['record' => $payment->id]))
                        ->markAsRead(),
                ])
                ->sendToDatabase($recipient);
        }
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

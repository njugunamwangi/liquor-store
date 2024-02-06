<?php

namespace App\Observers;

use App\Models\Order;
use App\Models\Role;
use App\Models\User;
use Filament\Notifications\Actions\Action;
use Filament\Notifications\Notification;

class OrderObserver
{
    /**
     * Handle the Order "created" event.
     */
    public function created(Order $order): void
    {
        $recipients = User::role(Role::IS_ADMIN)->get();

        foreach ($recipients as $recipient) {
            Notification::make()
                ->title($order->user->name . ' placed an order')
                ->info()
                ->icon('heroicon-o-shopping-bag')
                ->body('New order ' . $order->order_id)
                ->actions([
                    Action::make('markAsRead')
                        ->button()
                        ->markAsRead(),
                ])
                ->sendToDatabase($recipient);
        }
    }

    /**
     * Handle the Order "updated" event.
     */
    public function updated(Order $order): void
    {
        $recipients = User::role(Role::IS_ADMIN)->get();

        foreach ($recipients as $recipient) {
            Notification::make()
                ->title($order->order_id . ' ' . $order->order_status->value)
                ->iconColor($order->order_status->getColor())
                ->icon($order->order_status->getIcon())
                ->body('Order updated')
                ->actions([
                    Action::make('markAsRead')
                        ->button()
                        ->markAsRead(),
                ])
                ->sendToDatabase($recipient);
        }
    }

    /**
     * Handle the Order "deleted" event.
     */
    public function deleted(Order $order): void
    {
        //
    }

    /**
     * Handle the Order "restored" event.
     */
    public function restored(Order $order): void
    {
        //
    }

    /**
     * Handle the Order "force deleted" event.
     */
    public function forceDeleted(Order $order): void
    {
        //
    }
}

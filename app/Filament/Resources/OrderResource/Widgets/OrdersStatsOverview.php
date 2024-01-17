<?php

namespace App\Filament\Resources\OrderResource\Widgets;

use App\Enums\PaymentStatus;
use App\Models\Order;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Number;

class OrdersStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Orders', Order::count())
                ->icon('heroicon-o-shopping-bag')
                ->description('Total number of orders'),
            Stat::make('Total Amount', Number::currency(Order::sum('total_price'), 'KES'))
                ->icon('heroicon-o-credit-card')
                ->description('Total amount payable'),
            Stat::make('Total Revenue', Number::currency(Order::query()
                ->where('payment_status', PaymentStatus::Paid)
                ->sum('total_price'), 'KES'))
                ->icon('heroicon-o-banknotes')
                ->description('Total amount paid'),
        ];
    }
}

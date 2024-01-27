<?php

namespace App\Filament\Widgets;

use App\Models\Payment;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Number;

class PaymentStatsWidget extends BaseWidget
{

    protected function getColumns(): int { return 2; }
    protected function getStats(): array
    {
        return [
            Stat::make('Payments', Payment::count())
                ->description('Total payments made')
                ->color('primary')
                ->descriptionIcon('heroicon-o-bolt'),
            Stat::make('Revenue', Number::currency(Payment::sum('amount'), 'KES'))
                ->description('Total amount paid')
                ->color('success')
                ->descriptionIcon('heroicon-o-banknotes'),
        ];
    }
}

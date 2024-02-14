<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use SamuelMwangiW\Africastalking\Facades\Africastalking;

class MessagesBalance extends BaseWidget
{
    protected function getColumns(): int { return 1; }
    protected function getStats(): array
    {
        return [
            Stat::make('Balances', Africastalking::application()->balance())
                ->description('As Per Africa\'sTalking')
                ->color('primary'),
        ];
    }
}

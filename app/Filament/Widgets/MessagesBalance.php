<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class MessagesBalance extends BaseWidget
{
    protected function getColumns(): int
    {
        return 1;
    }

    protected function getStats(): array
    {
        return [
            Stat::make('Balances', 0)
                ->description('As Per Africa\'sTalking')
                ->color('primary'),
        ];
    }
}

<?php

namespace App\Filament\Widgets;

use App\Models\Order;
use App\Models\Product;
use App\Models\Role;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class SummaryStatswidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Users', User::count())
                ->color('success')
                ->descriptionIcon('heroicon-o-user-group')
                ->color('primary')
                ->description('Total Users'),
            Stat::make('Products', Product::query()
                ->where('status', true)
                ->count())
                ->description('Total products')
                ->descriptionIcon('heroicon-o-check-badge')
                ->color('success'),
            Stat::make('Orders', Order::count())
                ->color('warning')
                ->description('Total number of Orders')
                ->descriptionIcon('heroicon-o-shopping-bag'),
        ];
    }
}

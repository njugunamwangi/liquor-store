<?php

namespace App\Filament\Resources\ProductResource\Widgets;

use App\Models\OrderItem;
use App\Models\Product;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Illuminate\Database\Eloquent\Model;

class ProductChartWidget extends ChartWidget
{
    public ?Model $record = null;
    protected static ?string $heading = 'Product Order History';

    public ?string $filter = 'month';

    protected static ?string $pollingInterval = '1s';

    protected int | string | array $columnSpan = 'full';

    protected static ?string $maxHeight = '250px';

    protected function getFilters(): ?array {
        return [
            'week' => 'Last Week',
            'month' => 'Last Month',
            '3months' => 'Last 3 Months',
            'year' => 'This Year',
        ];
    }

    protected function getData(): array
    {
        $filter = $this->filter;

        $query = OrderItem::query()->where('product_id', $this->record->id);

        match ($filter) {
            'week' => $data = Trend::query($query)
                ->between(
                    start: now()->subWeek(),
                    end: now(),
                )
                ->perDay()
                ->count(),
            'month' => $data = Trend::query($query)
                ->between(
                    start: now()->subMonth(),
                    end: now(),
                )
                ->perDay()
                ->count(),
            '3months' => $data = Trend::query($query)
                ->between(
                    start: now()->subMonths(3),
                    end: now(),
                )
                ->perMonth()
                ->count(),
            'year' => $data = Trend::query($query)
                ->between(
                    start: now()->startOfYear(),
                    end: now()->endOfYear(),
                )
                ->perMonth()
                ->count(),
        };

        return [
            'datasets' => [
                [
                    'label' => 'Order History',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $data->map(fn (TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}

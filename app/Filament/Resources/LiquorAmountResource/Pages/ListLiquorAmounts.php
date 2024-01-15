<?php

namespace App\Filament\Resources\LiquorAmountResource\Pages;

use App\Filament\Resources\LiquorAmountResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListLiquorAmounts extends ListRecords
{
    protected static string $resource = LiquorAmountResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->slideOver(),
        ];
    }
}

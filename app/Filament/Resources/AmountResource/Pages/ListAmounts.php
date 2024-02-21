<?php

namespace App\Filament\Resources\AmountResource\Pages;

use App\Filament\Resources\AmountResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListAmounts extends ListRecords
{
    protected static string $resource = AmountResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->slideOver(),
        ];
    }
}

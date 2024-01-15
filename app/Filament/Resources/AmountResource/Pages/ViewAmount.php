<?php

namespace App\Filament\Resources\AmountResource\Pages;

use App\Filament\Resources\AmountResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewAmount extends ViewRecord
{
    protected static string $resource = AmountResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\FlavorResource\Pages;

use App\Filament\Resources\FlavorResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewFlavor extends ViewRecord
{
    protected static string $resource = FlavorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}

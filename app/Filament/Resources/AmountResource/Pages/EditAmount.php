<?php

namespace App\Filament\Resources\AmountResource\Pages;

use App\Filament\Resources\AmountResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAmount extends EditRecord
{
    protected static string $resource = AmountResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}

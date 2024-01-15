<?php

namespace App\Filament\Resources\LiquorAmountResource\Pages;

use App\Filament\Resources\LiquorAmountResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditLiquorAmount extends EditRecord
{
    protected static string $resource = LiquorAmountResource::class;

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

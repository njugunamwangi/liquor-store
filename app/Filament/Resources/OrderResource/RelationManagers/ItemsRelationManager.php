<?php

namespace App\Filament\Resources\OrderResource\RelationManagers;

use Awcodes\Curator\Components\Tables\CuratorColumn;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;

class ItemsRelationManager extends RelationManager
{
    protected static string $relationship = 'items';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('product')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('product')
            ->columns([
                CuratorColumn::make('product.productImage')
                    ->getStateUsing(function ($record) {
                        empty($record->product->image_id) ? '' : $record->product->productImage->path;
                    })
                    ->label('Image')
                    ->height(50),
                Tables\Columns\TextColumn::make('product.product'),
                Tables\Columns\TextColumn::make('quantity'),
                Tables\Columns\TextColumn::make('unit_price')
                    ->money('Kes'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }
}

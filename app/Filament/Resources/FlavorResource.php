<?php

namespace App\Filament\Resources;

use App\Filament\Resources\FlavorResource\Pages;
use App\Filament\Resources\FlavorResource\RelationManagers\BrandsRelationManager;
use App\Filament\Resources\FlavorResource\RelationManagers\ProductsRelationManager;
use App\Filament\Resources\FlavorResource\RelationManagers\SavoursRelationManager;
use App\Filament\Resources\FlavorResource\RelationManagers\TypesRelationManager;
use App\Models\Flavor;
use Awcodes\Curator\Components\Tables\CuratorColumn;
use Filament\Forms\Form;
use Filament\Infolists\Components\Group;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class FlavorResource extends Resource
{
    protected static ?string $model = Flavor::class;

    protected static ?string $navigationGroup = 'Shop';

    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema(Flavor::getForm());
    }

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                CuratorColumn::make('featured_image_id')
                    ->height(50)
                    ->label('Image')
                    ->sortable(),
                Tables\Columns\TextColumn::make('flavor')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('category.category')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\TrashedFilter::make(),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make()
                    ->slideOver(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\ForceDeleteBulkAction::make(),
                    Tables\Actions\RestoreBulkAction::make(),
                ]),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Section::make('Flavor Information')
                    ->columns(3)
                    ->schema([
                        ImageEntry::make('image')
                            ->getStateUsing(function ($record) {
                                empty($record->featured_image_id) ? null : $record->featuredImage->path;
                            }),
                        Group::make()
                            ->columns(2)
                            ->columnSpan(2)
                            ->schema([
                                TextEntry::make('flavor'),
                                TextEntry::make('category.category'),
                            ]),
                    ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            BrandsRelationManager::class,
            SavoursRelationManager::class,
            TypesRelationManager::class,
            ProductsRelationManager::class,
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListFlavors::route('/'),
            // 'create' => Pages\CreateFlavor::route('/create'),
            'view' => Pages\ViewFlavor::route('/{record}'),
            'edit' => Pages\EditFlavor::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->withoutGlobalScopes([
                SoftDeletingScope::class,
            ]);
    }
}

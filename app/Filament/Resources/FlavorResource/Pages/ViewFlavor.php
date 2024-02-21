<?php

namespace App\Filament\Resources\FlavorResource\Pages;

use App\Filament\Resources\FlavorResource;
use App\Models\Brand;
use App\Models\Savour;
use App\Models\Type;
use Awcodes\Curator\Components\Forms\CuratorPicker;
use Filament\Actions;
use Filament\Actions\ActionGroup;
use Filament\Actions\CreateAction;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Support\Str;

class ViewFlavor extends ViewRecord
{
    protected static string $resource = FlavorResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ActionGroup::make([
                Actions\EditAction::make(),
                CreateAction::make()
                    ->model(Brand::class)
                    ->label('New Brand')
                    ->form([
                        TextInput::make('brand')
                            ->required()
                            ->maxLength(255),
                        CuratorPicker::make('featured_image_id')
                            ->relationship('featuredImage', 'id')
                            ->label('Image'),
                        RichEditor::make('description')
                            ->columnSpanFull(),
                    ])
                    ->mutateFormDataUsing(function (array $data): array {
                        $data['category_id'] = $this->record->category->id;
                        $data['flavor_id'] = $this->record->id;

                        return $data;
                    }),
                CreateAction::make()
                    ->model(Savour::class)
                    ->label('New Savour')
                    ->form([
                        TextInput::make('savour')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                    ])
                    ->mutateFormDataUsing(function (array $data): array {
                        $data['flavor_id'] = $this->record->id;
                        $data['slug'] = Str::slug($data['savour']);

                        return $data;
                    }),
                CreateAction::make()
                    ->model(Type::class)
                    ->label('New Type')
                    ->form([
                        TextInput::make('type')
                            ->required()
                            ->maxLength(255)
                            ->columnSpanFull(),
                    ])
                    ->mutateFormDataUsing(function (array $data): array {
                        $data['flavor_id'] = $this->record->id;
                        $data['slug'] = Str::slug($data['type']);

                        return $data;
                    }),
            ]),
        ];
    }
}

<?php

namespace App\Models;

use Awcodes\Curator\Components\Forms\CuratorPicker;
use Awcodes\Curator\Models\Media;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Flavor extends Model
{
    use HasFactory;
    use HasSlug;
    use SoftDeletes;

    protected $guarded = [];

    public function featuredImage(): BelongsTo
    {
        return $this->belongsTo(Media::class, 'featured_image_id');
    }

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('flavor')
            ->saveSlugsTo('slug');
    }

    public function products(): HasMany {
        return $this->hasMany(Product::class);
    }

    public static function getForm(): array {
        return [
            CuratorPicker::make('featured_image_id')
                ->relationship('featuredImage', 'name')
                ->label('Featured Image')
                ->listDisplay(false)
                ->required(),
            Grid::make(2)
                ->schema([
                    TextInput::make('flavor')
                        ->required()
                        ->maxLength(255),
                    TextInput::make('slug')
                        ->required()
                        ->hiddenOn('create')
                        ->maxLength(255),
                ]),
            RichEditor::make('description')
                ->columnSpanFull()
            ];
    }
}

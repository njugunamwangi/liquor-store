<?php

namespace App\Models;

use Awcodes\Curator\Components\Forms\CuratorPicker;
use Awcodes\Curator\Models\Media;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Get;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Brand extends Model
{
    use HasFactory;
    use HasSlug;
    use SoftDeletes;

    public const CREATED_AT = null;

    public const UPDATED_AT = null;

    protected $guarded = [];

    public function featuredImage(): BelongsTo
    {
        return $this->belongsTo(Media::class, 'featured_image_id');
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('brand')
            ->saveSlugsTo('slug');
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class, 'brand_id', 'id');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function flavor(): BelongsTo
    {
        return $this->belongsTo(Flavor::class);
    }

    public static function getForm(): array
    {
        return [
            TextInput::make('brand')
                ->required()
                ->maxLength(255),
            Grid::make(2)
                ->schema([
                    Select::make('category_id')
                        ->relationship('category', 'category')
                        ->createOptionForm(Category::getForm())
                        ->editOptionForm(Category::getForm())
                        ->preload()
                        ->live()
                        ->searchable(),
                    Select::make('flavor_id')
                        ->relationship('flavor', 'flavor', modifyQueryUsing: function (Builder $query, Get $get) {
                            return $query->where('category_id', $get('category_id'));
                        })
                        ->createOptionForm(Flavor::getForm())
                        ->editOptionForm(Flavor::getForm())
                        ->preload()
                        ->searchable(),
                ]),
            CuratorPicker::make('featured_image_id')
                ->relationship('featuredImage', 'id')
                ->label('Image'),
            RichEditor::make('description')
                ->columnSpanFull(),
        ];
    }
}

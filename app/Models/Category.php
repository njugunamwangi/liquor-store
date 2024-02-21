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

class Category extends Model
{
    use HasFactory;
    use HasSlug;
    use SoftDeletes;

    public const CREATED_AT = null;

    public const UPDATED_AT = null;

    protected $fillable = [
        'category',
        'slug',
        'image_id',
        'parent_id',
        'description',
    ];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('category')
            ->saveSlugsTo('slug');
    }

    public function featuredImage(): BelongsTo
    {
        return $this->belongsTo(Media::class, 'image_id', 'id');
    }

    public function flavors(): HasMany
    {
        return $this->hasMany(Flavor::class);
    }

    public function brands(): HasMany
    {
        return $this->hasMany(Brand::class);
    }

    public function image(): BelongsTo
    {
        return $this->belongsTo(Media::class, 'image_id', 'id');
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    public function products(): HasMany
    {
        return $this->hasMany(Product::class);
    }

    public static function getForm(): array
    {
        return [
            Grid::make(2)
                ->schema([
                    TextInput::make('category')
                        ->required()
                        ->maxLength(255),
                    Select::make('parent_id')
                        ->relationship('parent', 'category')
                        ->searchable()
                        ->preload()
                        ->label('Parent Category'),
                ]),
            TextInput::make('slug')
                ->required()
                ->hiddenOn('create')
                ->maxLength(255),
            CuratorPicker::make('image_id')
                ->relationship('image', 'name')
                ->label('Image')
                ->required(),
            RichEditor::make('description')
                ->columnSpanFull(),
        ];
    }
}

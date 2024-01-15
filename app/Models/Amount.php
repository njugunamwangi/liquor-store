<?php

namespace App\Models;

use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Amount extends Model
{
    use HasFactory;
    use HasSlug;
    use SoftDeletes;

    protected $guarded = [];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('amount')
            ->saveSlugsTo('slug');
    }

    public function products(): HasMany {
        return $this->hasMany(Product::class);
    }

    public static function getForm(): array {
        return [
            TextInput::make('amount')
                ->required()
                ->maxLength(255),
            TextInput::make('slug')
                ->required()
                ->hiddenOn('create')
                ->maxLength(255),
            TextInput::make('nickname')
                ->maxLength(255),
        ];
    }
}

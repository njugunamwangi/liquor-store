<?php

namespace App\Models;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Type extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasSlug;

    protected $guarded = [];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('type')
            ->saveSlugsTo('slug');
    }

    public function flavor() : BelongsTo {
        return $this->belongsTo(Flavor::class);
    }

    public function products() : HasMany {
        return $this->hasMany(Product::class);
    }

    public static function getForm(): array {
        return [
            TextInput::make('type')
                ->required(),
            Select::make('flavor_id')
                ->relationship('flavor', 'flavor')
                ->createOptionForm(Flavor::getForm())
                ->editOptionForm(Flavor::getForm())
                ->preload()
                ->required()
                ->searchable(),
        ];
    }
}

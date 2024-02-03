<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Savour extends Model
{
    use HasFactory;
    use SoftDeletes;
    use HasSlug;

    protected $guarded = [];

    public function flavor() : BelongsTo {
        return $this->belongsTo(Flavor::class);
    }

    public function products() : HasMany {
        return $this->hasMany(Product::class);
    }

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('savour')
            ->saveSlugsTo('slug');
    }
}

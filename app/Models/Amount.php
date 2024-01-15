<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
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

    public function products(): BelongsToMany {
        return $this->belongsToMany(Product::class);
    }
}

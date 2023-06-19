<?php

namespace App\Models;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $appends = ['featured_image'];

    function getRouteKeyName()
    {
        return 'slug';
    }

    protected function featuredImage(): Attribute
    {
        $imageLink = url('images/default.webp');
        if ($file = $this->getFirstMedia('images')) {
            $imageLink = $file->getFullUrl();
        }
        return Attribute::make(
            get: fn () => $imageLink,
        )->shouldCache();
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
}

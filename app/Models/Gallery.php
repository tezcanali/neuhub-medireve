<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use RalphJSmit\Laravel\SEO\Support\HasSEO;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Gallery extends Model
{
    use HasFactory, HasSEO, HasSlug;

    protected $fillable = [
        'title',
        'slug',
        'category_id',
        'status',
        'images',
        'featured_image',
    ];

    protected $casts = [
        'images' => 'array', // Değişiklik: images alanını dizi olarak tanımlayın
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function category()
    {
        return $this->belongsTo(GalleryCategory::class, 'category_id', 'id');
    }
}

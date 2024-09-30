<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;

    protected $fillable =  [
        'category',
        'author',
        'title',
        'publish_date',
        'cover_image',
        'body',
        'is_published',
    ];

    public function scopeActive($query)
    {
        return $query->where('is_published', true);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($blog) {
            // Ensure the slug is unique and slugify the title
            $blog->slug = static::generateUniqueSlug($blog->title);
        });
    }

    // Utility method to generate unique slug
    protected static function generateUniqueSlug($title)
    {
        $slug = Str::slug($title);
        $count = static::whereRaw("slug RLIKE '^{$slug}(-[0-9]*)?$'")->count();
        return $count ? "{$slug}-{$count}" : $slug;
    }

}

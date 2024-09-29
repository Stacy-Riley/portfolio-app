<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    public function scopeActive($query)
    {
        return $query->where('is_published', true);
    }

    protected $fillable = [
        'title',
        'subtitle',
        'body',
        'client',
        'category',
        'cover_image',
        'publish_date',
        'project_url',
        'code_url',
        'is_published',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($project) {
            // Ensure the slug is unique and slugify the title
            $project->slug = static::generateUniqueSlug($project->title);
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

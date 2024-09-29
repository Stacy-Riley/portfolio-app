<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'is_published',
        'first_name',
        'last_name',
        'company_name',
        'subtitle',
        'body',
        'job_titles',
        'programming_skills',
        'webdev_tools',
        'soft_skills',
        'cover_image',
    ];

}

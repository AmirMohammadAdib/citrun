<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'logo',
        'description',
        'cover',
        'parent_id',
        'slug',
        'meta_title',
        'meta_name',
        'meta_description',
        'meta_tags',
        'keywords',
        'view',
        'robots'
    ];
}

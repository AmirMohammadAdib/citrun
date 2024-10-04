<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'title',
        'summary',
        'status',
        'close_comment',
        'special_blog',
        'user_id',
        'poster',
        'poster_alt',
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

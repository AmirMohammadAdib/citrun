<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'commentable',
        'commentable_id',
        'subject',
        'content',
        'status',
        'parent_id',
        'user_id',
    ];
}

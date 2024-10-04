<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class View extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'current_page',
        'referer_page',
        'ip',
        'time',
        'detail',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Design extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'img',
        'publiced_design',
        'name',
        'description',
        'user_id',
        'product_id',
        'product_id', // 0 => not buy (just design) 1 => buy
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FestivalProduct extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'festival_id',
        'product_id',
    ];
}

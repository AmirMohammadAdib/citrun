<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MobileProduct extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'mobile_id',
        'product_id',
    ];
}

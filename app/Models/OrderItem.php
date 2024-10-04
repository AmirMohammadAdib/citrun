<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class OrderItem extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'order_id',
        'product_id',
        'design_id',
        'number',
        'final_product_price',
        'final_discount_amount',
        'total_price',
    ];
}

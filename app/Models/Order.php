<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'user_id',
        'address_id',
        'address_object',
        'payment_id',
        'payment_object',
        'payment_status',
        'delivery_id',
        'delivery_object',
        'delivery_amount',
        'delivery_status',
        'order_final_amount',
        'order_discount_amount',
        'coupon_id',
        'coupon_object',
        'order_status',
    ];
}

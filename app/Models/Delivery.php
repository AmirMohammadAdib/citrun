<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Delivery extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'static_amount', // Price per gram
        'logo',
    ];

    // weight should be sent per gram
    public function priceCalculate($weight) {        
        return floatValue($weight) * floatval($this->static_amount);
    }
}

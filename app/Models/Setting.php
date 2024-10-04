<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Setting extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'site_title',
        'site_description',
        'keywords',
        'logo',
        'icon',
        'address',
        'cache_Reset', 
        'geography_lenght',
        'geography_width',
        'postal_code',
        'phone',
        'manager_phone',
        'manager_mail',
        'city_id'
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ticket extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'user_id',
        'admin_id',
        'subject',
        'group_id', 
        'priority',
        'status',
        'department',
        'content',
        'file',
        'parent_id'
    ];
}

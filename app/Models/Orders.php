<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Orders extends Model
{
    use SoftDeletes;
    protected $guarded = [];
    protected $fillable = [
        'date',
        'time',
        'type',
        'payment',
        'adress',
        'status_id',
        'user_id'
    ];
}

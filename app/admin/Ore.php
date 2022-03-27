<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;

class Ore extends Model
{
    protected $fillable = [
        'supplier',
        'ore',
        'price'
    ];
}

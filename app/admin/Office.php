<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $fillable = ['name' , 'title' , 'phone'  , 'state' , 'previous_balance'];
}

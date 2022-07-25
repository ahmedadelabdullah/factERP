<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Hash;


class Client extends User
{
    protected $fillable = ['name' , 'email' , 'password'];
    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }
}

<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;

class Office extends Model
{
    protected $fillable = ['name' , 'title' , 'phone'  , 'state' , 'previous_balance'];
    protected $hidden = ['updated_at' , 'created_at'];

    public function invoices()
    {
        return $this->hasMany(OfficeInvoice::class , 'office__id' , 'id');
    }
}

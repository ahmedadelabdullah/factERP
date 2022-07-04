<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;

class OffInvoiceDetail extends Model
{
    protected $fillable = ['office_invoices_id','unit_price','quantity','price'];

    protected $hidden = ['updated_at' , 'created_at'];


    public function info(){
        return $this->belongsTo(OfficeInvoice::class , 'office_invoices_id' , 'id');
    }
}

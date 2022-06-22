<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;

class OffInvoiceDetail extends Model
{
    protected $fillable = ['material','office_invoices_id','image',
        'related_models','unit_price','quantity','price'];

    protected $hidden = ['updated_at' , 'created_at'];


    public function info(){
        return $this->belongsTo(OfficeInvoice::class , 'office_invoices_id' , 'id');
    }

}

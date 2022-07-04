<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;

class Dress extends Model
{
    protected $fillable = ['off_invoice_details_id','model_number','model_name','meterage','available','price'];

    protected $hidden = ['updated_at' , 'created_at'];

    public function invoice_detail(){
        return $this->belongsTo(OffInvoiceDetail::class , 'office_invoices_id' , 'id');
    }
}

<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;

class OfficeInvoice extends Model
{
    protected $fillable = ['customer' , 'invoice_number','no_models',
       'date','comment','total_pieces','sub_total','total_amount','image'];
    protected $hidden = ['updated_at' , 'created_at'];

    public function rows()
    {
        return $this->hasMany(OffInvoiceDetail::class , 'office_invoices_id' , 'id');
    }
}


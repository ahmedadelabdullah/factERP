<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;

class OfficeInvoice extends Model
{
    protected $fillable = ['customer','no_models','dress_id',
        'office_id','date','comment','total_pieces','total_amount','image' , 'invoice_number'];

    protected $hidden = ['updated_at' , 'created_at'];

    public function rows(){
        return $this->hasMany(OffInvoiceDetail::class , 'office_invoices_id' , 'id');
    }
}


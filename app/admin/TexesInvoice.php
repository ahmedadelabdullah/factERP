<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;

class TexesInvoice extends Model
{
    protected $table = 'texes_invoices';
    protected $fillable = [
        'id',
        'material',
        'texes_info_id',
        'Norolls',
        'unit_price',
        'quantity',
        'price',

    ];
    protected $hidden = ['updated_at , created_at'];
    public function info(){
        return $this->belongsTo(TexesInfo::class , 'texes_info_id','id');
    }
}

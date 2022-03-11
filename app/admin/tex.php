<?php

namespace App\admin;
use Illuminate\Database\Eloquent\Model;
use App\admin\Supplier;

class tex extends Model
{
    protected $fillable = ['invoice_number'
        , 'material'
        , 'unit_price'
        , 'date'
        , 'quantity'
        , 'price'
        , 'supplier_id'
        , 'Norolls'
        , 'total_rolls'
        , 'comment'
        , 'total_amount'
    ];

    public function supplier(){
        return $this->belongsTo(Supplier::class, 'supplier_id' , 'id') ;
    }
}

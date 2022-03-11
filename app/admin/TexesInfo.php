<?php

namespace App\admin;

use Illuminate\Database\Eloquent\Model;

class TexesInfo extends Model
{
    protected $table = 'texes_infos';
    protected $fillable = [
        'id',
        'invoice_number',
        'supplier_id',
        'date',
        'comment',
        'total_rolls',
        'total_amount',
        'no_classes'
    ];
    protected $hidden = ['updated_at , created_at'];
    public function rows(){
        return $this->hasMany(TexesInvoice::class , 'texes_info_id' , 'id');
    }

    public function sup(){
        return $this->belongsTo(Supplier::class , 'supplier_id' , 'id');
    }
}



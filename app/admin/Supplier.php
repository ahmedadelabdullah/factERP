<?php

namespace App\admin;
use Illuminate\Database\Eloquent\Model;
use App\admin\tex;

class Supplier extends Model
{
    protected $fillable = [
          'id'
        , 'name'
        , 'mobile'
        , 'title'
        , 'balance'
        , 'supply'
    ];


    public function infos(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(TexesInfo::class , 'supplier_id' , 'id' );
    }
}

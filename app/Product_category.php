<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_category extends Model
{
    protected $table = 'product_category';

    protected $fillable = [
      'id','name','parent_id','icon','icon_web','status','ordering',
    ];

    // public function transaksi()
    // {
    //     return $this->hasMany('App\Models\Transaksi');
    // }

    // public function kategori()
    // {
    //     return $this->belongsTo('App\Models\Kategori');
    // } 
}

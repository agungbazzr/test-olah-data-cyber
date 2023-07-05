<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';

    protected $fillable = [
      'id','product_name','category','type','item','weight','sku','price_sell','price_promo','price_agent','photo','recommendation','description','status','ordering',
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

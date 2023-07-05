<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customer';

    protected $fillable = [
      'id','referral_id','address','kelurahan','kecamatan','kota','provinsi','kode_pos','latitude','longitude','no_rekening','buku_rekening','point','default_address',
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

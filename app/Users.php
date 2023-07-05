<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $table = 'users';

    protected $fillable = [
      'id','first_name','last_name','email','email_verified_at','password','pin','phone','phone_verified_at','account_type','account_role','photo','last_login','remember_token','password_reset_code','device_token','account_status',
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

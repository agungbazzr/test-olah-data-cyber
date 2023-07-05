<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AgentModel extends Model
{
    protected $table = 'agent';

    protected $fillable = [
      'id','store_name','partner_id','pin_lock','store_open','store_close','address','kelurahan','kecamatan','kota','provinsi','kode_pos','latitude','longitude','ktp','kk','npwp','no_rekening','buku_rekening','point','credit_limit','subscription','max_load','default_agent',
    ];
}

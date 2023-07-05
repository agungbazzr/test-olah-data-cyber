<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    protected $table = 'order_detail';

    protected $fillable = [
      'id','product_id','order_id','price','price_agent','qty','total_price',
    ];

   
}

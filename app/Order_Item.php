<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_Item extends Model
{
	protected $table = 'order_item';
    //
	public function order(){

        return $this->belongsTo(Order::class);
    }
    public function dish(){

        return $this->belongsTo(dish::class);
    }


}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{


	   public function category(){

        return $this->belongsTo(Category::class);
    }

    public function order_item(){

        return $this->hasMany(Order_Item::class);
    }

    //
}

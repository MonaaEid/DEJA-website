<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	public function user(){

        return $this->belongsTo(User::class);
    }
 protected $fillable = [

		'first_name',
		'last_name',
		'phone',
		'city',
		'street',

	];
    //
}

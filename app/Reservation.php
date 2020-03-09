<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
	public function user(){

        return $this->belongsTo(User::class);
    }
	protected $fillable = [

		'first_name',
		'second_name',
		'client_phone',
		'guests_number',
		'comment',
		'booking_date'

	];
    //
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
	public $fillable = ['rating', 'place_id'];

	public function place(){
		return $this->belongsTo('App\Place');
	}

	public function user(){
		return $this->belongsTo('App\User');
	}
}

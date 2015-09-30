<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    public $fillable = ['name', 'address'];

    public function ratings(){
        return $this->hasMany('App\Rating');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}

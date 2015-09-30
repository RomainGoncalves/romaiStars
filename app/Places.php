<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Places extends Model
{
    public $fillable = ['name', 'address', 'rating'];
}

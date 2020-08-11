<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $guarded = [];

    public function room()
    {
    	return $this->belongsTo(Room::class);
    }
}

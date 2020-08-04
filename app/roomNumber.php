<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Building;
class roomNumber extends Model
{
    protected $guarded= [];

    public function buildings(){
        return $this->belongsToMany(Building::class);
    }
}

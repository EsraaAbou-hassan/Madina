<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 use App\roomNumber;
class Building extends Model
{
    protected  $guarded= [];

    public function roomNumbers(){
        return $this->belongsToMany(roomNumber::class);
    }
}

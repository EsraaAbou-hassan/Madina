<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Room;

class reservationController extends Controller
{
    public function index(){
        $reserves=Room::all();
        return view( 'admin.room')->with('reserves',$reserves);
       
        }
}

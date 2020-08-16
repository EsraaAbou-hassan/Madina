<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\RoomReservation;

class reservationController extends Controller
{
    public function index(){
        $reserves=RoomReservation::all();
        return view( 'admin.roomReservation')->with('reserves',$reserves);
       
        }
        public function store(Request $request)
        {
            $request->validate([      
                'building_name' => ['required'],
                'floor_number' => ['required'],
                'room' => ['required'],
                'capacity' => ['required'],
             ]);
    
            Room::create([
                'building_name' => $request['building_name'],
                'floor_number' => $request['floor_number'],
                'room' => $request['room'],
                'capacity' => $request['capacity'],   
            ]);
    
            return redirect('/admin/rooms')->with('statues','room Created');
        }
}

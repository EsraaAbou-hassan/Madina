<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Room;
use Illuminate\Support\Facades\DB;
class roomController extends Controller
{
    public function index()
    {
        //$rooms = Room::all();

        return view('user.ekhterMakanek');
    }

        public function store(Request $request)
        {
            $request->validate([
                'building_name' => ['required'],
                'floor_number' => ['required'],
                'room_number' => ['required'],
                'friend_name' => ['nullable'],
                'friend_collage' => ['nullable'],
                'friend_grade' => ['nullable'],
                'hobbies' => ['nullable'],
               
               
             ]);
    
             Room::create([
                 'building_name' => $request['building_name'],
                 'floor_number' =>$request['floor_number'],
                 'room_number' =>$request['room_number'],
                 'friend_name' =>$request['friend_name'],
                 'friend_collage' =>$request['friend_collage'],
                 'friend_grade' =>$request['friend_grade'],
                 'hobbies' =>$request['hobbies'],
                 
            ]);
             
            session()->flash('success','تم تقديم الطلب بنجاح');
            return redirect()->back();
        }
        
    public function fetch(Request $request)
    {
        $rooms = Room::where('building_name', $request->building_name)
            ->where('floor_number', $request->floor_number)
            ->get();
            
        $output ='<option value="">Select Room</option>';
        
        foreach($rooms as $room)
        {
            $output .='<option value="'.$room->id.'">'.$room->room_number.'</option>';
        }
        
        echo $output;
    }
}

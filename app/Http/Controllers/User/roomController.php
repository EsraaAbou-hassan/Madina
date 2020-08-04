<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Room;
class roomController extends Controller
{
    public function index(){
        $rooms=Room::all();
        return view( 'user.ekhterMakanek')->with('rooms',$rooms);
       
        }
        public function store(Request $request)
        {
            $request->validate([
                'building_name' => ['required'],
                'flat' => ['required'],
                'floor' => ['required'],
                'friend_name' => ['nullable'],
                'friend_collage' => ['nullable'],
                'friend_grade' => ['nullable'],
                'hobbies' => ['nullable'],
               
               
             ]);
    
             Room::create([
                 'building_name' => $request['building_name'],
                 'flat' =>$request['flat'],
                 'floor' =>$request['floor'],
                 'friend_name' =>$request['friend_name'],
                 'friend_collage' =>$request['friend_collage'],
                 'friend_grade' =>$request['friend_grade'],
                 'hobbies' =>$request['hobbies'],
                 
            ]);
             
            session()->flash('success','تم تقديم الطلب بنجاح');
            return redirect()->back();
        }
}

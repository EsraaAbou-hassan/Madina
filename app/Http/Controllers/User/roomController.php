<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Room;
use Illuminate\Support\Facades\DB;
class roomController extends Controller
{
    public function index(){
        $rooms=DB::table('room_numbers')->groupBy('building_name')->get();
        return view( 'user.ekhterMakanek')->with('rooms',$rooms);
       
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
        public function fetch( Request $request){
            $select=$request->get('select');
            $value=$request->get('value');
            $dependent=$request->get('dependent');
            $data=DB::table('room_numbers')->where($select,$value)->groupBy($dependent)->get();
            $output .='<option value="">Select'.ucfirst($dependent).'</option>';
            foreach($data as $row)
            {
                $output .='<option value="'.$row->$dependent.'">'.$row->$dependent.'</option>';
            }
            echo $output;

           




        }
}

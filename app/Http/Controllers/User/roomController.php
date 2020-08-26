<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Room;
use App\Student;
use Illuminate\Http\Request;
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
                'student_id' => 'required|exists:students,student_ssn',
                'room' => 'required' 
            ]);
            
            $student = Student::where('student_ssn', $request->student_id)
             ->where('is_accepted',1)
            ->first();

            
            if(!$student){
                session()->flash('success','انت غير مقبول في المدينه');
                return redirect()->back();
            }
            $student->room_id = $request->room;
            $student->save();

            $room = Room::find($request->room)->increment('occupation');

            session()->flash('success','تم تقديم الطلب بنجاح');
            return redirect()->back();
        }
        
    public function fetch(Request $request)
    {
        $rooms = Room::where('building_name', $request->building_name)
            ->where('floor_number', $request->floor_number)
            ->whereRaw('occupation < capacity')
            ->get();

        $output ='<option value="">اختر غرفة</option>';
        
        foreach($rooms as $room)
        {
            $output .='<option value="'.$room->id.'">'.$room->room_number.'</option>';
        }
        
        echo $output;
    }
}

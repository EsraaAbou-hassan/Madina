<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Student;
class koupolController extends Controller
{
    public function index()
    {
        
        return view('user.nategatAlqupole');
    }
    public function search (Request $request)
    {
        $request->validate([
            'student_ssn' => 'required|exists:students,student_ssn',
            
        ]);
        
        $search=Student::where('student_ssn',$request->student_ssn)->where('is_accepted',1)
        ->first();
       
        if($search){
            session()->flash('success','تم قبولك في المدينه الجامعيه');
            return redirect()->back();
        }else{
            session()->flash('success','لم يتم قبولك في المدينه الجامعيه');
            return redirect()->back();
        }
    }
    
    
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\student;
class studentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students =student::all() ;
        return view( 'admin.students.index')->with('students',$students);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);

        return view('admin.students.morInformation', compact('student'));
    }

    
    public function isAccepted(Request $request, $student)
    {
      if($student->value=="accepted" ){
        $student=student::where('is_accepted',$request->is_accepted)
        ->update(['is_accepted' => 1]);
         $student->save();
        return redirect('/takdimTalapAlelthak');
      } 
      elseif($student->value=="rejected"){
        
        $student=student::where('is_accepted',$request->is_accepted)
        ->update(['is_accepted' => 2]);
        $student->save();
       return redirect('/takdimTalapAlelthak');
      }
    }
}

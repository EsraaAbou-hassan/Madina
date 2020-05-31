<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
class requestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.takdimTalapAlelthak');
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
        $request->validate([
            'nationality' => ['required'],
            'Kind_of_student' => ['required'],
            'student_name' => ['required'],
            'student_ssn' => ['required', 'numeric'],
            'code' => ['required'],
            'birthday' => ['required'],
            'residance' =>['required'],
            'address' =>['required'],
            'email' => ['required'],
            'student_mobile' => ['required'],
            'student_year' => ['required'],
            'collage' => ['required'],
            'student_id'=> ['required'],
            'peciture' => ['required'],
            'password' => ['required'],
            'sure_password' => ['required'],
            'father_name' => ['required'],
            'relation' => ['required'],
            'father_ssn' => ['required'],
            'father_job' => ['required'],
            'father_mobile' => ['required'],
            'father_id' => ['required'],
            'type_of_stay' => ['required'],
            'grade' => ['required'],
            'taqdir' => ['required'],
            'rate' => ['required'],
            //    'department' => ['required'],
            //     'sum' => ['required'],
            'damin_name' => ['required'],
            'damin_ssn' => ['required'],
            'damin_mobile' => ['required'],
            'damin_job' => ['required'],
            'damin_id' => ['required'],
            'income' => ['required'],
            'number' => ['required'],
            'build' => ['required'],
            'room_id'=> ['required'],
            'message' => ['required'],
            'ekrar' => ['required'],
         ]);

         Student::create([
             'nationality' => $request['nationality'],
             'Kind_of_student' =>$request['Kind_of_student'],
             'student_name' =>$request['student_name'],
             'student_ssn' =>$request['student_ssn'],
             'code' =>$request['code'],
             'birthday' =>$request['birthday'],
             'residance' =>$request['residance'],
             'address' =>$request['address'],
             'email' =>$request['email'],
             'student_mobile' =>$request['student_mobile'],
             'student_year' =>$request['student_year'],
             'collage' =>$request['collage'],
             'student_id' => $request['student_id'],
             'peciture' => $request['peciture'],
             'password' =>$request['password'],
             'sure_password' =>$request['sure_password'],
             'father_name' =>$request['father_name'],
             'relation' =>$request['relation'],
             'father_ssn' =>$request['father_ssn'], 
             'father_job' =>$request['father_job'], 
             'father_mobile' =>$request['father_mobile'],
             'father_id' => $request['father_id'],
             'type_of_stay' =>$request['type_of_stay'],
             'grade' =>$request['grade'],
             'taqdir' =>$request['taqdir'],
             'rate' =>$request['rate'],
            'damin_name' =>$request['damin_name'],
            'damin_ssn' =>$request['damin_ssn'],
            'damin_mobile'=>$request['damin_mobile'],
            'damin_job' =>$request['damin_job'],
            'damin_id' =>$request['damin_id'],
            'income' =>$request['income'],
            'number' =>$request['number'], 
            'build' =>$request['build'],
            'room_id' =>$request['room_id'],
            'message' =>$request['message'],
            'ekrar' =>$request['ekrar'],
  
        ]);
         
        session()->flash('success','تم تقديم الطلب بنجاح');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

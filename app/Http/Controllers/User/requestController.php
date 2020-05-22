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
            'studentName' => ['required'],
            'studentSnn' => ['required', 'numeric'],
            'code' => ['required'],
            'birthday' => ['required'],
            'residance' =>['required'],
            'address' =>['required'],
            'email' => ['required'],
            'studentMobile' => ['required'],
            'student_year' => ['required'],
            'collage' => ['required'],
            //'peciture' => ['required'],
            'password' => ['required'],
            'sure_password' => ['required'],
            'father_name' => ['required'],
            'relation' => ['required'],
            'father_snn' => ['required'],
            'father_job' => ['required'],
            'father_mobile' => ['required'],
            //'father_id' => ['required'],
            'type_of_stay' => ['required'],
            'grade' => ['required'],
            'taqdir' => ['required'],
            'rate' => ['required'],
            //    'department' => ['required'],
            //     'sum' => ['required'],
            'damin_name' => ['required'],
            'damin_snn' => ['required'],
            'damin_mobile' => ['required'],
            'damin_job' => ['required'],
            //'damin_id' => ['required'],
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
             'studentName' =>$request['studentName'],
             'studentSnn' =>$request['studentSnn'],
             'code' =>$request['code'],
             'birthday' =>$request['birthday'],
             'residance' =>$request['residance'],
             'address' =>$request['address'],
             'email' =>$request['email'],
             'studentMobile' =>$request['studentMobile'],
             'student_year' =>$request['student_year'],
             'collage' =>$request['collage'],
             'student_id' => 111,
             'peciture' => 'test',
             'password' =>$request['password'],
             'sure_password' =>$request['sure_password'],
             'father_name' =>$request['father_name'],
             'relation' =>$request['relation'],
             'father_snn' =>$request['father_snn'], 
             'father_job' =>$request['father_job'], 
             'father_mobile' =>$request['father_mobile'],
             'father_id' => 11,
             'type_of_stay' =>$request['type_of_stay'],
             'grade' =>$request['grade'],
             'taqdir' =>$request['taqdir'],
             'rate' =>$request['rate'],
        //   'department' =>$request['department'],
        //   'sum' =>$request['sum'],
            'damin_name' =>$request['damin_name'],
            'damin_snn' =>$request['damin_snn'],
            'damin_mobile'=>$request['damin_mobile'],
            'damin_job' =>$request['damin_job'],
            'damin_id' => 11,
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

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\student;
use Illuminate\Support\Facades\DB;
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
        $student= DB::table('students')->paginate(2);
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

    public function accept($id)
    {
        $student = student::where('id', $id)
            ->update(['is_accepted' => 1]);
         
        return redirect('admin/students');
    }

    public function reject($id)
    {
        $student = student::where('id', $id)
            ->update(['is_accepted' => 2]);
         
        return redirect('admin/students');
    }
   
}

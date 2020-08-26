<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Eltmas;
class eltmasController extends Controller
{
    public function index()
    {
        return view('user.eltmas');
    }
    public function store(Request $request)
    {
        $request->validate([
       
            'iltmas' => ['required'],
        ]);
        
        Eltmas::create([
            'iltmas' =>$request['iltmas'],
        ]);
        session()->flash('success','تم تقديم الالتماس بنجاح');
        return redirect()->back();
     
    }
    
}

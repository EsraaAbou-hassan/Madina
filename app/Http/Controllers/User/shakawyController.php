<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Shakawy;
class shakawyController extends Controller
{
    public function index()
    {
        

        return view('user.shakawyAndMoktarahat');
    }
    public function store(Request $request)
    {
    
        
            $request->validate([
           
                'shakwa' => ['required'],
            ]);
            Shakawy ::create([
                'shakwa' =>$request['shakwa'],
            ]);
            
            session()->flash('success','تم تقديم الشكوي اوالإقتراح بنجاح');
            return redirect()->back();
         
        
    }
}

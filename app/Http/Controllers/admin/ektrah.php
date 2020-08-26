<?php

namespace App\Http\Controllers\admin;
use App\Shakawy;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ektrah extends Controller
{
    public function index(){
        $ektrahs = Shakawy::get();
        return view('admin.shakawy',compact('ektrahs'));
        
        
    
}
}
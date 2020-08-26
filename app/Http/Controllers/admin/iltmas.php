<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Eltmas;
class iltmas extends Controller
{
    public function index(){
        $talaps = Eltmas::get();
        return view('admin.iltmas', compact('talaps'));
    
}
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Room;
use DB;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rooms = Room::get();
        return view('admin.rooms.index', compact('rooms'));
    }

    /**     
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        return view( 'admin.rooms.create');
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
            'building_name' => ['required'],
            'floor_number' => ['required'],
            'room_number' => ['required'],
            'capacity' => ['required'],
         ]);

        Room::create([
            'building_name' => $request['building_name'],
            'floor_number' => $request['floor_number'],
            'room_number' => $request['room_number'],
            'capacity' => $request['capacity'],   
        ]);

        return redirect('/admin/rooms')->with('statues','room Created');
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
    public  function edit($id){
        
        $room = Room::find($id);
        return view('/admin.rooms.edit', compact('room'));
    } 

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public  function update(Request $request,$id){

        //   return  $request->all();
          $request->validate([
           
            'building_name' => ['required'],
            'floor_number' => ['required'],
            'room_number' => ['required'],
            'capacity' => ['required'],
        ]);
        $rooms=Room::find($id);
        $rooms->update([
            'building_name' => $request['building_name'],
            'floor_number' => $request['floor_number'],
            'room_number' => $request['room_number'],
            'capacity' => $request['capacity'],
            
        ]);
        return redirect('/admin/rooms')->with('statues','Room Updeated');
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public  function destroy($id){
        
        $number=Room::find($id);
        $number->delete();
        return redirect()->back()->with('statues','Room Delete');


    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;
use Redirect;
use App\room;
use App\user;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $room = \DB::table('book')->select('book.*','room.room_no','user.first_name')
                ->join('room','book.RoomType','=','room.id')
                ->join('user','book.Username','=','user.id')
              
                ->paginate(8);
        //print_r($room);
            return view('admin.RoomsAllocate.index',compact('room')); 
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
        //print_r($request->all());
        if($request->startdate<$request->enddate)
        { 
            $obj = new Books();
            
            $obj->Username=$request->input('user');
            $obj->RoomType=$request->input('roomid');
            $obj->Price=$request->input('price');
            $obj->Capacity=$request->input('capacity');
            $obj->time_from=$request->input('startdate');
            $obj->time_to=$request->input('enddate');
            $obj->save();
            
            return redirect('room')->with('message', 'Booking Sucessfully');
        }
        else
        {
            return Redirect::back()->withErrors(["errors"=>'please check start date']);
        }
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
        
        $room = Books::findOrFail($id);

        $room->delete();

        return redirect()->route('book.index');
    }
}

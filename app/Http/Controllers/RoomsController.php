<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\room;
use App\roomtype;
use Illuminate\Validation\Rule;

class RoomsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$result = rooms::with(array('rooms'))->get();
        //$room= rooms::all();
        $room = \DB::table('room')->select('room.*','roomtype.name')->join('roomtype','roomtype.id','=','room.room_type_id')->paginate(5);
        return view('admin.Rooms.index',compact('room')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roomTypes = roomtype::all();
        return view('admin.Rooms.create')
            ->with('roomTypes', $roomTypes)
            ->with('selroomtype',null);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $room = room::create([
            'room_type_id' => $request->room_type_id,
            'room_no'      => $request->room_no,
            
        ]);

        return redirect()->route('adminRooms.index');
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
        $rooms = room::findOrFail($id);

        $roomTypes = roomtype::all();
        $selroomtype = roomtype::findOrFail($rooms->room_type_id);

        return view('admin.Rooms.edit', compact('rooms','roomTypes','selroomtype'));
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
        $room = room::findOrFail($id);

        $request->validate([
             'room_type_id' => 'required',
            'room_no'      => ['required', 'string', 'max:255', Rule::unique('room')->ignore($room->id)],
           
        ]);

        $room->update([
            'room_type_id' => $request->room_type_id,
            'room_no'      => $request->room_no,
           
        ]);


        return redirect()->route('adminRooms.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $room = room::findOrFail($id);

        $room->delete();

        return redirect()->route('adminRooms.index');
    }
}

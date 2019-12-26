<?php

namespace App\Http\Controllers;

use App\roomtype;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class RoomstypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result= roomtype::paginate(5);
        return view('admin.Roomstype.index',compact('result')); 
    }

    public function userIndex()
    {
        $result= roomtype::paginate(5);
        return view('User.Room',compact('result')); 
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.Roomstype.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj=new roomtype();
        $obj->name=$request->input('name');
        $obj->description=$request->input('description');
        $obj->capacity=$request->input('capacity');
        $obj->floor=$request->input('floor');
        $obj->price=$request->input('price');

        $obj->save();

        return redirect('adminRoomstype');
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
        $roomstype = roomtype::findOrFail($id);

        return view('admin.Roomstype.edit', compact('roomstype'));
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
        $roomstype = roomtype::findOrFail($id);

        $request->validate([
            'name' => ['required', 'string', 'max:20', Rule::unique('roomtype')->ignore($roomstype->id)],
            'description' => 'required|min:3',
            'capacity' => 'required',
            'floor'=>'required',
            'price'=>'required'
        ]);

        $roomstype->update([
            'name' => $request->name,
            'description' => $request->description,
            'capacity' => $request->capacity,
            'floor'=>$request->floor,
            'price'=>$request->price,
        ]);

        return redirect()->route('adminRoomstype.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $roomstype = roomtype::findOrFail($id);

        $roomstype->delete();

        return redirect('adminRoomstype');
    }
}

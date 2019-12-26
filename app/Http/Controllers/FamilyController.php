<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\room;
use App\roomtype;
use App\roomallocate;

class FamilyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('User.Family');
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
        $arr = [];
         $room = \DB::select('select id from room where room_type_id = ?', [$request->room_type_id]);
        
        print_r($room[1]->id);
             
       // print_r($room[0]->id);
        //print_r($room[1]->id);
        //print_r($room[2]->id);
        for($i=0;$i<count($room);$i++)
        {
            $result = \DB::select('select id from roomallocate where room_id != ?', [$room[1]->id]);
           print_r($result);
           //array_push($arr,$result[0]->room_id);
             $room = \DB::table('room_allocate')->select('room_allocate.*','rooms.room_no','user.first_name')
                ->join('rooms','room_allocate.room_id','=','rooms.id')
                ->join('user','room_allocate.user_id','=','user.id')
                ->paginate(8);
            
        }
     //print_r($arr);

        /*$room = room::where('room_type_id', '!=', [$arr[0]])
                ->where('that', '=', 1),
                ->get();*/
        //$room = \DB::select('select id from room where id != ? ',[$arr[0]]);
       /*for($i=0;$i<count($room);$i++)
        {
           
             for($j=0;$j<count($arr);$j++)
             {
                 print_r([$room[$i]->id]);
                print_r([$arr[$j]]);
                if([$room[$i]->id]==[$arr[$j]])
                {
                    break;
                }
                else
                {
                    
                }
             }
            
        }*/
          echo"\n";
          //print_r($room);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $result = roomtype::findOrFail($id);
        return view('user.Family', compact('result'));
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
    
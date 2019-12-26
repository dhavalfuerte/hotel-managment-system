<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\service;
use Illuminate\Validation\Rule;

class AdminServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result= service::paginate(5);
        return view('Admin.Service.Service',compact('result')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Service.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj=new service();
        $obj->service=$request->input('service');
        
        $obj->save();
        
        return redirect('adminService');
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
        $service = service::findOrFail($id);

        return view('Admin.Service.edit', compact('service'));
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
        $service = service::findOrFail($id);

        $request->validate([
            'service' => ['required', 'string', 'max:200'],
        ]);

        $service->update([
            'service' => $request->service,
        ]);

        return redirect()->route('adminService.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = service::findOrFail($id);

        $service->delete();

        return redirect('adminService');
    }
}

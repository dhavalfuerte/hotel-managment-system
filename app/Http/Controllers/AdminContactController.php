<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\contact;
use Illuminate\Validation\Rule;

class AdminContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result= contact::paginate(5);
        return view('Admin.Contact.Contact',compact('result')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Contact.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj=new contact();
        $obj->name=$request->input('name');
        $obj->email=$request->input('email');
        $obj->subject=$request->input('subject');
        
        $obj->save();
        
        return redirect('adminContact');
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
        $contact = contact::findOrFail($id);

        return view('Admin.Contact.edit', compact('contact'));
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
        $contact = contact::findOrFail($id);

        $request->validate([
            'name' => ['required', 'string', 'max:20', Rule::unique('contact')->ignore($contact->id)],
            'email' => 'required|email',
            'subject' => 'required|min:3',
        ]);

        $contact->update([
            'name' => $request->name,
            'email' => $request->email,
            'subject' => $request->subject,
        ]);

        return redirect()->route('adminContact.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $contact = contact::findOrFail($id);

        $contact->delete();

        return redirect('adminContact');
        
    }
}

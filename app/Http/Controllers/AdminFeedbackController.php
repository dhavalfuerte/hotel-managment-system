<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;
use App\feedback;

class AdminFeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result= feedback::paginate(5);
        return view('Admin.Feedback.Feedback',compact('result'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.Feedback.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obj=new feedback();
        $obj->name=$request->input('name');
        $obj->email=$request->input('email');
        $obj->feedback=$request->input('feedback');

        $obj->save();

        return redirect('adminFeedback');
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
        $feedback = feedback::findOrFail($id);

        return view('Admin.Feedback.edit', compact('feedback'));
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
        $feedback = feedback::findOrFail($id);

        $request->validate([
            'name' => ['required', 'string', 'max:20', Rule::unique('feedback')->ignore($feedback->id)],
            'email' => 'required|email',
            'feedback' => 'required|min:3',
        ]);

        $feedback->update([
            'name' => $request->name,
            'email' => $request->email,
            'feedback' => $request->feedback,
        ]);

        return redirect()->route('adminFeedback.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $feedback = feedback::findOrFail($id);

        $feedback->delete();

        return redirect('adminFeedback');

    }
}

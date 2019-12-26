<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\user;

use Validator;
use Auth;
use Hash;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $users = user::all();
       //print_r($users);
        return view('User.login');
    }

     public function loginsuccess(Request $request)
    {
         
        $data = $request->all();
       print_r($data);
       
       if($request->login=="login")
       {
            $rules = [
                'email' => "required|email",
                'password' => "required",
            ];
            $messages = [
                'email.required' => 'please enter email id',
                'password.required' => 'please enter pasword',
            ];
            $validator = Validator::make($data, $rules, $messages);
            
            if($validator->fails()) {
               
                return back()->withInput()->withErrors($validator);
            }
                
            
            $credentials = $request->only('email', 'password');
          
            if (Auth::attempt($credentials)) 
            {
               return redirect()->to('home');
            }
            else
            {
                return redirect()->to('login');
            }
        }
        else
        {
            return redirect()->to('signup');
        }
    }
    public function add(Request $request)
    {
        $users = user::all();
        return view('User.SignUp');
    }
    public function index()
    {
        //
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
        //
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
        //
    }
     
    public function success(Request $request)
    {
        $data = $request->all();
        $rules = [
            'first_name' => "required|alpha",
            'last_name' => "required|alpha",
            'user_name' => "required|alpha",
            'email' => "required|email",
            'password' => "required|confirmed",
            'password_confirmation' => "required",
            'mobile_no' => "required|digits:10",
            'address' => "required|alpha_num",
            'city' => "required|alpha",
            'state' => "required|alpha",
            'country' => "required|alpha",
            'zip_code' => "required|numeric",
        ];
        $messages = [
            'first_name.required' => 'please enter first name',
            'last_name.required' => 'please enter Last name',
            'user_name.required' => 'please enter User name',
            'email.required' => 'please enter email',
            'email.email' => 'Enter email in proper format',
            'password.required' => 'please enter Password',
            'password_confirmation.required' => 'please enter Cofirmed password',
            'mobile_no.required' => 'please enter Mobile No.',
            'course.required' => 'please enter course',
            'address.required' => 'please enter address',
            'city.required' => 'please enter city',
            'state.required' => 'please enter state',
            'country.required' => 'please enter country',
            'zip_code.required' => 'please enter zip_code',

        ];

        $validator = Validator::make($data, $rules, $messages);
        if ($validator->fails()) {
            return back()->withInput()
                ->withErrors($validator);
        }

        user::insert([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'user_name' => $request->user_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'mobile_no' => $request->mobile_no,
            'gender' => $request->gender,
            'address' => $request->address,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
            'zip_code' => $request->zip_code,
            "created_at" => date("Y-m-d H:i:s"),
            "updated_at" => date("Y-m-d H:i:s"),
        ]);
        return redirect()->to('login')->with('message', 'Thank You for Register');
    }
}

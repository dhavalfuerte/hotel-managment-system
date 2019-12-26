<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Session;

class HomeController extends Controller
{
    public function index()
    {
    	return view('home');
    }
    public function logout()
    {
    	Auth::logout();
    	Session::flush();
    	return redirect('login');
    }
}

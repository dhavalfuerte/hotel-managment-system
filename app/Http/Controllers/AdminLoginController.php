<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Validator;
use Illuminate\Support\Facades\DB;
use Hash;
class AdminLoginController extends Controller
{
    
    

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $admin =Admin::all();
       // print_r($users);
        return view('Admin.login');
    }
    public function loginsuccess(Request $request)
    {

    $unm = $request->email;
    $pwd = $request->password;

      $q = "select * from admin where email='".addslashes($unm)."' and password='".addslashes($pwd)."'";

    $res=DB::select($q);
    if(! empty ($res))
    {
      $request->Session()->put('adminemail',$unm);
      $request->Session()->put('adminstatus',true);
      return redirect("admindashboard");
    }
    else {
        return redirect("AdminLogin");
    }
    }
    public function index()
    {
        return view('Admin.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Session()->forget('adminemail');
        Session()->forget('adminstatus');

        return redirect("AdminLogin");
    }
    
}

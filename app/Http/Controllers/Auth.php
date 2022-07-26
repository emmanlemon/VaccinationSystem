<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use App\Models\Registration;
use Hash;
use Session;

class Auth extends Controller
{
    public function index(){
        return view('Auth.Login');
    }

    public function store(Request $request){
        $request -> validate([
            'studentNumber' => 'required',
            'password' => 'required'
        ]);

        $admin = Admin::where('username', '=', $request->studentNumber)->first();
        $Registration = Registration::where('studentNumber', '=', $request->studentNumber)->first();

        if($admin)
        {
            if($request->password ==  $admin->password)
            {
                $request->session()->put('loginId', $admin->id);
                return redirect('/admin');
            }
            else
            {
                return back()->with('fail', 'Password does not match');
            }
        }
        else if($Registration)
        {
            if($request->password ==  $Registration->studentNumber)
            {
                $request->session()->put('loginId', $Registration->id);
                return redirect('/registration');
                
            }
            else
            {
                return back()->with('fail', 'Password does not match');
            }
        }
        else
        {
            return back()->with('fail' ,'This username is not existing');
        }
    }
    
    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('/auth');
        }
    }

}

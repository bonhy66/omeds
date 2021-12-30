<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function list(){
        return view('admin.user.user');
    }

    public function login()
 {
    return view('admin.login');


 }
    public function doLogin(Request $request)
    {
        // dd($request->all());

        $userInfo=$request->except('_token');
        if(Auth::attempt($userInfo))
        {
            return redirect()->route('admin.index')->with('message','Login successful.');
        }
        return redirect()->back()->with('error','Invalid user credentials');
    } 

public function Adminlogout()
 {
    //dd("ok");
    Auth::logout();
    return redirect()->route('admin.login')->with('message','Logging out.');
 }
}

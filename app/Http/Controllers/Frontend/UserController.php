<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Product;
use Illuminate\Support\Facades\Auth;

Use App\Models\User;

class UserController extends Controller
{
    public function frontMaster(){
        return view('frontend.master');
    }

    public function index(){
        $products = Product::with('category','company')->get();
        // dd($products); 
        return view('frontend.pages.index',compact('products'));
    }
    
    public function userlogin()
    {
        // dd("ok");
        return view('frontend.pages.user_login');

    }

    public function dologin(Request $request)
    {
        // dd($request->all());

        $userInfo=$request->except('_token');
        // dd(Auth::attempt($userInfo));
        if(Auth::attempt($userInfo))
        {
            return redirect()->route('frontend.index')->with('message','Login successful.');
        }
        return redirect()->back()->with('error','Invalid user credentials');
    } 

    public function userlogout()
    {
        //dd("ok");
        session()->forget('cart');
        Auth::logout();
        return redirect()->route('frontend.index')->with('message','Logging out.');
    }

    public function registration()
    {
        // dd("ok");
        return view('frontend.pages.registration');

    }

    public function doregistration(Request $request)
    {
        //dd($request->all());
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt( $request->password),
            'address'=>$request->address,
            'phone_number'=>$request->phone
        ]);


        return redirect()->route('user.login');
    } 
}

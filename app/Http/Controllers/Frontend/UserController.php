<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use App\Models\Product;

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
}

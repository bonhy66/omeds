<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Company;


class ProductController extends Controller
{
    public function list(){
        $products = Product::with('category','company')->get();
        // dd($products);
        return view('admin.product.product',compact('products'));
    }

    public function form(){
        $categories = Category::all();
        // dd($categories);
        $companies = Company::all();
        //dd($companies);
        return view('admin.product.product-add',compact('categories','companies'));

    }

    public function postProduct(Request $request){
        // dd($request->all());
        if ($request->hasfile('image')) {
            $file=$request->file('image');
            // dd(date('Ymdhms'));
            $filename= date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/product',$filename);
        }


        Product::create([
            //field name from DB || field name from form 
            'image'=>$filename,
            'name'=>$request->name,
            'category_id'=>$request->category,
            'company_id'=>$request->comapny,
            'quentity'=>$request->quentity, 
            'price'=>$request->price
        ]);
        return redirect()->back();
     }


}

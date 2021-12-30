<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
   


    public function list(){
        // $products = Product::with('Category')->get();
        $categories = Category::all();
        // dd($categories);
        return view('admin.category.category',compact('categories'));
    }
    
    public function form(){
        return view('admin.category.category-create');
    }
    
    public function postCategory(Request $request){
        // dd($request->all());
        Category::create([
            //field name from DB || field name from form 
            'name'=>$request->name,
            'details'=>$request->details
        ]);
        return redirect()->route('admin.category.list');

    }
    public function deleteCategory($id){
        $category = Category::find($id);

        if ($category) {
           $category->delete();
           return redirect()->back();
        }

    }
}

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

    public function productSearch(){
        // dd(request()->all());
        $key=null;
        if(request()->Search){
            $key=request()->Search;
            $products = Product::with('category')
                ->where('name','LIKE','%'.$key.'%')
                ->get();
            return view('admin.product.product',compact('products','key'));
        }
       
        $products = Product::with('category')->get();
        return view('admin.product.product',compact('products','key'));
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
            'company_id'=>$request->company,
            'quantity'=>$request->quantity, 
            'price'=>$request->price
        ]);
        
        return redirect()->route('admin.product.list');
        
     }
    
    
    public function viewProduct($id){
       $product = Product::find($id);
       return view('admin.product.product_view', compact('product'));
   }
   

    public function editProduct($id){
        $product = Product::find($id);
        $categories = Category::all();
        $companies = Company::all();
        return view('admin.product.product_update', compact('product','categories','companies'));
        

    
    }
    public function updateProduct(Request $request,$id){
        $product = Product::find($id);
        if ($product) {
            $product->update([
            'name'=>$request->name,
            'category_id'=>$request->category,
            'company_id'=>$request->company,
            'quantity'=>$request->quantity, 
            'price'=>$request->price

            ]);
            return redirect()->route('admin.product.list')->with('success','Product Updated Successfully.');
        }
       
     
    }



   public function deleteProduct($id){
        $product = Product::find($id);

        if ($product)
         {
          $product->delete();
          return redirect()->back();
         }  

    }


}

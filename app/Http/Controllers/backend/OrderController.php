<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Product;


class OrderController extends Controller
{
    public function list(){
        $orders=Order::all();
       // dd($orders);
        return view('admin.order.order',compact('orders'));
    }
    
    public function form(){
        return view('admin.order.order-add');
    }

    public function postOrder(Request $request){
        //dd($request->all());
        if ($request->hasfile('image')) {
            $file=$request->file('image');
            // dd(date('Ymdhms'));
            $filename= date('Ymdhms').'.'.$file->getClientOriginalExtension();
            $file->storeAs('/uploads/order',$filename);
        }


        Order::create([
            //field name from DB || field name from form 
            'name'=>$request->name,
            'image'=>$filename,
            'category'=>$request->category,
            'price'=>$request->price,
        
        ]);
        
        return redirect()->route('admin.order.list');
    }

    public function deleteOrder($id){
        $order = Order::find($id);
 
       if ($order)
        {
            $order->delete();
            return redirect()->route('admin.order.list');
        }
    }


   


}
    

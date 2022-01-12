<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Order;
use App\Models\Orderdetail;

class OrderController extends Controller
{
    public function checkout()
    {
       return view('frontend.pages.checkout');
    }



    public function orderPlace(Request $request)
    {
        $carts = session('cart');
  
        $total = array_sum(array_column($carts,'total_price'));



        DB::beginTransaction();
        try{
          $order =  Order::create([
                'user_id' => auth()->user()->id,
                'receiver_name' => $request->receiver_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'total' => $total,
                'status' => 'pending',
                'date' =>  $request->date,
            ]);



            foreach($carts as $cart){
                Orderdetail::create([
                    'order_id' => $order->id,
                    'product_id' => $cart['product_id'],
                    'quantity' => $cart['quantity'],
                    'price' => $cart['price'],
                    'sub_total' => $cart['total_price'],
                   
                ]);
            }

            if($order){
                session()->forget('cart');
            }


            DB::commit();

            return redirect()->back();

        }catch(Throwable $throw){
            DB::rollback();
            return redirect()->back();
        }
    }
}

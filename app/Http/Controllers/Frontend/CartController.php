<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addtocart($id){
        $product = Product::find($id);
        $cart= session()->has('cart') ? session()->get('cart') : [];
        if(array_key_exists($product->id,$cart))
        {
            $cart[$product->id]['quantity']++;
            $cart[$product->id]['total_price'] =  (int)$cart[$product->id]['quantity'] * (int) $cart[$product->id]['price'];
        }
        else
        {
            $cart[$product->id] = [
                'product_id'=>  $product->id,
                'image'=>$product->image,
                'name' =>$product->name,
                'price' =>$product->price,
                'quantity' => 1,
                'total_price'=> (int)$product->price * 1
            ];

        }

        session()->put('cart',$cart);
        return redirect()->back();
    }

    public function getCart()
    {
       $carts= session()->get('cart');
        return view('website.pages.cart',compact('carts'));
    }

    public function clearCart()
    {
        session()->forget('cart');
        return redirect()->back()->with('message','Cart cleared successfully.');

    }
    public function viewcart()
    {
        return view('frontend.pages.addtocart');
    }

}

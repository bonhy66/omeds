<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Orderdetail;
use App\Models\Product;
use App\Models\Order;

use Illuminate\Http\Request;

class OrderdetailsController extends Controller
{
    public function list(){
        $Orderdetails=Orderdetail::with('productRelation')->get();
    //   dd($Orderdetails);
        return view('admin.orderdetails.order-details',compact('Orderdetails'));
    }
    
    public function form(){
        return view('admin.orderdetails.order-details.view');
    }

    public function orderview($id){
        $Orderdetails=Order::find($id);
        //dd($Orderdetails);
        return view('admin.orderdetails.order_view',compact('Orderdetails'));
    }
}

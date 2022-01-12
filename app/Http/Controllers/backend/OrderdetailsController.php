<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Orderdetail;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderdetailsController extends Controller
{
    public function list(){
        $Orderdetails=Orderdetail::all();
      //dd($orderdetails);
        return view('admin.order-details.order-details',compact('Orderdetails'));
    }
    
    public function form(){
        return view('admin.order-details.order-details.view');
    }
}

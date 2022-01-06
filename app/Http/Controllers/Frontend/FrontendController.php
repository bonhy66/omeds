<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function viewSingleProduct($id)
    {
       $product = Product::find($id);
       return view('frontend.pages.single_product', compact('product'));
    }
}

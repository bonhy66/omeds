@extends('frontend.master')

@section('contents')
<div class="row product__filter">
           <div class="col-md-4"></div>
         
            <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/product/product-1.jpg">
                        <span class="label">New</span>
                        <ul  class="product__hover" style="position: static">
                            
                            <li><a href="{{route('user.singleProduct.view',$product->id)}}">
                                <img src="{{url('/uploads/product/'.$product->image)}}" alt="">
                                    <span>Compare</span></a></li>
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h5>{{$product->name}}</h5>
                       
                        <h5>Price {{$product->price}}</h5>
                        <h5>Quantity {{$product->quantity}}</h5>
                        
                    </div>
                </div>
            </div>
       
        </div>

@endsection

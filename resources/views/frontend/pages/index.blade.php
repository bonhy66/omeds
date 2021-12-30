@extends('frontend.master')

@section('contents')



<section class="banner spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="banner__item banner__item--middle">
                    <div class="banner__item__text">
                        <h2>Accessories</h2>
                        <a href="#">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



        <div class="row product__filter">
            @foreach ($products as $product)
            <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
                <div class="product__item">
                    <div class="product__item__pic set-bg" data-setbg="img/product/product-1.jpg">
                        <span class="label">New</span>
                        <ul  class="product__hover" style="position: static">
                            
                            <li><a href="#"><img src="{{url('/uploads/product/'.$product->image)}}" alt="">
                                    <span>Compare</span></a></li>
                            
                        </ul>
                    </div>
                    <div class="product__item__text">
                        <h6>{{$product->name}}</h6>
                        <a href="#" class="add-cart">+ Add To Cart</a>
                        <h5>Price {{$product->price}}</h5>
                        <h5>Quentity {{$product->quentity}}</h5>
                        <div class="product__color__select">
                            <label for="pc-1">
                                <input type="radio" id="pc-1">
                            </label>
                            <label class="active black" for="pc-2">
                                <input type="radio" id="pc-2">
                            </label>
                            <label class="grey" for="pc-3">
                                <input type="radio" id="pc-3">
                            </label>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>


    @endsection

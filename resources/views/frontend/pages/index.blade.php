@extends('frontend.master')

@section('contents')

<section class="banner spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="banner__item banner__item--middle">

                    @if(session()->has('error'))
                    <p class="alert alert-danger" style="color:red;">{{session()->get('error')}}</p>
                    @endif
                    <div class="banner__item__text">
                        <h2>Accessories</h2>
                        <a href="#">Shop now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<div class="row product__filter" style="padding-left: 100px;">
    @foreach ($products as $product)
    <div class="col-lg-3 col-md-6 col-sm-6 col-md-6 col-sm-6 mix new-arrivals">
        <div class="product__item">
            <div class="product__item__pic set-bg" data-setbg="img/product/product-1.jpg">
                <span class="label">New</span>
                <ul class="product__hover" style="position: static">

                    <li><a href="{{route('user.singleProduct.view',$product->id)}}"><img
                                src="{{url('/uploads/product/'.$product->image)}}" style="height: 250px;" alt="">
                            <span>Compare</span></a></li>

                </ul>
            </div>
            <div class="product__item__text">
                <h6 style="text-align:center">{{$product->name}}</h6>
                <a href="{{route('addtocart',$product->id)}}" class="add-cart">+ Add To Cart</a>
                <h5 style="text-align:center">Price {{$product->price}}</h5>
                <div class="product__color__select">


                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

</div>
</section>


@endsection

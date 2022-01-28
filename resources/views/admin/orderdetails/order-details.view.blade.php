@extends('admin.master')


@section('contents')


<form action="{{route('admin.order.post')}}" method='post' enctype="multipart/form-data">
    @csrf



    <div class="form-group">
        <label for="exampleInputPassword3">Order-id</label>
        <input name="order-id" type="text" class="form-control" id="exampleInputPassword3" placeholder="Order-id">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword4">Product-id</label>
        <input name="product-id" type="text" class="form-control" id="exampleInputPassword4" placeholder="Product-id">
    </div>


    <div class="form-group">
        <label for="exampleInputPassword5">Subtotal</label>
        <input name="subtotal" type="text" class="form-control" id="exampleInputPassword5" placeholder="Subtotal">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword6">Price</label>
        <input name="price" type="text" class="form-control" id="exampleInputPassword6" placeholder="Price">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword7">Quantity</label>
        <input name="quantity" type="text" class="form-control" id="exampleInputPassword7" placeholder="Quantity">
    </div>








</form>

@endsection

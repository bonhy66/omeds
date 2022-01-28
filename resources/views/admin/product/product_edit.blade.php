@extends('admin.master')

@section('contents')
<h4 style="text-align:center">Edit product</h4>


@if(session()->has('success'))
    <p class="alert alert-success">
        {{session()->get('success')}}
    </p>
@endif

<form action="{{route('admin.product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Product Name</label>
        <input name="name" value="{{$product->name}}" placeholder="Enter Product Name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    </div>

@endsection
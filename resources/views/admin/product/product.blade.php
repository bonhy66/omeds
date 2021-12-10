@extends('admin.master')

@section('contents')

<a href="{{route('admin.product.add')}}" class="btn btn-primary">Add Product</a>

<table class="table">
  <caption>List of users</caption>
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Image</th>
      <th scope="col">name</th>
      <th scope="col">Category</th>
      <th scope="col">Company</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    @foreach($products as $key=>$product)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>
        <img width="100px" src="{{url('/uploads/product/'.$product->image)}}" alt="">
      </td>
      <td>{{$product->name}}</td>
      <td>{{$product->category->name}}</td>
      <td>{{$product->company->name}}</td>
      <td>{{$product->quentity}}</td>
      <td>{{$product->price}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
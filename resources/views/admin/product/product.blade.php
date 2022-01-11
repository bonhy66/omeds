@extends('admin.master')

@section('contents')

<a href="{{route('admin.product.add')}}" class="btn btn-primary">Add Product</a>
<form action="{{route('admin.product.search')}}" method="get">

  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4"></div>
    <div class="col-md-4">
    <input type="text" class="from-control" name="Search" placeholder="search here....">
      <button class="btn btn-primary" type="submit">Search</button>
     </div>
  </div>
</form>

<table class="table">
  
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Category</th>
      <th scope="col">Company</th>
      <th scope="col">Quantity</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
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
      <td>{{optional($product->company)->name}}</td>
      <td>{{$product->quantity}}</td>
      <td>{{$product->price}}</td>
      <td>
        <a href ="{{route('admin.product.view',$product->id)}}" class="btn btn-info">View</a>
        <a href ="{{route('admin.product.edit',$product->id)}}" class="btn btn-info">Edit</a>
        <a href="{{route('admin.product.delete',$product->id)}}" class="btn btn-danger">Delete</a>


      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
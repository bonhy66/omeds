@extends('admin.master')

@section('contents')

<a href="{{route('admin.order.add')}}" class="btn btn-primary">Add Order</a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Image</th>
      <th scope="col">Category</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($orders as $key=>$order)
    <tr>
      <td scope="row">{{$key+1}}</td>
      <td>{{$order->name}}</td>
      <td><img width="100px" src="{{url('/uploads/order/'.$order->image)}}" alt=""></td>
      <td>{{$order->category}}</td>
      <td>{{$order->price}}</td>
      <td>
        <a href="" class="btn btn-info">Edit</a>
        <a href="{{route('admin.order.delete',$order->id)}}" class="btn btn-danger">Delete</a>
      </td>
      
    </tr>

    @endforeach
  </tbody>
</table>


@endsection

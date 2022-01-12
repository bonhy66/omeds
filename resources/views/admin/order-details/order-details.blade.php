
@extends('admin.master')

@section('contents')

<!-- <a href="{{route('admin.order.add')}}" class="btn btn-primary">Add Order</a> -->

<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Order-id</th>
      <th scope="col">Product-id</th>
      <th scope="col">Subtotal</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($Orderdetails as $key=>$data)
    <tr>
      <td scope="row">{{$key+1}}</td>
      <td>{{$data->order-id}}</td>
      <td>{{$data->product-id}}</td>
      <td>{{$data->subtotal}}</td>
      <td>{{$data->price}}</td>
      <td>{{$data->quantity}}</td>
      <td>
        <a href="" class="btn btn-info">view</a>
      <!--  <a href="{{route('admin.order.delete',$order->id)}}" class="btn btn-danger">Delete</a>
      </td> -->
      
    </tr>

    @endforeach
  </tbody>
</table>


@endsection



@extends('admin.master')

@section('contents')

<!-- <a href="{{route('admin.order.add')}}" class="btn btn-primary">Add Order</a> -->

<h4 style="text-align:center">Order Details</h4>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#SL</th>
      <th scope="col">Order-id</th>
      <th scope="col">Product_name</th>
      <th scope="col">Subtotal</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($Orderdetails as $key=>$data)
    <tr>
      <td scope="row">{{$key+1}}</td>
      <td>{{$data->order_id}}</td>
      <td>{{$data->productRelation->name}}</td>
      <td>{{$data->sub_total}}</td>
      <td>{{$data->price}}</td>
      <td>{{$data->quantity}}</td>
      
    </tr>

    @endforeach
  </tbody>
</table>


@endsection


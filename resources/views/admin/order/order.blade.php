@extends('admin.master')

@section('contents')

<h4 style="text-align:center">All Order</h4>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Receiver_name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone</th>
            <th scope="col">Address</th>
            <th scope="col">Status</th>
            <th scope="col">Total</th>
            <th scope="col">Date</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $key=>$order)
        <tr>
            <td scope="row">{{$key+1}}</td>
            <td>{{$order->receiver_name}}</td>
            <td>{{$order->email}}</td>
            <td>{{$order->phone}}</td>
            <td>{{$order->address}}</td>
            <td>{{$order->status}}</td>
            <td>{{$order->total}}</td>
            <td>{{$order->date}}</td>
            <td>
                <a href="{{route('admin.order-details.view',$order->id)}}" class="btn btn-info">view</a>
                <a href="{{route('admin.order.delete',$order->id)}}" class="btn btn-danger">Delete</a>

                <form action="{{route('order.update',$order->id)}}" method="post">
                    @csrf

                    <select class="form-control" name="status" style="width: 136px;">

                        <option value="processed">Processed</option>
                        <option value="delivered">Delivered</option>

                    </select>
                    <button class="btn btn-primary">Update</button>
                </form>
            </td>

        </tr>

        @endforeach
    </tbody>
</table>


@endsection

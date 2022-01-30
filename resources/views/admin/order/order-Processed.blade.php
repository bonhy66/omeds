@extends('admin.master')

@section('contents')

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
            
        </tr>
    </thead>
    <tbody>
        @if($processed->count()>0)
        @foreach($processed as $key=>$data)
        <tr>
            <td scope="row">{{$key+1}}</td>
            <td>{{$data->receiver_name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->phone}}</td>
            <td>{{$data->address}}</td>
            <td>{{$data->status}}</td>
            <td>{{$data->total}}</td>
            <td>{{$data->date}}</td>



        </tr>

        @endforeach

        @else

        <h2>No data found.</h2>
        @endif


    </tbody>
</table>


@endsection

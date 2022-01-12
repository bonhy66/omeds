@extends('frontend.master')

@section('contents')

<h4>Details</h4>

<form action="{{route('order.place')}}" method='post' enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="formGroupExampleInput">Receiver_Name</label>
        <input name="receiver_name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Receiver_Name">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput2">Email</label>
        <input name="email" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Email">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput3">Phone</label>
        <input name="phone" type="text" class="form-control" id="formGroupExampleInput3" placeholder="Phone">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput4">Address</label>
        <input name="address" type="text" class="form-control" id="formGroupExampleInput4" placeholder="Address">
    </div>
    <div class="form-group">
        <label for="formGroupExampleInput5">Date</label>
        <input name="date" type="date" class="form-control" id="formGroupExampleInput5" placeholder="Date">
    </div>
    <button type="submit" class="btn btn-primary">submit</button>

</form>



@endsection

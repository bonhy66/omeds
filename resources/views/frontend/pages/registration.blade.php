@extends('frontend.master')

@section('contents')

<form action="{{route('user.doRegistration')}}" method='post' enctype="multipart/form-data">
    @csrf


    <div class="form-row">

        <div class="form-group">
            <label for="inputAddress">Name</label>
            <input name="name" type="text" class="form-control" id="inputAddress" placeholder="Name">
        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Email</label>
            <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email">
        </div>
        <div class="form-group col-md-6">
            <label for="inputPassword4">Password</label>
            <input name="password" type="password" class="form-control" id="inputPassword4" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input name="address" type="text" class="form-control" id="inputAddress" placeholder="Address">
        </div>
        <div class="form-group">
            <label for="inputAddress">Phone</label>
            <input name="phone" type="text" class="form-control" id="inputAddress" placeholder="Phone_Number">
        </div>


    <button type="submit" class="btn btn-primary">Sign in</button>
</form>

@endsection

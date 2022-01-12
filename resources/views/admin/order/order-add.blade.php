@extends('admin.master')


@section('contents')
<form action="{{route('admin.order.post')}}" method='post' enctype="multipart/form-data">
    @csrf

    <form>
  

  <div class="form-group">
    <label for="exampleInputPassword3">Receiver_Name</label>
    <input name ="receiver_name" type="text" class="form-control" id="exampleInputPassword3" placeholder="Receiver_name">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword4">Email</label>
    <input name ="email" type="text" class="form-control" id="exampleInputPassword4" placeholder="Email">
  </div>


  <div class="form-group">
    <label for="exampleInputPassword4">Phone</label>
    <input name ="phone" type="text" class="form-control" id="exampleInputPassword4" placeholder="Phone">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword4">Address</label>
    <input name ="address" type="text" class="form-control" id="exampleInputPassword4" placeholder="Address">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword4">Status</label>
    <input name ="status" type="text" class="form-control" id="exampleInputPassword4" placeholder="Status">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword4">Total</label>
    <input name ="total" type="text" class="form-control" id="exampleInputPassword4" placeholder="Total">
  </div>


  <div class="form-group">
    <label for="exampleInputPassword4">Date</label>
    <input name ="date" type="text" class="form-control" id="exampleInputPassword4" placeholder="Date">
  </div>





  
</form>

@endsection
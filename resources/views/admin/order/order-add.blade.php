@extends('admin.master')


@section('contents')
<form action="{{route('admin.order.post')}}" method='post' enctype="multipart/form-data">
    @csrf

    <form>
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
 </div>


  <div class="form-group">
    <label for="exampleInputPassword2">Image</label>
    <input name="image" type="file" class="form-control" id="exampleInputPassword2" placeholder="Image">
  </div>
  

  <div class="form-group">
    <label for="exampleInputPassword3">Category</label>
    <input name ="category" type="text" class="form-control" id="exampleInputPassword3" placeholder="Category">
  </div>

  <div class="form-group">
    <label for="exampleInputPassword4">Price</label>
    <input name ="price" type="text" class="form-control" id="exampleInputPassword4" placeholder="Price">
  </div>




  <button class="btn btn-primary" type="submit">Submit order</button>
</form>

@endsection
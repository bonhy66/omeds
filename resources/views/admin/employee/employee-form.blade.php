@extends('admin.master')

@section('contents')

<form action="{{route('admin.employee.post')}}" method='post'>
  @csrf

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Employee_Name</label>
      <input name="name" type="text" class="form-control" id="inputEmail4" placeholder="Employee_Name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Address</label>
      <input name="address" type="text" class="form-control" id="inputPassword4" placeholder="Address">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Phone_Number</label>
    <input name="phone" type="number" class="form-control" id="inputAddress" placeholder="Phone_Number">
  </div>
  <div class="form-group">
    <label for="inputAddress2">Designation</label>
    <input name="designation" type="text" class="form-control" id="inputAddress2" placeholder="Designation">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Salery</label>
      <input name="salery" type="text" class="form-control" id="inputCity" placeholder="Salery">
    </div>
    
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection
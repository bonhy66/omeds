@extends('admin.master')

@section('contents')

<form action="{{route('admin.employee.post')}}" method='post'>
  @csrf

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Employee_Name</label>
      <input name="name" type="text" class="form-control" id="inputEmail4" placeholder="Employee_Name">
    </div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputAddress">NID_No</label>
      <input name="nid" type="text" class="form-control" id="inputAddress" placeholder="NID">
    </div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputAddress1">Birth_Date</label>
      <input name="birth_date" type="date" class="form-control" id="inputAddress1" placeholder="Birth_date">
    </div>

    <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputAddress2">Blood group</label>
      <input name="blood_group" type="text" class="form-control" id="inputAddress2" placeholder="blood_group">
    </div>



    <div class="form-group col-md-6">
      <label for="inputAddress3">Address</label>
      <input name="address" type="text" class="form-control" id="inputAddress3" placeholder="Address">
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress4">Phone_Number</label>
    <input name="phone" type="number" class="form-control" id="inputAddress4" placeholder="Phone_Number">
  </div>

  <div class="form-group">
    <label for="inputAddress5">Joining_date</label>
    <input name="joining_date" type="date" class="form-control" id="inputAddress5" placeholder="joining_date">
  </div>
  <div class="form-group">
    <label for="inputAddress6">Department</label>
    <input name="department" type="text" class="form-control" id="inputAddress6" placeholder="Designation">
  </div>

  <div class="form-group">
    <label for="inputAddress7">Designation</label>
    <input name="designation" type="text" class="form-control" id="inputAddress7" placeholder="Designation">
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
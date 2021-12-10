@extends('admin.master')

@section('contents')
<form action="{{route('admin.company.post')}}" method='post'>
  @csrf

  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01">Company Name</label>
      <input name="name" type="text" class="form-control" id="validationDefault01" placeholder="Companyname" >
    </div>
    

  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationDefault03">Email</label>
      <input name="email" type="email" class="form-control" id="validationDefault03" placeholder="Enter email" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault04">Address</label>
      <input name="address" type="text" class="form-control" id="validationDefault04" placeholder="Address" required>
    </div>
    <div class="col-md-3 mb-3">
      <label for="validationDefault05">Phone number</label>
      <input name="phone" type="string" class="form-control" id="validationDefault05" placeholder="Phone number" required>
    </div>
  </div>
  

  <button class="btn btn-primary" type="submit">Submit form</button>

  
</form>

@endsection
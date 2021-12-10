@extends('admin.master')

@section('contents')
<form action="{{route('admin.category.post')}}" method='post'>
  @csrf
  <div class="form-group">
    <label for="exampleFormControlInput1">Category Name</label>
    <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Category name">
  </div>
  
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Category details</label>
    <textarea name="details" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <button type="submit" class="btn btn-info">Add</button>
</form>
@endsection


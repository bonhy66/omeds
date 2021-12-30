@extends('admin.master')

@section('contents')

<a href="{{route('admin.category.form')}}" class="btn btn-primary">Add Category</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Details</th>
      <th scope="col">Action</th>

      
    </tr>
  </thead>
  <tbody>
    @foreach($categories as $key=>$category)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$category->name}}</td>
      <td>{{$category->details}}</td>
      <td>
        <a href="" class="btn btn-info">Edit</a>
        <a href="{{route('admin.category.delete',$category->id)}}" class="btn btn-danger">Delete</a>

      </td>
      
    </tr>
    @endforeach 
  </tbody>
</table>
@endsection
@extends('admin.master')

@section('contents')

<a href="{{route('admin.company.entry')}}" class="btn btn-primary">Add Category</a>
<table class="table">
  <caption>List of users</caption>
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Phone_number</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($componies as $key=>$company)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$company->name}}</td>
      <td>{{$company->email}}</td>
      <td>{{$company->address}}</td>
      <td>{{$company->phone_number}}</td>
      <td>
        <a href="" class="btn btn-info">Edit</a>
        <a href="{{route('admin.employee.delete',$company->id)}}" class="btn btn-danger">Delete</a>

        

      </td>

    </tr>
    @endforeach
  </tbody>
</table>

@endsection


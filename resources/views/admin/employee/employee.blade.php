@extends('admin.master')

@section('contents')

<a href="{{route('admin.employee.form')}}" class="btn btn-primary">Add Employee</a>

<table class="table">
  <caption>List of users</caption>
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Phone_number</th>
      <th scope="col">Designation</th>
      <th scope="col">Salery</th>
    </tr>
  </thead>
  <tbody>
  @foreach($employees as $key=>$employee)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$employee->name}}</td>
      <td>{{$employee->address}}</td>
      <td>{{$employee->phone_number}}</td>
      <td>{{$employee->designation}}</td>
      <td>{{$employee->salery}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
@extends('admin.master')

@section('contents')

<h2 style="text-align:center">List of Employees</h2>
<a href="{{route('admin.employee.form')}}" class="btn btn-primary">Add Employee</a>



<table class="table">
  
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">NID</th>
      <th scope="col">Birth_Date</th>
      <th scope="col">Blood group</th>
      <th scope="col">Address</th>
      <th scope="col">Phone_number</th>
      <th scope="col">Joining Date</th>
      <th scope="col">Department</th>
      <th scope="col">Designation</th>
      <th scope="col">Salery</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($employees as $key=>$employee)
    <tr>
      <th scope="row">{{$key+1}}</th>
      <td>{{$employee->name}}</td>
      <td>{{$employee->nid}}</td>
      <td>{{$employee->birth_date}}</td>
      <td>{{$employee->blood_group}}</td>
      <td>{{$employee->address}}</td>
      <td>{{$employee->phone_number}}</td>
      <td>{{$employee->joining_date}}</td>
      <td>{{$employee->department}}</td>
      <td>{{$employee->designation}}</td>
      <td>{{$employee->salery}}</td>
      <td>
      <a href="" class="btn btn-info">Edit</a>
      <a href="{{route('admin.employee.delete',$employee->id)}}" class="btn btn-danger">Delete</a>
     </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection
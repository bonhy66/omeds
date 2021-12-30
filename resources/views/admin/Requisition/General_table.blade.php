@extands('admin.master')

@section('contents')

<a href="{{route('admin.requisition.form')}}" class="btn btn-primary">Add</a>


<table class="table">
<caption>List</caption>
  <thead>
    <tr>
      <th scope="col">#Id/th>
      <th scope="col">Name</th>
      <th scope="col">Address</th>
      <th scope="col">Phone</th>
    </tr>
  </thead>
  <tbody>
  @foreach($requisition as $key=>$requisition)
    <tr>
    <th scope="row">{{$key+1}}</th>
      <td>{{$requisition->name}}</td>
      <td>{{$requisition->address}}</td>
      <td>{{$requisition->phone_number}}</td>
    
      
    </tr>
    @endforeach
  </tbody>
</table>


@endsection
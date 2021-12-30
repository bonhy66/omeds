@extends('admin.master')

@section('contents')

<h3>Update Product</h3>
<form action="{{route('admin.product.update',$product->id)}}" method="post">
    @csrf
    @method('put')
    
    <div class="form-group">
        <label for="exampleInputEmail1">Name</label>
        <input value="{{$product->name}}" name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Product_Name">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Category</label>
           <select name="category" class="form-control" id="exampleInputPassword1">
                <option>select one</option>
                @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach

            </select>
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Company</label>
            <select name="company" class="form-control" id="exampleInputPassword2">   
                <option>select one</option>
                @foreach($companies as $company)
                  <option value="{{$company->id}}">{{$company->name}}</option>
                @endforeach
            </select>
    
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Quentity</label>
        <input value="{{$product->quentity}}" name="quentity" type="text" class="form-control" id="exampleInputPassword3" placeholder="Quentity">
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1">Price</label>
        <input value="{{$product->price}}" name="price" type="text" class="form-control" id="exampleInputPassword4" placeholder="Price">
    </div>

    
    <button type="submit" class="btn btn-primary">Update</button>
</form>
    

@endsection

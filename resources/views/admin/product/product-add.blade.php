@extends('admin.master')


@section('contents')
<form action="{{route('admin.product.post')}}" method='post' enctype="multipart/form-data">
    @csrf

    
    <div class="form-row">
        <div class="col-md-4 mb-3">
            <label for="validationCustom01">Product Image</label>
            <input name="image" type="file" class="form-control" id="validationCustom01" placeholder="Product image">
        </div>
        <div class="col-md-4 mb-3">
            <label for="validationCustom01">Name</label>
            <input name="name" type="text" class="form-control" id="validationCustom01" placeholder="Product name">
        </div>

        <div class="col-md-4 mb-3">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Category</label>
                <select name="category" class="form-control" id="exampleFormControlSelect1">
                    <option>select one</option>
                    @foreach($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach

                </select>
            </div>
        </div>

    </div>

    <div class="form-row">
        <div class="col-md-4 mb-3">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Company</label>
                <select name="company" class="form-control" id="exampleFormControlSelect1">
                    <option>select one</option>
                    @foreach($companies as $company)
                    <option value="{{$company->id}}">{{$company->name}}</option>
                    @endforeach

                </select>
            </div>
        </div>



        <div class="col-md-3 mb-3">
            <label for="validationCustom04">Quantity</label>
            <input name="quantity" type="text" class="form-control" id="validationCustom04" placeholder="Quantity">
        </div>

        <div class="col-md-3 mb-3">
            <label for="validationCustom05">Price</label>
            <input name="price" type="text" class="form-control" id="validationCustom05" placeholder="Price">
        </div>

    </div>
   
    <button class="btn btn-primary" type="submit">Submit form</button>

</form>


@endsection

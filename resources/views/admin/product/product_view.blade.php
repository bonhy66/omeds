@extends('admin.master')
@section('contents')
<input style="float: right !important;" class="btn btn-primary" type="button" onClick="PrintDiv('divToPrint');"
    value="Print">
    <h2 style="text-align:center">Product Details</h2>

<div id="divToPrint">
    <form>
        <div class="form-group">
            <label for="exampleInputPassword1">Product Image:</label>

            <p><img width="200px" src="{{url('/uploads/product/'.$product->image)}}" alt="product image"></p>

        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Product Name:</label>
            <input value="{{$product->name}}" type="text" class="form-control" id="exampleInputPassword1" readonly>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Product Category:</label>
            <input value="{{($product->category)->name}}"type="text" class="form-control" id="exampleInputPassword2" readonly>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Company:</label>
            <input value="{{($product->company)->name}}"type="text" class="form-control" id="exampleInputPassword2" readonly>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Product Quantity:</label>
            <input value="{{$product->quantity}}"type="text" class="form-control" id="exampleInputPassword2" readonly>
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Product Price:</label>
            <input value="{{$product->price}}"type="text" class="form-control" id="exampleInputPassword2" readonly>
        </div>
       
       
    </form>

    <div class="container">
        
    </div>
</div>



<script language="javascript">
    function PrintDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }

</script>
@endsection

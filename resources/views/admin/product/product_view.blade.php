@extends('admin.master')
@section('contents')
<div id="divToPrint">
    <h1>Product Details</h1>
    <div class="container">
        <p>Product Image:<img width="200px" src="{{url('/uploads/product/'.$product->image)}}" alt="product image"></p>
        <p>Product Name: {{$product->name}}</p>
        <p>Product Category: {{($product->category)->name}}</p>
        <p>Company: {{($product->company)->name}}</p>
        <p>Product Quantity: {{$product->quentity}}</p>
        <p>Product Price: {{$product->price}}</p>
    </div>
</div>
    <input class="btn btn-primary" type="button" onClick="PrintDiv('divToPrint');" value="Print">

@endsection

<script language="javascript">
    function PrintDiv(divName) 
    {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }

</script>

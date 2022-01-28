@extends('admin.master')


@section('contents')

<input style="float: right !important;" class="btn btn-primary" type="button" onClick="PrintDiv('divToPrint');"
    value="Print">
<div id="divToPrint">



    <h4 style="text-align:center">View Details</h4>

    <p><b style="padding-right: 25px;">Receiver_Name:</b>  <span>{{$Orderdetails->receiver_name}}</span></p>
    <p><b>Email: {{$Orderdetails->email}}</b></p>
    <p><b>Phone: {{($Orderdetails->phone)}}</b></p>
    <p><b>Address: {{($Orderdetails->address)}}</b></p>
    <p><b>Status:{{($Orderdetails->status)}}</b></p>
    <p><b>Total: {{($Orderdetails->total)}}</b></p>
    <p><b>Date: {{($Orderdetails->date)}}</b></p>



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

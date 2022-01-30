@extends('admin.master')


@section('contents')

<input style="float: right !important;" class="btn btn-primary" type="button" onClick="PrintDiv('divToPrint');"
    value="Print">
<div id="divToPrint">

    <div class="container mt-5 mb-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="text-left logo p-2 px-5"> <img class="img" alt="Invoce Template" width="50px"
                        src="{{url('/image/shopping.png')}}"> </div>
                    <div class="invoice p-5">
                        <h5>Your order Confirmed!</h5> <span class="font-weight-bold d-block mt-4">Hello, Chris</span>
                        <span>You order has been confirmed and will be shipped in next two days!</span>
                        <div class="payment border-top mt-3 mb-3 border-bottom table-responsive">

                            <table class="table table-borderless">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>
                                                Name
                                            </th>
                                            <th>
                                                <div class="text-center"> <span>Quantity</span> </div>
                                            </th>

                                            <th>
                                                <div class="text-right"> <span>SubTotal</span> </div>

                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach( $Orderdetails->orderDetails as $order)

                                        <tr>
                                            <td>
                                            {{$order->product->name}}
                                            </td>
                                            <td>
                                                <div class="text-center"> <span class="text-muted"> {{$order->quantity}}</span> </div>
                                            </td>
                                            <td>
                                                <div class="text-right"> <span>{{$order->price}}</span> </div>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                        </div>

                        <div class="row d-flex justify-content-end">
                            <div class="col-md-6">
                                <table class="table table-borderless">
                                    <tbody class="totals">
                                        <tr>
                                            <td>
                                                <div class="text-left"> <span class="text-muted">Total:</span> </div>
                                            </td>
                                            <td>
                                                <div class="text-right"> <span>{{$Orderdetails->total}}</span> </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="text-left"> <span class="text-muted">Delivery Fee</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="text-right"> <span>60</span> </div>
                                            </td>
                                        </tr>


                                        <tr class="border-top border-bottom">
                                            <td>
                                                <div class="text-left"> <span class="font-weight-bold">Grand
                                                        Total:</span> </div>
                                            </td>

                                            <td>
                                                <div class="text-right"> <span
                                                        class="font-weight-bold">{{ $Orderdetails->total + 60}}</span>
                                                </div>
                                            </td>

                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <p>We will be sending shipping confirmation email when the item shipped successfully!</p>
                        <p class="font-weight-bold mb-0">Thanks for shopping with us!</p> <span></span>
                    </div>
                    <div class="d-flex justify-content-between footer p-3"> <span>Need Help? visit our <a href="#"> help
                                center</a></span>
                        <p><b>Date :</b> {{($Orderdetails->date)}}</p> <br />
                    </div>
                </div>
            </div>
        </div>
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
<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');

body {
    background-color: #ffe8d2;
    font-family: 'Montserrat', sans-serif
}

.card {
    border: none
}

.logo {
    background-color: #eeeeeea8
}

.totals tr td {
    font-size: 13px
}

.footer {
    background-color: #eeeeeea8
}

.footer span {
    font-size: 12px
}

.product-qty span {
    font-size: 12px;
    color: #dedbdb
}
</style>
@endsection

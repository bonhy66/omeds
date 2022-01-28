@extends('frontend.master')

@section('contents')



<section class="checkout spad">
    <div class="container">
        <div class="checkout__form">
            <form role="form" action="{{route('order.place')}}" method="post">
            @csrf

                <div class="checkout__input">
                    <p>Receiver_Name</p>
                    <input value={{auth()->user()->name}} name="receiver_name" type="text" placeholder="Receiver_Name">
                </div>
                <div class="checkout__input">
                    <p>Email</p>
                    <input value={{auth()->user()->email}} name="email" type="text" placeholder="Email">
                </div>
                <div class="checkout__input">
                    <p>Phone</p>
                    <input value={{auth()->user()->phone_number}} name="phone" type="text" placeholder="Phone">
                </div>
                <div class="checkout__input">
                    <p>Address</p>
                    <input value={{auth()->user()->address}} name="address" type="text" placeholder="Address">
                </div>
                <div class="checkout__input">
                    <p>Date</p>
                    <input name="date" type="date" class="form-control" placeholder="Date">
                </div>
                <div>
                    <button type="submit" class="site-btn" style="background">Place Order</button>
                
                
                </div>

               

        </div>
        </form>
    </div>
    </div>
</section>



@endsection

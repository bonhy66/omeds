@extends('frontend.master')

@section('contents')

<section class="checkout spad">
    <div class="container">
        <div class="checkout__form">
            <form role="form" action="{{route('user.doRegistration')}}" method="post">
            @csrf

                <div class="checkout__input">
                    <p>Name</p>
                    <input name="name" type="text" placeholder="Name">
                </div>
                <div class="checkout__input">
                    <p>Email</p>
                    <input name="email" type="email" placeholder="Email">
                </div>
                <div class="checkout__input">
                    <p>Password</p>
                    <input name="password" type="password" placeholder="Password">
                </div>
                <div class="checkout__input">
                    <p>Address</p>
                    <input name="address" type="text" placeholder="Address">
                </div>
                <div class="checkout__input">
                    <p>Phone</p>
                    <input name="phone" type="text" class="form-control" placeholder="Phone_Number">
                </div>
                <div>
                    <button type="submit" class="site-btn" style="background">Sign in</button>
                
                
                </div>

               

        </div>
        </form>
    </div>
    </div>
</section>


@endsection

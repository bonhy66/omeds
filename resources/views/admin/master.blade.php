<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{url('backend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('backend/css/style.css')}}">
    <link rel="stylesheet" href="{{url('backend/css/style2.css')}}">
    <link rel="stylesheet" href="{{url('backend/css/fontawesome-all.css')}}">
    <link rel="stylesheet" href="{{url('backend/css/morris.css')}}">
    <link rel="stylesheet" href="{{url('backend/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>Online Medical Equipments</title>
    <meta name="robots" content="noindex, nofollow">
</head>

<body>



<div class="dashboard-main-wrapper">




        @include('admin.fixed.header')


        <!-- header -->
     

    @include('admin.fixed.sideber')
    <div class="dashboard-wrapper">


    <!-- sideber -->

    
    <div class="dashboard-influence">
    <div class="container-fluid dashboard-content">


    @yield('contents')

    </div>
    @include('admin.fixed.footer')

    </div>
    </div>
</div>



    
    <script src="{{url('backend/js/jquery-3.3.1.min.js')}}"></script>

    <script src="{{url('backend/js/bootstrap.bundle.js')}}"></script>

    <script src="{{url('backend/js/jquery.slimscroll.js')}}"></script>

    <script src="{{url('backend/js/jquery.main-js.js')}}"></script>

    <script src="{{url('backend/js/jquery.raphael.min.js')}}"></script>
    <script src="{{url('backend/js/jquery.morris.js')}}"></script>
    <script src="{{url('backend/js/jquery.Chart.bundle.js')}}"></script>

    <script src="{{url('backend/js/jquery.chartjs.js')}}"></script>
    <script src="{{url('backend/js/jquery.dashboard-influencer.js')}}"></script>

    <script src="{{url('backend/js/jquery.v64f9daad31f64f81be21cbef6184a5e31634941392597.js')}}"></script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-23581568-13');

    </script>
    <script defer
        src="https://static.cloudflareinsights.com/beacon.min.js/v64f9daad31f64f81be21cbef6184a5e31634941392597"
        integrity="sha512-gV/bogrUTVP2N3IzTDKzgP0Js1gg4fbwtYB6ftgLbKQu/V8yH2+lrKCfKHelh4SO3DPzKj4/glTO+tNJGDnb0A=="
        data-cf-beacon='{"rayId":"6b7251422a7e4739","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.11.0","si":100}'
        crossorigin="anonymous"></script>
</body>

</html>

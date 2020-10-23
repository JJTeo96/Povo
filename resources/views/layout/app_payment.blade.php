<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>

    <!-- Fonts -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Favicon -->
    {{-- <link href="{{ asset('img/favicon.png') }}" rel="icon" type="image/png"> --}}

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @stack('styles')
</head>

<body>
    <div class="container-fluid p-0" style="padding: 0">
        <div class="row no-gutters">
            @include('layout.header.header_payment')
            @yield('content')
            @include('layout.footer.footer_payment')
        </div>
    </div>
    @stack('scripts')
    <script>
        window.onscroll = function() {myFunction()};

        // Get the header
        var header = document.getElementById("navbar_web");
        var div = document.getElementById("nav_web");

        var header_m = document.getElementById("navbar_mobile");
        var div_m = document.getElementById("nav_mobile");

        // Get the offset position of the navbar
        var sticky = header.offsetTop;

        // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
        function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("fixed-top");
            div.style.marginBottom = '70px';
            header_m.classList.add("fixed-top");
            div_m.style.marginBottom = '70px';
        } else {
            header.classList.remove("fixed-top");
            div.style.marginBottom = '0px';
            header_m.classList.remove("fixed-top");
            div_m.style.marginBottom = '0px';
        }
        }
    </script>
</body>
</html>

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
    <style>
    html {
        scroll-behavior: smooth;
      }

      input:-webkit-autofill,
input:-webkit-autofill:hover, 
input:-webkit-autofill:focus, 
input:-webkit-autofill:active  {
    /* -webkit-box-shadow: 0 0 0 30px red inset !important;
    background-color: transparent !important; */
}

.black{
    filter: invert(100%) sepia(12%) saturate(4108%) hue-rotate(288deg) brightness(0%) contrast(54%);
}
.back-to-top {
    position: fixed;
    bottom: 25px;
    right: 25px;
    display: none;
}

@media (max-width: 900px) {
    .btn_top {
        width:10% !important;
    }
}
      </style>
</head>

<body>
    <div class="container-fluid p-0" style="padding: 0">
        <div class="row no-gutters">
            @include('layout..header.header')
                @yield('content')
            @include('layout.footer.footer')
        </div>
    </div>
    <a id="back-to-top" href="#" class="btn btn-light btn-lg-block btn-md-md back-to-top btn_top shadow" style="width:100px" role="button"><i class="fas fa-chevron-up"></i></a>
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

        function changeColor(id) {
            document.getElementById("internet_tab_btn").classList.remove("black");
            document.getElementById("call_sms_tab_btn").classList.remove("black");
            document.getElementById("roaming_tab_btn").classList.remove("black");
            document.getElementById("idd_tab_btn").classList.remove("black");
            wifi = document.getElementById(id);
            wifi.classList.add("black");
        }
        function changeColorm(id) {
            document.getElementById("internet_tab_btnm").classList.remove("black");
            document.getElementById("call_sms_tab_btnm").classList.remove("black");
            document.getElementById("roaming_tab_btnm").classList.remove("black");
            document.getElementById("idd_tab_btnm").classList.remove("black");
            wifi = document.getElementById(id);
            wifi.classList.add("black");
        }

        $(document).ready(function(){
        $(window).scroll(function () {
                if ($(this).scrollTop() > 50) {
                    $('#back-to-top').fadeIn();
                } else {
                    $('#back-to-top').fadeOut();
                }
            });
            // scroll body to 0px on click
            $('#back-to-top').click(function () {
                $('body,html').animate({
                    scrollTop: 0
                }, 10);
                return false;
            });
        });
    </script>
</body>
</html>

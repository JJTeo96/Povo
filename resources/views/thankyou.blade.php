<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">




    <!-- Favicon -->
    {{-- <link href="{{ asset('img/favicon.png') }}" rel="icon" type="image/png"> --}}

    <style>
        .collapse-item{
            /*overflow:hidden;
            text-overflow: ellipsis;*/
            /*word-wrap: break-word;
            white-space: initial;*/
        }

        .sidebar .nav-item .collapse .collapse-inner .collapse-item, .sidebar .nav-item .collapsing .collapse-inner .collapse-item{
            white-space: initial;
        }
    </style>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body>
<div class="container-fluid p-0" style="padding: 0">
    <div class="row no-gutters">
        <div class="col-12">
            <div class="float-left p-4 d-inline">
                <img height="25px" src="{{asset("img/pavo_logo.png")}}" />
            </div>
            <div class="float-right p-4  d-inline">
                {{-- @if (Route::has('login')) --}}
                        {{-- @auth --}}
                        {{-- <a href="{{ url('/home') }}">Home</a> --}}
                        {{-- @else --}}
                        <a class="font-weight-bolder ml-5 text-dark text" href="#">HOME</a>
                        <a class="font-weight-bolder ml-5 text-dark" href="#">PLANS</a>
                        <a class="font-weight-bolder ml-5 text-dark" href="#">ABOUT</a>
                        <a class="font-weight-bolder ml-5 text-dark" href="#">FAQS</a>
                            {{-- <a class="font-weight-bolder ml-5 text-gray-900" href="{{ route('adminLogin') }}">Admin Login</a> --}}

                            <a href="#"><div class="btn btn-danger ml-5">Login / Register</div></a>

                            {{--@if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif--}}
                        {{-- @endauth --}}
                {{-- @endif --}}
            </div>
        </div>
        
        <div class="container d-flex justify-content-center">
          <div class="shadow success_circle rounded-circle"></div>
        </div>
        <div class="container d-flex justify-content-center">
            <p style="font: normal normal medium 30px/41px SF UI Display"><b>Thank you</b></p>
        </div>
        <div class="container d-flex justify-content-center" style="">
            <p>Your request is being processed now. You will receive a confirmation SMS on your purchase is successful.</p>
        </div>
        <div class="container d-flex justify-content-center">
            <button type="button" class="btn back_button btn-lg btn-light">Back to Dashboard</button>
        </div>
        
        <div class="col-12 p-5 text-center" style="background-color: #041A39">
            <div class="row no-gutters d-flex justify-content-center">
                <div class="col-2 text-left text-black p-2">
                    <img src="{{asset("img/pavo_logo2.png")}}" width="100px"/>
                    <br/>
                    Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                </div>
                <div class="col-2 text-left text-white p-2">
                    <h5>
                        SIDE MAP
                    </h5>
                    Home<br />
                    Plans<br />
                    About<br />
                </div>
                <div class="col-2 text-left text-white p-2">
                    <h5>
                        SUPPORT
                    </h5>
                    FAQS<br />
                    Terms & Conditions<br />
                    About<br />
                </div>
                <div class="col-2 text-left text-white p-2">
                    <h5>
                        FOLLOW US
                    </h5>
                    Facebook<br />
                    Instagram<br />
                    Youtube<br />
                </div>
            </div>
            <hr class="bg-white" />
            <span class="text-white">Copyright © 2020 Pavo Communications Sdn. Bhd.(861312-T) All Rights Reserved.</span>
        </div>
    </div>
</div>
</body>
</html>

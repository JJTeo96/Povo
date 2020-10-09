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
        
        <div class="col-12">
            <img class="w-100" src="{{asset('img/banner3.png')}}">
        </div>
        <div class="col-12 p-5">
            <h1 class="text-center font-weight-bold">MOBILE <span style="color: red; ">PLAN</span></h1>
            <h6 class="text-center font-weight-bold">PAVOCOMMS your mobile experiences. Save more as you add more lines <p>for your family, tablets and wearables.</p></h6>
        </div>

        <div class="col-12">
            <div class="row no-gutters">
                <div class="col-4 d-flex justify-content-end">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('img/mainpage/2.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title font-weight-bold">Unlimited Share Plan</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                            <hr/>
                            <a class="font-weight-bold" href="#" >View Plan Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('img/mainpage/3.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title font-weight-bold">PAVO Lite Plan</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                            <hr/>
                            <a class="font-weight-bold " href="#" >View Plan Details</a>
                        </div>
                    </div>
                </div>
                <div class="col-4 d-flex justify-content-start">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{asset('img/mainpage/4.png')}}" alt="Card image cap">
                        <div class="card-body">
                            <h3 class="card-title font-weight-bold">PAVO Plus Plan</h3>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                            <hr/>
                            <a class="font-weight-bold" href="#" >View Plan Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 mt-5">
            <img src="{{asset('img/mainpage/banner4.png')}}" class="w-100" />
        </div>
        <div class="col-12 p-5 text-center" style="background-color: #041A39">
            <div class="row no-gutters d-flex justify-content-center">
                <div class="col-2 text-left text-white p-2">
                    <img src="{{asset('img/pavo_logo2.png')}}" width="100px"/>
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

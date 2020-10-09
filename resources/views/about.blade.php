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
                <img height="25px" src="{{asset('img/pavo_logo.png')}}" />
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
            <div class="about-gradient">
                <img class=" w-100" src="{{asset('img/banner5.png')}}">
            </div>
            <div class="about-text-shadow centered font-weight-bold" style="color:white; font-size: 35px; position: absolute; top: 50%; left: 38%; transform: translate(-70%, -50%);">
                <p>We are here to</p>
                <p>enrich your life, </p>
                <p>energise your play & </p>
                empower your work.
            </div>
        </div>
        <div class="col-12 p-5">
            <h1 class="text-center font-weight-bold">Our <span style="color: red; ">Values</span></h1>
            <h6 class="text-center font-weight-bold">We create meaningful connections by delivering digital products and services to you and your loved <p>ones in order to enrich your life, energise your play, and empower your work!</p></h6>
        </div>

        <div class="col-12">
            <div class="row no-gutters" style="max-width: 1000px; margin: 0 auto;">
                <div class="col-4 d-flex justify-content-end" style="margin-bottom: 50px">
                    <div class="card border-danger" style="max-width: 18rem;">
                        <div class="card-body text-danger text-center font-weight-bold" style="font-size: 30px">
                            Innovation
                            <p class="vl p-1" style="margin-left: 75px; width: 40%; border-bottom: 2px solid red;"></p>
                                <div class="card-body text-center font-weight-bold p-1" style="color: grey; font-size: 16px">
                                    <p class="card-text">Innovation can enhance our offering to deliver greater value and improve the lives of our customers.</p>
                                </div>
                        </div>
                    </div> 
                </div>
                <div class="col-4 d-flex justify-content-center" style="margin-bottom: 50px">
                    <div class="card border-danger" style="max-width: 18rem;">
                        <div class="card-body text-danger text-center font-weight-bold" style="font-size: 30px">
                            Optimism
                            <p class="vl p-1" style="margin-left: 75px; width: 40%; border-bottom: 2px solid red;"></p>                                          
                                <div class="card-body text-center font-weight-bold p-1"  style="color: grey; font-size: 16px">    
                                    <p class="card-text">A little positivity can go a long way in achieving our goals. Optimism makes us hopeful for a better future and invigorates us to conceptualise and realise possibilities.</p>
                                </div>
                        </div>
                    </div>  
                </div>
                <div class="col-4 d-flex justify-content-start" style="margin-bottom: 50px">
                    <div class="card border-danger" style="max-width: 18rem;">
                        <div class="card-body text-danger text-center font-weight-bold" style="font-size: 30px">
                            Trust
                            <p class="vl p-1" style="margin-left: 75px; width: 40%; border-bottom: 2px solid red;"></p>                         
                                <div class="card-body text-center font-weight-bold p-1"  style="color: grey; font-size: 16px">
                                    <p class="card-text">Earning the trust of our customers and colleagues is vital to our success. We earn this through our honesty, sincere care and genuine acts.</p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 p-5">
            <h6 class="text-center font-weight-bold" style="margin-top: -40px;margin-bottom 30px">Our values guide us in all that we do, from the way we conduct ourselves to the way we engage with you.</p></h6>
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

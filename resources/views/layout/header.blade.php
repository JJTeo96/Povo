<style>
    a.header_link{
        text-decoration: none;
        margin-right: 86px;
        color:#041A39;
    }
    
    .cube {
        /* float: left; */
        /* width: 150px;  */
        height: 83px;
        box-shadow: 0px 2px 10px #00000029;
    }

    .logo{
        top: 19px;
        left: 59px;
        width: 150px;
        height: 45px;
        margin-left:59px;
        margin-top:19px;
        margin-bottom:19px;
    }

    .btn_login{
        width: 201px;
        height: 49px;
    }
</style>

<div class="col-12 cube">
    <div class="float-left d-inline" >
        <img src="{{asset('img/PAVO-01.png')}}" class="logo"/>
    </div>

    <div class="row float-right d-inline" style="margin-top: 16px;margin-right:78px;">
        {{-- @if (Route::has('login')) --}}
                {{-- @auth --}}
                {{-- <a href="{{ url('/home') }}">Home</a> --}}
                {{-- @else --}}
                <a class="font-weight-bolder header_link" style="margin-right: 88px;" href="{{ url('/') }}">HOME</a>
                <a class="font-weight-bolder header_link" style="margin-right: 86px;" href="#">PLANS</a>
                <a class="font-weight-bolder header_link" style="margin-right: 85px;" href="{{ url('/about') }}">ABOUT</a>
                <a class="font-weight-bolder header_link" style="margin-right: 86px;" href="{{ url('/faq') }}">FAQS</a>
                
                {{-- Logged in --}}
                {{-- <a class="font-weight-bolder header_link" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="far fa-user" style="margin-right: 12px"></i> Tiana Rosser <i class="fas fa-angle-down" style="margin-left: 48px;margin-top:20px;margin-right:-78px"></i>
                </a>
                
                  
                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div> --}}
                {{-- End Logged in --}}
                 
                {{-- <i class="far fa-user" style="margin-right: 12px"></i><a class="font-weight-bolder header_link" style="margin-right: 86px;" href="#">Tiana Rosser</a> --}}
                    {{-- <a class="font-weight-bolder ml-5 text-gray-900" href="{{ route('adminLogin') }}">Admin Login</a> --}}

                    <a href="{{ url('/login') }}">
                        <div class="btn btn-danger btn_login">
                            <div style="margin-top:6px">LOG IN / REGISTER</div>
                        </div>
                    </a>

                    {{--@if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif--}}
                {{-- @endauth --}}
        {{-- @endif --}}
    </div>
</div>
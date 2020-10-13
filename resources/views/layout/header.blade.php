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

    <div class="float-right d-inline" style="margin-top: 16px;margin-right:78px">
        {{-- @if (Route::has('login')) --}}
                {{-- @auth --}}
                {{-- <a href="{{ url('/home') }}">Home</a> --}}
                {{-- @else --}}
                <a class="font-weight-bolder header_link" style="margin-right: 88px;" href="{{ url('/') }}">HOME</a>
                <a class="font-weight-bolder header_link" style="margin-right: 86px;" href="#">PLANS</a>
                <a class="font-weight-bolder header_link" style="margin-right: 85px;" href="{{ url('/about') }}">ABOUT</a>
                <a class="font-weight-bolder header_link" style="margin-right: 86px;" href="{{ url('/faq') }}">FAQS</a>
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
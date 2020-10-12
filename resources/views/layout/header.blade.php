<style>
    a.header_link{
        text-decoration: none;
    }
</style>
<div class="col-12">
    <div class="float-left p-4 d-inline">
        <img height="25px" src="{{asset('img/pavo_logo.png')}}" />
    </div>
    <div class="float-right p-4  d-inline">
        {{-- @if (Route::has('login')) --}}
                {{-- @auth --}}
                {{-- <a href="{{ url('/home') }}">Home</a> --}}
                {{-- @else --}}
                <a class="font-weight-bolder ml-5 text-dark header_link" href="{{ url('/') }}">HOME</a>
                <a class="font-weight-bolder ml-5 text-dark header_link" href="#">PLANS</a>
                <a class="font-weight-bolder ml-5 text-dark header_link" href="{{ url('/about') }}">ABOUT</a>
                <a class="font-weight-bolder ml-5 text-dark header_link" href="{{ url('/faq') }}">FAQS</a>
                    {{-- <a class="font-weight-bolder ml-5 text-gray-900" href="{{ route('adminLogin') }}">Admin Login</a> --}}

                    <a href="#"><div class="btn btn-danger ml-5">Login / Register</div></a>

                    {{--@if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif--}}
                {{-- @endauth --}}
        {{-- @endif --}}
    </div>
</div>
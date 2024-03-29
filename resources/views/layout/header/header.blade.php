<style>
    .logo{
        /* top: 19px;
        left: 59px; */
        width: 150px;
        height: 45px;
        /* margin-left:59px;
        margin-top:19px;
        margin-bottom:19px; */
        /* max-width: 150px; */
    }
    .navbar-toggler:focus,
    .navbar-toggler:active,
    .navbar-toggler-icon:focus {
        outline: none;
        box-shadow: none;
    }

    .logo_rps{
        width:128px;
        height: 39px;
    }
</style>

<div class="col-12 d-none d-sm-none d-md-none d-lg-block" id="nav_web" style="">
    <nav class="navbar navbar-expand-md navbar-dark bg-white" id="navbar_web" style="box-shadow: 0px 2px 10px #00000029;">
        <a class="navbar-brand p-2" href="{{ url('/') }}"><img src="{{asset('img/logo/PAVO-01.png')}}" class="logo"/></a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
            <span style="color:#EA1C2D"><i class="fas fa-bars fa-lg"></i></span>
        </button>
  
        <div class="navbar-collapse collapse" id="navbars" style="max-width:1920px;margin:0 right;">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <div class="at_container"> 
                    <a class="nav-link font-weight-bolder" style="margin-right: 88px;color:black;text-align:center" href="{{ url('/') }}">HOME</a>
                    </div>
                </li>
                <li class="nav-item ">
                    <a class="nav-link font-weight-bolder" style="margin-right: 86px;color:black" href="{{ route('welcome','#plans') }}">PLANS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bolder" style="margin-right: 85px;color:black" href="{{ url('/about') }}">ABOUT</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bolder" style="margin-right: 86px;color:black" href="{{ url('/faq') }}">FAQS</a>
                </li>

                {{-- <li class="nav-item dropdown mr-5">
                    <a class="nav-link dropdown-toggle font-weight-bolder" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:black">
                        <i class="far fa-user mr-3"></i> &nbsp;<span style=" text-transform: uppercase">Tiana Rosser &nbsp;&nbsp;<i class="fas fa-caret-down"></i></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdown04" style="width: 200px;font-size:16px">
                        <a class="dropdown-item" href="{{ url('/profile') }}">Profile</a>
                        <a class="dropdown-item" href="{{ url('/') }}">Sign Out</a>
                    </div>
                </li> --}}


            </ul>

            <form class="form-inline my-2 my-md-0 ml-2">
                <a href="{{ url('/login') }}" class="nav-link">
                    <div class="btn btn-danger btn_login" style="background-color:#ED1B2F">
                        <div>LOG IN / REGISTER</div>
                    </div>
                </a>
            </form>
        </div>
    </nav>
</div> 

{{-- Responsive --}}
<div class="col-12  d-sm-block d-md-block d-lg-none" id="nav_mobile" style="">
    <nav class="navbar navbar-expand-lg navbar-dark bg-white" id="navbar_mobile"  style="box-shadow: 0px 2px 10px #00000029;">
        <a class="navbar-brand p-2" href="{{ url('/') }}"><img src="{{asset('img/logo/PAVO-01.png')}}" class="logo_rps"/></a>
        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbars" aria-controls="navbars" aria-expanded="false" aria-label="Toggle navigation">
            <span style="color:#EA1C2D"><i class="fas fa-bars fa-lg"></i></span>
        </button>
  
        <div class="navbar-collapse collapse" id="navbars" style="margin:0 right;">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item border-bottom border-top d-flex justify-content-center">
                    <a class="nav-link font-weight-bolder" style="color:black;" href="{{ url('/') }}">HOME</a>
                </li>
                <li class="nav-item border-bottom d-flex justify-content-center">
                    <a class="nav-link font-weight-bolder" style="color:black;" href="{{ route('welcome','#plans') }}">PLANS</a>
                </li>
                <li class="nav-item border-bottom d-flex justify-content-center">
                    <a class="nav-link font-weight-bolder" style="color:black;" href="{{ url('/about') }}">ABOUT</a>
                </li>
                <li class="nav-item border-bottom d-flex justify-content-center">
                    <a class="nav-link font-weight-bolder" style="color:black;" href="{{ url('/faq') }}">FAQS</a>
                </li>
                <li class="nav-item border-bottom d-flex justify-content-center">
                    <a class="nav-link font-weight-bolder" style="color:black;" href="{{ url('/profile') }}"><i class="far fa-user mr-1"></i>TIANA ROSSER</a>
                </li>
                <li class="nav-item border-bottom d-flex justify-content-center">
                    <a class="nav-link font-weight-bolder" style="color:black;" href="{{ url('/dashboard') }}">DASHBOARD</a>
                </li>
                <li class="nav-item d-flex justify-content-center">
                    <a class="nav-link font-weight-bolder" style="color:black;" href="{{ url('/') }}">SIGN OUT</a>
                </li>

                {{-- <li class="nav-item d-flex justify-content-center">
                    <a href="{{ url('/login') }}" class="nav-link">
                        <div class="btn btn-danger btn_login" style="width:201px;text-align:center;background-color:#ED1B2F">
                            <div>LOG IN / REGISTER</div>
                        </div>
                    </a>    
                </li> --}}

            </ul>
        </div>
    </nav>
</div>
{{-- End Responsive --}}
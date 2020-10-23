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

    .abs-center-x {
    position: absolute;
    left: 50%;
    transform: translateX(-50%); }
</style>

<div class="col-12" id="nav_web" style="">
    <nav class="navbar navbar-expand-md navbar-dark bg-white" id="navbar_web" style="box-shadow: 0px 2px 10px #00000029;">
        <div class="container">
            <ul class="nav navbar-nav mx-auto">
            <li class="nav-item p-2"><a class="" href="{{ url('/') }}"><img src="{{asset('img/logo/PAVO-01.png')}}" class="logo"/></a></li>
            </ul>
           
        </div>    
    </nav>
</div> 


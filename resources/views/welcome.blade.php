@extends('layout.app')
@section('title', ' Home')

@push('styles')
<style>
    .carousel-indicators li{
        transition: 0.3s all cubic-bezier(0.32, 0.71, 0.53, 0.53);
        /* display: inline-block; */
        width: 8px;
        height: 8px;
        border-radius: 8px;
        background: #ffffff;
        margin: 3px;
        border-top:0px;
        border-bottom:0px;
    }
    
    .carousel-indicators .active{
        width: 20px;
        height: 7px;
    }
    
    </style>
@endpush

@section('content')
<div class="container-fluid p-0">
    {{-- Carousel --}}
    <div class="col-12 p-0">
        <div id="carouselExampleIndicators" class="carousel slide col-lg-12 col-md-12 col-sm-6 p-0" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block" src="{{asset('img/mainpage/banner3.png')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="{{asset('img/mainpage/banner3.png')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="{{asset('img/mainpage/banner3.png')}}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    {{-- End Carousel --}}
    
    {{-- Mobile Plan --}}
    <div class="col-12">
        <div class="auto-container" style="margin-top:75px">
            <h1 class="text-center" style="font-weight: 800"><span style="color:#0F2A51">MOBILE </span><span style="color: red; ">PLAN</span></h1>
            <div class="p-3" style="max-width: 636px;margin: auto">
                <h6 class="text-center font-weight-bold" style="font-size:18px;color:#0F2A51">PAVOCOMMS your mobile experiences. Save more as you add more lines for your family, tablets and wearables.</h6>
            </div>
        </div>
    </div>
    {{-- End Mobile Plan --}}
    
    {{-- Card Web--}}
    <div class="col d-sm-none d-none d-md-block">
        <div class="auto-container mt-3">
            <div class="row">
                
                <div class="col-lg-4 d-flex">
                    <div class="card shadow">
                        <div class="card img-fluid">
                            <div class="img-gradient"> 
                                <img class="card-img-top" src="{{asset('img/mainpage/2.png')}}" alt="Card image cap">
                            </div>
                            
                            <div class="card-img-overlay d-flex flex-column justify-content-end" style="padding-left:30px">
                                <h4 class="card-title" style="color:white;font-size:32px;text-aligin:left;padding: 0px 80px 0px 0px"><b>One Family Plan for Sharing</b></h4>
                                <p class="card-text" style="color:white">FROM <span style="font-size: 22px"> RM90.00/month</span></p>
                            </div>    
                        </div>
                        <div class="card-body">
                            <h3 class="card-title" style="font-size:40px;color:#0F2A51;font-weight:800;padding: 20px 100px 20px 9px">Unlimited Share Plan</h3>
                            <p class="card-text pl-2" style="color:#8E8888;padding-right:70px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                            <hr/>
                            <a class="font-weight-bold" style="color:#0F2A51;padding-left:8px" href="#" >View Plan Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 d-flex">
                    <div class="card shadow" >
                        <div class="card img-fluid ">
                            <div class="img-gradient"> 
                                <img class="card-img-top" src="{{asset('img/mainpage/3.png')}}" alt="Card image cap">
                            </div>
                            <div class="card-img-overlay  d-flex flex-column justify-content-end">
                                <h4 class="card-title" style="color:white;font-size:32px;text-aligin:left;padding: 0px 200px 0px 0px"><b>Just Right for you</b></h4>
                                <p class="card-text" style="color:white">FROM<span style="font-size: 22px"> RM90.00/month</p>
                            </div>    
                        </div>
                        <div class="card-body">
                            <h3 class="card-title" style="font-size:40px;color:#0F2A51;font-weight:800;padding: 20px 100px 20px 9px">PAVO Lite Plan</h3>
                            <p class="card-text pl-2" style="color:#8E8888;padding-right:70px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                            <hr/>
                            <a class="font-weight-bold" style="color:#0F2A51;padding-left:8px" href="#" >View Plan Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 d-flex">
                    <div class="card shadow" >
                        <div class="card img-fluid">
                            <div class="img-gradient"> 
                                <img class="card-img-top" src="{{asset('img/mainpage/4.png')}}" alt="Card image cap">
                            </div>
                            <div class="card-img-overlay  d-flex flex-column justify-content-end">
                                <h4 class="card-title" style="color:white;font-size:32px;text-aligin:left;padding: 0px 100px 0px 0px"><b>Always Connected</b></h4>
                                <p class="card-text" style="color:white">FROM<span style="font-size: 22px">  RM90.00/month</p>
                            </div>    
                        </div>
                        <div class="card-body">
                            <h3 class="card-title" style="font-size:40px;color:#0F2A51;font-weight:800;padding: 20px 100px 20px 9px">PAVO Plus Plan</h3>
                                <p class="card-text pl-2" style="color:#8E8888;padding-right:70px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                <hr/>
                                <a class="font-weight-bold" style="color:#0F2A51;padding-left:8px" href="#" >View Plan Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Card Web--}}

    {{-- Card Mobile--}}
    <div class="col-12 d-block d-sm-block d-md-none">
        <div class="auto-container mt-3">
            <div class="row">
                
                <div class="col-lg-4 d-flex mb-5 p-0">
                    <div class="card shadow">
                        <div class="card img-fluid">
                            <div class="img-gradient"> 
                                <img class="card-img-top" src="{{asset('img/mainpage/2.png')}}" alt="Card image cap">
                            </div>
                            
                            <div class="card-img-overlay d-flex flex-column justify-content-end" style="padding-left:30px">
                                <h4 class="card-title" style="color:white;font-size:32px;text-aligin:left;padding: 0px 50px 0px 0px"><b>One Family Plan for Sharing</b></h4>
                                <p class="card-text" style="color:white">FROM <span style="font-size: 22px"> RM90.00/month</span></p>
                            </div>    
                        </div>
                        <div class="card-body">
                            <h3 class="card-title" style="font-size:40px;color:#0F2A51;font-weight:800;padding: 20px 50px 20px 9px">Unlimited Share Plan</h3>
                            <p class="card-text pl-2" style="color:#8E8888;padding-right:70px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                            <hr/>
                            <a class="font-weight-bold" style="color:#0F2A51;padding-left:8px" href="#" >View Plan Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 d-flex mb-5 p-0">
                    <div class="card shadow" >
                        <div class="card img-fluid ">
                            <div class="img-gradient"> 
                                <img class="card-img-top" src="{{asset('img/mainpage/3.png')}}" alt="Card image cap">
                            </div>
                            <div class="card-img-overlay  d-flex flex-column justify-content-end">
                                <h4 class="card-title" style="color:white;font-size:32px;text-aligin:left;padding: 0px 150px 0px 0px"><b>Just Right for you</b></h4>
                                <p class="card-text" style="color:white">FROM<span style="font-size: 22px"> RM90.00/month</p>
                            </div>    
                        </div>
                        <div class="card-body">
                            <h3 class="card-title" style="font-size:40px;color:#0F2A51;font-weight:800;padding: 20px 50px 20px 9px">PAVO Lite Plan</h3>
                            <p class="card-text pl-2" style="color:#8E8888;padding-right:70px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                            <hr/>
                            <a class="font-weight-bold" style="color:#0F2A51;padding-left:8px" href="#" >View Plan Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 d-flex p-0">
                    <div class="card shadow" >
                        <div class="card img-fluid">
                            <div class="img-gradient"> 
                                <img class="card-img-top" src="{{asset('img/mainpage/4.png')}}" alt="Card image cap">
                            </div>
                            <div class="card-img-overlay  d-flex flex-column justify-content-end">
                                <h4 class="card-title" style="color:white;font-size:32px;text-aligin:left;padding: 0px 100px 0px 0px"><b>Always Connected</b></h4>
                                <p class="card-text" style="color:white">FROM<span style="font-size: 22px">  RM90.00/month</p>
                            </div>    
                        </div>
                        <div class="card-body">
                            <h3 class="card-title" style="font-size:40px;color:#0F2A51;font-weight:800;padding: 20px 50px 20px 9px">PAVO Plus Plan</h3>
                                <p class="card-text pl-2" style="color:#8E8888;padding-right:70px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                <hr/>
                                <a class="font-weight-bold" style="color:#0F2A51;padding-left:8px" href="#" >View Plan Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Card Mobile --}}
        
    {{-- Image Bottom Web--}}
            <div class="col-12 p-0 pt-5 d-sm-none d-none d-md-block " style="position: relative;">
                <div class="w-100" style="display: flex; align-items: center; min-height: 597px; background-position: center; background-attachment: scroll; background-size: cover; background-repeat: no-repeat; background-image: url({{ asset('img/mainpage/Group-249.jpg')}});">
                    <div class="col-10  d-flex justify-content-end">
                        <div class="col-4" style="text-align: end">
                            <div class="col-sm-6 col-md-6 col-lg-12" style="color:white; font-size: 50px;text-shadow: 0px 3px 20px #00000094;text-aligin:right;font-weight:700">
                                Pavo is not just about data, we're a new lease on life.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    {{-- End Image Bottom Web--}}

    {{-- Image Bottom Mobile--}}
    <div class="col-12 p-0 d-block d-sm-block d-md-none " style="position: relative;">
        <div class="w-100" style="display: flex; align-items: center; min-height: 597px; background-position: center; background-attachment: scroll; background-size: cover; background-repeat: no-repeat; background-image: url({{ asset('img/mainpage/Group-249.jpg')}});">
            <div class="col-12  d-flex">
                <div class="col-12" style="text-align: center">
                    <div class="col-sm-6 col-md-6 col-lg-12" style="color:white; font-size: 26px;text-shadow: 0px 3px 20px #00000094;text-aligin:right;font-weight:700">
                        Pavo is not just about data, we're a new lease on life.
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- End Image Bottom Mobile--}}
</div>


@endsection

@push('scripts')
@endpush
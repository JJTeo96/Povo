@extends('layout.app')
@section('title', ' Home')

@push('styles')
<style>
    .carousel-indicators li{
        transition: 0.3s all cubic-bezier(0.32, 0.71, 0.53, 0.53);
        /* display: inline-block; */
        width: 15px;
        height: 15px;
        border-radius: 8px;
        background: #ffffff;
        margin: 3px;
        border-top:0px;
        border-bottom:0px;
    }
    
    .carousel-indicators .active{
        width: 30px;
    }
    </style>
@endpush

@section('content')
<div class="container-fluid p-0">
    
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
        

        <div class="col-12">
            <div class="auto-container" style="margin-top:200px">
                <h1 class="text-center font-weight-bold"><span style="color:#0F2A51">MOBILE </span><span style="color: red; ">PLAN</span></h1>
                <div class="p-3" style="max-width: 636px;margin: auto">
                    <h6 class="text-center" style="font-size:18px;font-weight:800;color:#0F2A51">PAVOCOMMS your mobile experiences. Save more as you add more lines for your family, tablets and wearables.</h6>
                </div>
            </div>
        </div>
        
        <div class="col-12">
            <div class="auto-container" style="margin-top:200px">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 ">
                        <div class="card shadow">
                            <div class="card img-fluid">
                                <div class="img-gradient"> 
                                    <img class="card-img-top" src="{{asset('img/mainpage/2.png')}}" alt="Card image cap">
                                </div>
                                <div class="card-img-overlay  d-flex flex-column justify-content-end">
                                <h4 class="card-title" style="color:white;font-size:32px"><b>One Family Plan <br/>for Sharing</b></h4>
                                <p class="card-text" style="color:white">FROM RM90.00/month</p>
                                </div>    
                            </div>
                            <div class="card-body">
                                <h3 class="card-title font-weight-bold" style="font-size:40px;color:#0F2A51">Unlimited <p>Share Plan</p></h3>
                                <p class="card-text" style="color:#8E8888">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                <hr/>
                                <a class="font-weight-bold" style="color:#0F2A51" href="#" >View Plan Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 d-flex justify-content-center">
                        <div class="card shadow" >
                            <div class="card img-fluid ">
                                <div class="img-gradient"> 
                                    <img class="card-img-top" src="{{asset('img/mainpage/3.png')}}" alt="Card image cap">
                                </div>
                                <div class="card-img-overlay  d-flex flex-column justify-content-end">
                                <h4 class="card-title" style="color:white;font-size:32px"><b>Just Right  <br/>for you</b></h4>
                                <p class="card-text" style="color:white">FROM RM90.00/month</p>
                                </div>    
                            </div>
                            <div class="card-body">
                                <h3 class="card-title font-weight-bold" style="font-size:40px;color:#0F2A51">PAVO Lite <p> Plan</p></h3>
                                <p class="card-text" style="color:#8E8888">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                <hr/>
                                <a class="font-weight-bold" style="color:#0F2A51" href="#" >View Plan Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-4 col-lg-4 d-flex justify-content-start">
                        <div class="card shadow" >
                            <div class="card img-fluid">
                                <div class="img-gradient"> 
                                    <img class="card-img-top" src="{{asset('img/mainpage/4.png')}}" alt="Card image cap">
                                </div>
                                <div class="card-img-overlay  d-flex flex-column justify-content-end">
                                <h4 class="card-title" style="color:white;font-size:32px"><b>Always  <br/>Connected</b></h4>
                                <p class="card-text" style="color:white">FROM RM90.00/month</p>
                                </div>    
                            </div>
                            <div class="card-body">
                                <h3 class="card-title font-weight-bold" style="font-size:40px;color:#0F2A51">PAVO Plus <p> Plan</p></h3>
                                <p class="card-text" style="color:#8E8888">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                <hr/>
                                <a class="font-weight-bold" style="color:#0F2A51" href="#" >View Plan Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

            <div class="col-12 mt-5">
                <div class="">
                    <img src="{{asset('img/mainpage/Group-249.jpg')}}" class="w-100" />
                </div>
            
                <div class="centered" style="color:white">
                </div>
            
            </div>
</div>


@endsection

@push('scripts')
@endpush
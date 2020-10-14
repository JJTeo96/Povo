@extends('layout.app')
@section('title', ' Home')
@section('content')
@include('layout.header')
<div class="col-12">
    <img class="w-100" src="{{asset('img/mainpage/banner3.png')}}">
</div>
<div class="col-12">
    <div class="auto-container p-5">
        <h1 class="text-center font-weight-bold"><span style="color:#0F2A51">MOBILE </span><span style="color: red; ">PLAN</span></h1>
        <div class="p-3" style="max-width: 636px;margin: auto">
            <h6 class="text-center" style="font-size:18px;font-weight:800;color:#0F2A51">PAVOCOMMS your mobile experiences. Save more as you add more lines for your family, tablets and wearables.</h6>
        </div>
    </div>
</div>

<div class="col-12">
    <div class="row auto-container" >
        <div class="col-4 d-flex justify-content-end">
            <div class="card shadow" style="width: 388px;">
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
        <div class="col-4 d-flex justify-content-center">
            <div class="card shadow" style="width: 388px;">
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
        <div class="col-4 d-flex justify-content-start">
            <div class="card shadow" style="width: 388px;">
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

<div class="col-12 mt-5">
    <div class="">
        <img src="{{asset('img/mainpage/Group-249.jpg')}}" class="w-100" />
    </div>

    <div class="centered" style="color:white">
        <h1 class="text-right" style="font-size:50px"><b>Pavocomms is not just about data, we're a new lease on life.</b></h1>
    </div>

</div>

@include('layout.footer')
@endsection
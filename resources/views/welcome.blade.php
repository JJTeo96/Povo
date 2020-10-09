@extends('layout.app')
@section('title', ' Home')
@section('content')
@include('layout.header')
<div class="col-12">
    <img class="w-100" src="{{asset("img/banner3.png")}}">
</div>
<div class="col-12 p-5">
    <h1 class="text-center font-weight-bold">MOBILE <span style="color: red; ">PLAN</span></h1>
    <h6 class="text-center font-weight-bold">PAVOCOMMS your mobile experiences. Save more as you add more lines <p>for your family, tablets and wearables.</p></h6>
</div>

<div class="col-12">
    <div class="row no-gutters" style="max-width: 1000px;margin:0 auto" >
        <div class="col-4 d-flex justify-content-end">
            <div class="card shadow" style="width: 18rem;">
                <div class="card img-fluid">
                    <div class="img-gradient"> 
                        <img class="card-img-top" src="{{asset("img/mainpage/2.png")}}" alt="Card image cap">
                    </div>
                    <div class="card-img-overlay  d-flex flex-column justify-content-end">
                      <h4 class="card-title" style="color:white;"><b>One Family Plan <br/>for Sharing</b></h4>
                      <p class="card-text" style="color:white">FROM RM90.00/month</p>
                    </div>    
                </div>
                <div class="card-body">
                    <h3 class="card-title font-weight-bold">Unlimited <p>Share Plan</p></h3>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    <hr/>
                    <a class="font-weight-bold" href="#" >View Plan Details</a>
                </div>
            </div>
        </div>
        <div class="col-4 d-flex justify-content-center">
            <div class="card shadow" style="width: 18rem;">
                <div class="card img-fluid ">
                    <div class="img-gradient"> 
                        <img class="card-img-top" src="{{asset("img/mainpage/3.png")}}" alt="Card image cap">
                    </div>
                    <div class="card-img-overlay  d-flex flex-column justify-content-end">
                      <h4 class="card-title" style="color:white;"><b>Just Right  <br/>for you</b></h4>
                      <p class="card-text" style="color:white">FROM RM90.00/month</p>
                    </div>    
                </div>
                <div class="card-body">
                    <h3 class="card-title font-weight-bold">PAVO Lite <p> Plan</p></h3>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    <hr/>
                    <a class="font-weight-bold" href="#" >View Plan Details</a>
                </div>
            </div>
        </div>
        <div class="col-4 d-flex justify-content-start">
            <div class="card shadow" style="width: 18rem;">
                <div class="card img-fluid">
                    <div class="img-gradient"> 
                        <img class="card-img-top" src="{{asset("img/mainpage/4.png")}}" alt="Card image cap">
                    </div>
                    <div class="card-img-overlay  d-flex flex-column justify-content-end">
                      <h4 class="card-title" style="color:white;"><b>Always  <br/>Connected</b></h4>
                      <p class="card-text" style="color:white">FROM RM90.00/month</p>
                    </div>    
                </div>
                <div class="card-body">
                    <h3 class="card-title font-weight-bold">PAVO Plus <p> Plan</p></h3>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                    <hr/>
                    <a class="font-weight-bold" href="#" >View Plan Details</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-12 mt-5">
    <div class="mainpage_img-gradient">
        <img src="{{asset("img/mainpage/banner4.png")}}" class="w-100" />
    </div>

    <div class="centered" style="color:white">
        <h1 class="text-right"><b>Pavocomms is not<br/> just about data, we're<br/> a new lease on life.</b></h1>
    </div>

</div>
@include('layout.footer')

@endsection
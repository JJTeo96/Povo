@extends('layout.app')
@section('title', ' About')
@section('content')
@include('layout.header')

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

        @include('layout.footer')
        @endsection
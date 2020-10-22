@extends('layout.app')
@section('title', ' About')
@section('content')
        {{-- Img Top Web --}}
        <div class="col-12 d-sm-none d-none d-md-block" style="position: relative;">
            <div class="w-100 col-md-12" style="display: flex; align-items: center; min-height: 597px; background-position: center; background-attachment: scroll; background-size: cover; background-repeat: no-repeat; background-image: url({{ asset('img/Group-250.jpg')}});">
                <div class="auto-container">
                    <div class="row">
                        <div class="col-sm-6 col-md-8 col-lg-5" style="color:white; font-size: 50px;text-shadow: 0px 3px 20px #00000094;font-weight:700">
                            We are here to enrich your life, energise your play & empower your work.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Img Top Web --}}

        {{-- Img Top Mobile --}}
        <div class="col-12 d-block d-sm-block d-md-none" style="position: relative;">
            <div class="w-100 col-md-12" style="display: flex; align-items: center; min-height: 597px; background-position: center; background-attachment: scroll; background-size: cover; background-repeat: no-repeat; background-image: url({{ asset('img/banner-mobile-3.jpg')}});">
                <div class="auto-container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-10">
                            <div class="col-sm-6 p-0" style="color:white; font-size: 2rem;text-shadow: 0px 3px 20px #00000094;font-weight:700;margin-top:200px">
                                We are here to enrich your life, energise your play & empower your work.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Img Top Mobile --}}

        <div class="col-12 p-5">
            <h1 class="text-center" style="font-weight: 800">
                <span style="color: #0F2A51;">Our</span>
                <span style="color: red; ">Values</span>
            </h1>
            <h6 class="text-center font-weight-bold" style="color: #0F2A51;">We create meaningful connections by delivering digital products and services to you and your loved <p>ones in order to enrich your life, energise your play, and empower your work!</p></h6>
        </div>

        <div class="container">
            <div class="row no-gutters" style="max-width: 1000px; margin: 0 auto; ">
                <div class="col-12 col-sm-12 col-lg-4 d-flex justify-content-end" style="margin-bottom: 50px;">
                    <div class="card border-danger m-0 m-sm-4 m-md-2" >
                        <div class="card-body text-danger text-center">
                            <h2 class="font-weight-bold">Innovation</h2>
                            <p class="vl p-1" style="margin-left: 75px; width: 40%;margin: 0 auto; border-bottom: 2px solid red;"></p>
                                <div class="card-body text-center p-2 mt-3" style="color: #0F2A51; font-size: 18px;">
                                    <p class="card-text">Innovation can enhance our offering to deliver greater value and improve the lives of our customers.</p>
                                </div>
                        </div>
                    </div> 
                </div>
                <div class="col-12 col-sm-12 col-lg-4 d-flex justify-content-center" style="margin-bottom: 50px">
                    <div class="card border-danger m-0 m-sm-4 m-md-2" >
                        <div class="card-body text-danger text-center">
                            <h2 class="font-weight-bold">Optimism</h2>
                            <p class="vl p-1" style="margin-left: 75px; width: 40%; margin: 0 auto; border-bottom: 2px solid red;"></p>                                          
                                <div class="card-body text-center p-2 mt-3"  style="color: #0F2A51; font-size: 18px">    
                                    <p class="card-text">A little positivity can go a long way in achieving our goals. Optimism makes us hopeful for a better future and invigorates us to conceptualise and realise possibilities.</p>
                                </div>
                        </div>
                    </div>  
                </div>
                <div class="col-12 col-sm-12 col-lg-4 d-flex justify-content-start" style="margin-bottom: 50px">
                    <div class="card border-danger m-0 m-sm-4 m-md-2" >
                        <div class="card-body text-danger text-center">
                            <h2 class="font-weight-bold">Trust</h2>
                            <p class="vl p-1" style="margin-left: 75px; width: 40%; margin: 0 auto; border-bottom: 2px solid red;"></p>                         
                                <div class="card-body text-center p-2 mt-3"  style="color: #0F2A51; font-size: 18px">
                                    <p class="card-text">Earning the trust of our customers and colleagues is vital to our success. We earn this through our honesty, sincere care and genuine acts.</p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
        <div class="col-12 p-5">
            <h6 class="text-center font-weight-bold" style="margin-top: -40px;margin-bottom 30px; color: #0F2A51;">Our values guide us in all that we do, from the way we conduct ourselves to the way we engage with you.</p></h6>
        </div>

        {{-- @include('layout.footer') --}}
        @endsection
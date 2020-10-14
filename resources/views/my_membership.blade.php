@extends('layout.app')
@section('title', ' Reload')
@section('content')
@include('layout.header')
<style>
    .card-title{
        font-size:22px;
    }
    .card-text{
        font-size: 14px;
    }
    .card-hint{
        border-top:1px solid #EDEDED;
        padding-top:2.5px;
    }
    .custom-control-label::before {
        background-color: white;
        border-color: #ED1B2F;
    }
    .card-body{
      padding: 15.56px 15.09px 9.44px 18px;
    }
    .card-selected{
      border-color: #ED1B2F;
    }
    .custom-control-input:checked ~ .custom-control-label::before {
      color: #ED1B2F;
      border-color: #ED1B2F;
      background-color: white;
    }
    .card1{
        padding:12px 24px 23px 21px !important;
    }
    .divided {
        display: flex;
        align-items: center;
    }

    .divider {
        flex-grow: 1;
        border-bottom: 1px solid #EDEDED;
    }
</style>
        <div class="container">
            <div class="row justify-content-center">
              @include('layout.sidebar')
                <div class="col-md-9 col-sm-10">
                    <div class="row">
                        <div class="mb-4" style="color:#0F2A51;font-size:33px;">
                            <b>My <span style="color:#ED1B2F;">Membership</span></b>
                        </div>
                    </div>
                    <div class="row">              
                        <div class="col-6 shadow-sm mb-4 bg-white rounded" style="font:normal normal normal 16px/21px Segoe UI;max-width:329px;">
                            <div class="row mt-2">
                                <div class="col-2"> 
                                    <img width="34px" height="33px" src="{{asset('img/34899 [Converted]-02.png')}}" alt="Tick">
                                </div>
                                <div class="col-10">
                                    <div class="row semi-title ml-1">
                                        You're a&nbsp;<span style="color:#ED1B2F">Bronze</span>&nbsp;memeber.
                                        <br>
                                        <div class="row normal-content mt-2">
                                            <div class="col-2">
                                                <svg width="20px" height="20px" viewBox="0 0 16 16" class="bi bi-exclamation-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                    <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z"/>
                                                </svg> 
                                            </div>
                                            <div class="col-9 mb-3">
                                                <div class="row">  
                                                    Top-up 1000 balance by 31 Dec 2020 to be a Gold Member
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>
                    <div class="row mb-4">
                        <span class="semi-title">Member Benefits</span>
                    </div>  
                    <div class="row mb-2 divided">
                            <div class="col-md-1 col-sm-10" ><img src="{{asset('img/34899 [Converted]-02@2x.png')}}" weight="49px" height="48px"></div>
                            <div class="col-md-3 divider"></div>
                            <div class="col-md-1 col-sm-10"><img src="{{asset('img/34899 [Converted]-03@2x.png')}}" weight="49px" height="48px"></div>
                            <div class="col-md-3 divider"></div>
                            <div class="col-md-3 col-sm-10"><img src="{{asset('img/34899 [Converted]-04@2x.png')}}" weight="49px" height="48px"></div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-4">
                            <div class="third-title">Bronze</div>
                            <span class="semi-content" style="width:228px">- Access to great shopping deals and discounts.</span>
                        </div>
                        <div class="col-4">
                            <div class="third-title">Silver</div>
                            <span class="semi-content" style="width:228px">- Access to great shopping deals and discounts.</span>
                        </div>
                        <div class="col-3">
                            <div class="third-title">Gold</div>
                            <span class="semi-content" style="width:228px">- Access to great shopping deals and discounts.</span>
                        </div>  
                    </div>             
                </div>
            </div>
        </div>
        
        
        @include('layout.footer')
        @endsection
        
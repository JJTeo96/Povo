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

</style>
        <div class="container">
            <div class="row justify-content-center">
              @include('layout.sidebar')
                <div class="col-7">
                    <div class="justify-content-left mb-4" style="color:#ED1B2F;font-size:33px;">
                        <b>My Membership</b>
                    </div>
                    <div class="row">
                        
                            <div class="col-7 mb-6">
                                <div class="container shadow-sm mb-4 bg-white rounded " style="font:normal normal normal 16px/21px Segoe UI;">
                                    <div class="row"> 
                                        <div class="card1">
                                        <span>
                                            <img width="34px" height="33px" src="{{asset('img/34899 [Converted]-02.png')}}" alt="Tick">
                                        </span>
                                        <span style="margin-left:20px;font-weight: 600;font-size:14px;color:#25283A;">
                                            You're a <span style="color:#ED1B2F">Bronze</span> memeber.
                                        </span>
                                    </div>
                                    </div>  
                                </div>
                            </div>
                        
                    </div>  
                    <hr>
                </div>
            </div>
        </div>
        
        
        @include('layout.footer')
        @endsection
        
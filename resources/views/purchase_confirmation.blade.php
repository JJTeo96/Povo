@extends('layout.app_payment')
@section('title', ' Reload')
@section('content')
        <div class="container-fluid p-0">
            <div class="row justify-content-center no-gutters" style="min-height: 800px">
                <div class="col-md-4 col-sm-10 m-5">
                    <div class="d-flex justify-content-left mb-3" style="font-family:normal normal 600 20px/26px Segoe UI;">
                        <b><svg width="1em" height="1em" viewBox="0 2 16 16" class="bi bi-chevron-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                        </svg> <a href="{{url('/payment')}}" style="text-decoration: none;color:black">Back</a></b>
                    </div>
                    <div class="d-flex justify-content-left mb-2" style="font-size: 20px; color: #0F2A51;">
                        <b>Purchase Confirmation</b>
                    </div>
                    <div class="shadow-sm p-3 mb-4 bg-white rounded" style="font-size: 16px; color: #000000;"> 
                        <div class="row">
                            <div class="col-6">
                                Paying For
                            </div>
                            <div class="col-6 text-right mb-2">
                                Reload
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                Data
                            </div>
                            <div class="col-6 text-right mb-2">
                                200GB + 50GB
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                Detail
                            </div>
                            <div class="col-6 text-right">
                                Valid for 30 days
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-6">
                                <b>Total</b>
                            </div>
                            <div class="col-6 text-right">
                                <b>RM50.00</b>
                            </div>
                        </div>    
                    </div>
                    <div style="font-size: 14px; color: #000000;">
                        Current Account Balance: <b>RM51.57</b>
                    </div>
                    
                    <hr>               
                    <div class="justify-content-left">
                        <a class="#" href="{{ url('/thankyou') }}">
                            <button type="button" class="btn back_button btn-lg " style="color:white">Buy now for RM50.00</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endsection

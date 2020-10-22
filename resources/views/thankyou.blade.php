@extends('layout.app_payment')
@section('title', ' Success')
@section('content')
        <div class="container mt-5 pt-3" style="min-height: 900px">
            <div class="col-12 col-md-12 ">
            <div class="row justify-content-center">
              <div class="shadow success_circle rounded-circle d-flex align-items-center justify-content-center ">
                <div >
                    <img width="41" height="35" src="{{asset('img/tick.svg')}}" alt="Tick">
                </div>
              </div>
            </div>
            <div class="row justify-content-center">
                <p style="font-size:30px;font-weight:500;color:#151522"><b>Thank you</b></p>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6" style="color: #0F2A51;">
                    <p class="text-wrap text-center font-weight-bold">Your request is being processed now. You will receive a confirmation SMS on your purchase is successful.</p>
                </div>
            </div>
            <div class="row justify-content-center mt-3">
                <a class="#" href="{{ url('/dashboard') }}">
                    <button type="button" class="btn back_button btn-lg" style="color: white">Back to Dashboard</button>
                </a>
            </div>
        </div>
        </div>
@endsection

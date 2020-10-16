@extends('layout.app')
@section('title', ' Thank You')
@section('content')
        <div class="container">
            <div class="col-12 col-md-12 ">
            <div class="row justify-content-center">
              <div class="shadow success_circle rounded-circle text-align-center" style="padding: 20px;">
                <span style="margin-left: 10px;">
                    <img width="70%" src="{{asset('img/tick.svg')}}" alt="Tick">
                </span>
              </div>
            </div>
            <div class="row justify-content-center">
                <p style="font: normal normal medium 30px/41px SF UI Display"><b>Thank you</b></p>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">
                    <p class="text-wrap text-center">Your request is being processed now. You will receive a confirmation SMS on your purchase is successful.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <a class="#" href="{{ url('/dashboard') }}">
                    <button type="button" class="btn back_button btn-lg btn-light">Back to Dashboard</button>
                </a>
            </div>
        </div>
        </div>
@include('layout.footer')
@endsection

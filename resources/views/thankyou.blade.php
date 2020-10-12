@extends('layout.app')
@section('title', ' Thank You')
@section('content')
@include('layout.header')
        <div class="col-12">
            <div class="container d-flex justify-content-center">
              <div class="container shadow success_circle rounded-circle text-align-center" style="padding:20px;">
                  <img width="80%" src="{{asset('img/tick.svg')}}" alt="Tick">
              </div>
            </div>
            <div class="container d-flex justify-content-center">
                <p style="font: normal normal medium 30px/41px SF UI Display"><b>Thank you</b></p>
            </div>
            <div class="container d-flex justify-content-center text-wrap text-center" style="width: 558px;">
                <p>Your request is being processed now. You will receive a confirmation SMS on your purchase is successful.</p>
            </div>
            <div class="container d-flex justify-content-center">
                <button type="button" class="btn back_button btn-lg btn-light">Back to Dashboard</button>
            </div>
        </div>
@include('layout.footer')
@endsection

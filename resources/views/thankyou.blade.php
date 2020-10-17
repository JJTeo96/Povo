@extends('layout.app')
@section('title', ' Thank You')
@section('content')
        <div class="container mt-5">
            <div class="col-12 col-md-12 ">
            <div class="row justify-content-center">
              <div class="shadow success_circle rounded-circle d-flex align-items-center justify-content-center ">
                <div >
                    <img width="41" height="35" src="{{asset('img/tick.svg')}}" alt="Tick">
                </div>
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
@endsection

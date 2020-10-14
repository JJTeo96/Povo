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
        font-size: 14px;
    }
    .custom-control-label::before {
        background-color: white;
        border-color: grey;
        padding: 10px;
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
</style>
        <div class="container">
            <div class="row justify-content-center">
              @include('layout.sidebar')
                <div class="col-7" style="color: #0F2A51;">
                    <div class="justify-content-left mb-3 font-weight-bolder" style="color:#ED1B2F;font-size:30px;">
                        Reload
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-4">
                          <div class="card shadow-sm">
                            <div class="card-body">
                              <span class="card-title"><b>RM10.00</b></span>
                                <span class="float-right">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="customRadio">
                                        <label class="custom-control-label" for="customRadio"></label>
                                    </div>
                                </span>
                              <p class="card-text mb-3">Validity 10 Days</p>
                              <div class="card-hint">Free 1 Days</div>                           
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card card-selected shadow-sm">
                              <div class="card-body">
                                <span class="card-title"><b>RM15.00</b></span>
                                  <span class="float-right">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="customRadio">
                                        <label class="custom-control-label" for="customRadio"></label>
                                    </div>
                                  </span>
                                <p class="card-text mb-3">Validity 15 Days</p>
                                <div class="card-hint">Free 1 Days</div>                           
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="card shadow-sm">
                              <div class="card-body">
                                <span class="card-title"><b>RM30.00</b></span>
                                  <span class="float-right">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="customRadio">
                                        <label class="custom-control-label" for="customRadio"></label>
                                    </div>
                                  </span>
                                <p class="card-text mb-3">Validity 30 Days</p>
                                <div class="card-hint">Free 1 Days</div>                           
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="row mb-4">
                        <div class="col-sm-4">
                            <div class="card shadow-sm">
                              <div class="card-body">
                                <span class="card-title"><b>RM50.00</b></span>
                                  <span class="float-right">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="customRadio">
                                        <label class="custom-control-label" for="customRadio"></label>
                                    </div>
                                  </span>
                                <p class="card-text mb-3">Validity 50 Days</p>
                                <div class="card-hint">Free 1 Days</div>                           
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="card shadow-sm">
                              <div class="card-body">
                                <span class="card-title"><b>RM100.00</b></span>
                                  <span class="float-right">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="customRadio">
                                        <label class="custom-control-label" for="customRadio"></label>
                                    </div>
                                  </span>
                                <p class="card-text mb-3">Validity 120 Days</p>
                                <div class="card-hint">Free 1 Days</div>                           
                              </div>
                            </div>
                          </div>
                      </div>
                      <hr>
                      <div class="row mt-4">
                        <a href="{{ url('/payment') }}">
                          <button type="button" class="btn back_button btn-lg btn-light">Buy now</button>
                        </a>
                    </div> 
                </div>
            </div>
        </div>
        
        
        @include('layout.footer')
        @endsection
        

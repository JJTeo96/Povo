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
</style>
        <div class="container">
            <div class="row justify-content-center">
              @include('layout.sidebar')
                <div class="col-7">
                    <div class="justify-content-left" style="color:#ED1B2F;font-size:30px;">
                        Reload
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-4">
                          <div class="card">
                            <div class="card-body">
                              <span class="card-title"><b>RM10.00</b></span>
                                <span class="float-right">
                                    <div class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" id="customRadio">
                                        <label class="custom-control-label" for="customRadio"></label>
                                    </div>
                                </span>
                              <p class="card-text mb-3">Validity for 10 days.</p>
                              <div class="card-hint">free 1 days</div>                           
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card card-selected">
                              <div class="card-body">
                                <span class="card-title"><b>RM10.00</b></span>
                                <p class="card-text mb-3">Validity for 10 days.</p>
                                <div class="card-hint">free 1 days</div>                           
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="card">
                              <div class="card-body">
                                <span class="card-title"><b>RM10.00</b></span>
                                <p class="card-text mb-3">Validity for 10 days.</p>
                                <div class="card-hint">free 1 days</div>                           
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-4">
                            <div class="card">
                              <div class="card-body">
                                <span class="card-title"><b>RM10.00</b></span>
                                <p class="card-text mb-3">Validity for 10 days.</p>
                                <div class="card-hint">free 1 days</div>                           
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="card">
                              <div class="card-body">
                                <span class="card-title"><b>RM10.00</b></span>
                                <p class="card-text mb-3">Validity for 10 days.</p>
                                <div class="card-hint">free 1 days</div>                           
                              </div>
                            </div>
                          </div>
                      </div>
                      <hr>
                      <div class="justify-content-left">
                        <button type="button" class="btn back_button btn-lg btn-light">Buy now</button>
                    </div> 
                </div>
            </div>
        </div>
        
        
        @include('layout.footer')
        @endsection
        
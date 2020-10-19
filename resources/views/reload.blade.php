@extends('layout.app')
@section('title', ' Reload')
@section('content')
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
      border: 2px solid;
      border-color: #ED1B2F;
    }

  .container_a {
  display: block;
  position: relative;
  padding-left: 25px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container_a input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark_a {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: white;
  border-radius: 50%;
  border:2px solid #ED1B2F;
}

/* On mouse-over, add a grey background color */
.container_a:hover input ~ .checkmark {
  background-color: #ccc;
}
    /* When the radio button is checked, add a blue background */
.container_a input:checked ~ .checkmark_a {
  background-color: #ffffff !important;
  border:2px solid #ED1B2F;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark_a:after {
  content: "" !important;
  position: absolute !important;
  display: none !important;
}

/* Show the indicator (dot/circle) when checked */
.container_a input:checked ~ .checkmark_a:after {
  display: block !important;
}

/* Style the indicator (dot/circle) */
.container_a .checkmark_a:after {
  top: 15%;
    left: 15%;
    width: 15px;
    height: 15px;
	border-radius: 50% !important;
	background: #ED1B2F !important;
}

</style>
<div class="container-fluid p-0">
  <div class="pt-5 col-12" style="color: #0F2A51;" >
      <div class="auto-container row" style="min-height: 800px">
              @include('layout.sidebar')
                <div class="col-md-9 col-sm-12" style="color: #0F2A51;">
                    <div class="col d-block d-sm-block d-md-none p-0 mb-3">
                      <a href="{{ url('/dashboard') }}" style="text-decoration: none;font-size:16px;color:#25283A;font-weight:600"><i class="fas fa-angle-left pr-1"></i> Back to Dashboard</a>
                    </div>
                    <div class="justify-content-left mb-3 font-weight-bolder" style="color:#ED1B2F;font-size:30px;">
                        Reload
                    </div>
                    <div class="row">
                        <div class="col-md-3 col-sm-12 pb-4">
                          <div class="card shadow-sm choosed border-danger" id="redbox1" onclick="red(1)">
                            <div class="card-body">
                              <span class="card-title"><b>RM10.00</b></span>
                              <label class="container_a float-right">
                                <input type="radio" checked="checked" id="radio1" name="radio">
                                <span class="checkmark_a"></span>
                              </label>
                              <p class="card-text mb-3">Validity 10 Days</p>
                              <div class="card-hint">Free 1 Days</div>                           
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3 col-sm-12 pb-4">
                            <div class="card shadow-sm choosed" id="redbox2" onclick="red(2)">
                              <div class="card-body">
                                <span class="card-title"><b>RM15.00</b></span>
                                  <label class="container_a float-right">
                                <input type="radio" name="radio" id="radio2">
                                <span class="checkmark_a"></span>
                              </label>
                                <p class="card-text mb-3">Validity 15 Days</p>
                                <div class="card-hint">Free 1 Days</div>                           
                              </div>
                            </div>
                          </div>
                          <div class="col-md-3 col-sm-12 pb-4">
                            <div class="card shadow-sm choosed" id="redbox3" onclick="red(3)">
                              <div class="card-body">
                                <span class="card-title"><b>RM30.00</b></span>
                                  <label class="container_a float-right">
                                <input type="radio" name="radio" id="radio3">
                                <span class="checkmark_a"></span>
                              </label>
                                <p class="card-text mb-3">Validity 30 Days</p>
                                <div class="card-hint">Free 1 Days</div>                           
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="row mb-4">
                        <div class="col-md-3 col-sm-12 pb-4">
                            <div class="card shadow-sm choosed" id="redbox4" onclick="red(4)">
                              <div class="card-body">
                                <span class="card-title"><b>RM50.00</b></span>
                                  <label class="container_a float-right">
                                    <input type="radio" name="radio" id="radio4">
                                    <span class="checkmark_a"></span>
                                  </label>
                                <p class="card-text mb-3">Validity 50 Days</p>
                                <div class="card-hint">Free 1 Days</div>                           
                              </div>
                            </div>
                          </div>
                          <div class="col-md-3 col-sm-12 pb-4">
                            <div class="card shadow-sm choosed" id="redbox5" onclick="red(5)">
                              <div class="card-body">
                                <span class="card-title"><b>RM100.00</b></span>
                                  <label class="container_a float-right">
                                <input type="radio" name="radio" id="radio5">
                                <span class="checkmark_a"></span>
                              </label>
                                <p class="card-text mb-3">Validity 120 Days</p>
                                <div class="card-hint">Free 1 Days</div>                           
                              </div>
                            </div>
                          </div>
                      </div>
                      <hr>
                      <div class="row mt-4 d-sm-none d-none d-md-block">
                        <a href="{{ url('/payment') }}">
                          <button type="button" class="btn back_button btn-lg btn-light">Buy now</button>
                        </a>
                      </div>
                      <footer id="sticky-footer" class="py-4 bg-white text-white-50">
                        <div class="row mt-4 mb-4 d-block d-sm-block d-md-none">
                          <a href="{{ url('/payment') }}">
                            <button type="button" class="btn back_button btn-lg btn-light w-100">Buy now</button>
                          </a>
                        </div>
                      </footer> 
                </div>
            </div>
        </div>
</div>
</div>
        <script>
          $(".choosed").on('click', function(e){
              $(".choosed").removeClass("border border-danger");
              $(this).addClass("border border-danger"); 
              $(this).find('input').prop('checked', true);
          });
          // function red(id){
          //   document.getElementById('redbox'+id).style.border = '2px solid #ED1B2F';
          //   document.getElementById('radio'+id).checked = true;
            
          // }
        </script>
        @endsection
        

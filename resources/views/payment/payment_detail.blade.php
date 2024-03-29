@extends('layout.app_payment')
@section('title', ' Reload')
@section('content')
<style>
 
section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}
#tabs{
	background: white;
    color: #0F2A51;
}
#tabs h6.section-title{
    color: #eee;
}

#tabs .nav-tabs.active, .nav-link.active {
    color: #25283A !important;
    background-color: transparent;
    border-color: transparent transparent #25283A;
    border-bottom: 4px solid !important;
    font-size: 16px;
    font-weight: bold;
}
#tabs .nav-tabs .nav-link {
    border: 1px solid transparent;
    border-top-left-radius: .25rem;
    border-top-right-radius: .25rem;
    color: #C4C4C4;
    font-size: 16px;
}
.divided {
    display: flex;
    align-items: center;
}

.divider {
    flex-grow: 1;
    border-bottom: 1px solid #EDEDED;
}
.container_a {
  display: block;
  position: relative;
  
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
  height: 24px;
  width: 24px;
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
    width: 14px;
    height: 14px;
	border-radius: 50% !important;
	background: #ED1B2F !important;
}

</style>
<div class="container-fluid p-0">
    <div class="pt-5 col-12" style="color: #0F2A51;">
        <div class="auto-container" style="min-height: 900px">
            <div class="justify-content-center">
               
                    <div class="col p-0 ml-2 d-block d-sm-block d-md-block d-lg-none">
                        <a href="{{url('/dashboard')}}" style="text-decoration: none"><p style="color:#0F2A51;font-weight:700"><i class="fas fa-angle-left pr-1"></i>Back</p></a>
                    </div>
                
                <div class="row">
                    <div class="col-md-5 col-sm-10">
                        <section id="tabs">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <nav>
                                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Card</a>
                                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Online Banking</a>
                                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">E-Wallet</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content py-3" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <div class="">
                                                    <div class="form-group third-title" style="padding-bottom:0px">
                                                        My Cards
                                                    </div>
                                                    <div class="shadow-sm mb-5 bg-white rounded" style="border:1px solid #ED1B2F">
                                                        <div class="row">
                                                            <div class="col-3 pl-4 pt-1 pb-1">
                                                                <img src="{{asset('img/payment/Mastercard_2019_logo.svg')}}" style="border: #EDEDED 1px solid;" width="48px" height="48px">
                                                            </div>
                                                            <div class="col-7 pt-3">
                                                                **** **** **** 3947
                                                            </div>
                                                            <div class="col-2 pr-3 pt-3">
                                                                <label class="container_a">
                                                                    <input type="checkbox" name="radio" id="radio4">
                                                                    <span class="checkmark_a"></span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group third-title divided mb-4">
                                                        New Cards
                                                        <div class="divider" style="margin-left:5px;"></div>
                                                    </div>
                                                    <div class="form-group semi-title">
                                                        <label for="">Card Number</label>
                                                        <input type="text" class="form-control" placeholder="Please enter card number">  
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                        <label for="">Expirary Date</label>         
                                                        <div class="form-row semi-title">
                                                            <div class="col">
                                                                <input type="text" class="form-control" placeholder="MM">
                                                            </div>
                                                            <div class="col">
                                                                <input type="text" class="form-control" placeholder="YYYY">
                                                            </div>
                                                            <div class="col">
                                                                <input type="text" class="form-control" placeholder="CVV">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group semi-title">
                                                        <label for="">Cordholder Name</label>
                                                        <input type="text" class="form-control" placeholder="Please enter name">  
                                                    </div>
                                                    <div class="form-group mb-4">
                                                        <div class="row">
                                                            <div class="col-1 pt-2">
                                                            <label class="container_a">
                                                                <input type="checkbox" name="radio" id="radio4">
                                                                <span class="checkmark_a"></span>
                                                            </label>
                                                            </div>
                                                            <div class="col-11">
                                                            Save Card <br> Save your card details for faster payment
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="form-group mt-4 d-none d-md-block">
                                                        <a class="#" href="{{ url('/pc') }}">
                                                            <button type="button" class="btn pay_button" style="color:white">Pay</button>
                                                        </a>
                                                    </div> 
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                                            </div>
                                            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-md-5 col-sm-10 container">
                        <div class="mb-2 forth-title" style="font-family: normal normal 600 20px/17px SF UI Display;">
                            <b>Purchase Confirmation</b>
                        </div>
                        <div class="shadow-sm p-3 mb-4 bg-white rounded" style="font:normal normal normal 16px/21px Segoe UI;"> 
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
                    </div>
                </div>
                <div class="form-group mt-2 d-block d-md-none d-flex align-items-center justify-content-center">
                    <a class="#" href="{{ url('/pc') }}" style="width:100%">
                        <button type="button" class="btn pay_button w-100">Pay</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
        @endsection
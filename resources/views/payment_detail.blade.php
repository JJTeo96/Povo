@extends('layout.app')
@section('title', ' Reload')
@section('content')
@include('layout.header')
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
</style>
        <div class="container">
            <div class="justify-content-md-center">
                <div class="row">
                    <div class="col-12 mb-3 forth-title" style="color:#25283A;">
                        <b><svg width="1em" height="1em" viewBox="0 2 16 16" class="bi bi-chevron-left" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"/>
                        </svg> Back</b>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-10">
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
                                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                <div class="">
                                                    <div class="form-group third-title">
                                                        My Cards
                                                    </div>
                                                    <div class="form-group third-title divided">
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
                                                                <input type="text" class="form-control" placeholder="MM">
                                                            </div>
                                                            <div class="col">
                                                                <input type="text" class="form-control" placeholder="MM">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group semi-title">
                                                        <label for="">Cordholder Name</label>
                                                        <input type="text" class="form-control" placeholder="Please enter name">  
                                                    </div>
                                                    <div class="form-group semi-title">
                                                        <label for="">Cordholder Name</label>
                                                        <input type="text" class="form-control" placeholder="Please enter name">  
                                                    </div>
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                                        <label class="form-check-label" for="exampleRadios1">
                                                        Save Card <br> Save your card details for faster payment
                                                        </label>
                                                    </div>
                                                    <hr>
                                                    <div class="form-group ">
                                                        <a class="#" href="{{ url('/pc') }}">
                                                            <button type="button" class="btn pay_button btn-light">Pay</button>
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
                    <div class="col-md-4 col-sm-10">
                        <div class="d-flex justify-content-left mb-2 forth-title" style="font-family: normal normal 600 20px/17px SF UI Display;">
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
            </div>
        </div>
        
        @include('layout.footer')
        @endsection
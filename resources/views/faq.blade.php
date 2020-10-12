@extends('layout.app')
@section('title', ' FAQ')
@section('content')
@include('layout.header')

<style>
.faq-form{
    -webkit-transition: border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out; 
    -o-transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    /* transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out; */
    /* transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out; */
    outline: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
    border: none;
    border-bottom: 1px solid #ced4da;
    -webkit-border-radius: 0;
    border-radius: 0;
    -webkit-box-sizing: content-box;
    box-sizing: content-box;
    background-color: transparent;
}
.row-bg{
        background-attachment:initial;
        background-position:top center;
        background-repeat: no-repeat;
        background-size:cover;
    }
</style>

<div class="col-12 p-5">
    <h1 class="text-center font-weight-bold">PAVOCOMMS <span style="color: red; ">FAQ'S</span></h1>
</div>



    <div class="col-12 p-5 text-center row-bg" style="background-image: linear-gradient(rgb(4, 26, 57, 0.95), rgb(4, 26, 57, 0.95)), url({{ asset('img/faq/contact-bg.png')}})">
        <div class="d-flex justify-content-center mt-4">
            <h1 style="color: white;">Have a Question?</h1>
        </div>
        <p class="d-flex justify-content-center mt-4">
        Ask here if need any special Queries, Custom Plans
        </p>
        
        <form action="#">
            <div class="row d-flex justify-content-center">
                <div class="md-form  col-md-3 mt-4" style="margin-right: 80px;">
                    <input type="text" id="name" class="form-control faq-form" placeholder="Name">
                    <br>
                    <input type="text" id="email" class="form-control faq-form" placeholder="Email">
                    <br>
                    <input type="text" id="phone" class="form-control faq-form" placeholder="Phone">
                    <br>
                </div>
                <div class="col-md-3 mt-4">
                    <input type="text" id="title" class="form-control faq-form" placeholder="Title">
                    <br>
                    <input type="text" id="your_message" class="form-control faq-form" placeholder="Your Message">
                </div>
            </div>
            <button class="btn mt-5" style="background-color:red; color:white; font-size: 12px; width: 12%;" type="submit">SEND MESSAGE</button>
        </form>
    </div>

        <div class="col-12" style="margin-top: 50px;">
            <div class="row no-gutters" style="max-width: 1100px; margin: 0 auto;">
                <div class="col-4 d-flex justify-content-end" style="margin-bottom: 50px;">
                    <div class="text-center font-weight-bold m-4 px-4">
                        <img src="img/faq/Mask Group 3.svg">
                        <p style="font-size: 20px; margin-top:20px;">
                            No Contracts
                        </p>
                        <p style="margin-top:20px;">
                            If you don't love the service, cancel without any fees or penalties.
                        </p>
                    </div>
                </div>
                <div class="col-4 d-flex justify-content-end" style="margin-bottom: 50px">
                    <div class="text-center font-weight-bold m-4 px-4">
                        <img src="img/faq/Mask Group 2.svg">
                        <p style="font-size: 20px; margin-top:20px;">
                            Support
                        </p>
                        <p style="margin-top:20px;">
                            Round-the-clock technicians ready to help online or by phone.
                        </p>
                    </div>
                </div>
                <div class="col-4 d-flex justify-content-end" style="margin-bottom: 50px">
                    <div class="text-center font-weight-bold m-4 px-4">
                        <img src="img/faq/Mask Group 1.svg">
                        <p style="font-size: 20px; margin-top:20px;">
                            Live Chat
                        </p>
                        <p style="margin-top:20px;">
                            A 100% fiber-optic network backed by real-time fiber monitoring.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        @include('layout.footer')
        @endsection
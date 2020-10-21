@extends('layout.app')
@section('title', ' Profile')
@section('content')

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<link href="{{ asset('css/profile.css') }}" rel="stylesheet">
<style>
    .nav-link {
    /* display: block; */
    padding:10px 5px 5px 0px;
    }
</style>
<div class="container-fluid p-0">
    <div class="pt-5 col-12" style="color: #0F2A51;" >
        <div class="auto-container row" style="min-height: 800px">
                @include('layout.sidebar')
                <div class="col-md-12 col-lg-9">
                    @include('layout.mobile_sidebar')
                    <div class="justify-content-left" style="font-size:30px;font-weight:700; margin-top: -8px;">
                        My
                        <span style="color: #ED1B2F;">Profile</span>
                    </div>
                    <div class="tab" role="tabpanel">
                        <section id="tabs">
                        <nav class="#">
                            <div class="nav nav-tabs nav-fill col-sm-12 col-md-9 col-lg-7 p-0" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" style="text-align:center" id="personal_info_tab" data-toggle="tab" href="#personal_info" role="tab" aria-controls="personal_info" aria-selected="true">Personal Info</a>
                                <a class="nav-item nav-link" style="text-align:center" id="password_tab" data-toggle="tab" href="#password" role="tab" aria-controls="password" aria-selected="false">Password</a>
                                <a class="nav-item nav-link" style="text-align:center" id="payment_method_tab" data-toggle="tab" href="#payment_method" role="tab" aria-controls="payment_method" aria-selected="false">Payment Methods</a>
                            </div>
                        </nav>
                        </section>
                        <!-- Tab panes -->
                        
                            <div class="tab-content tabs">
                                <div role="tabpanel" class="tab-pane fade show active" id="personal_info">
                                    <div class="card shadow col-sm-12 col-md-12 col-lg-12" style="margin-top: 20px;">
                                        <form action="#">
                                            <div class="row d-flex justify-content-left">
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <div style="margin-top: 20px; color: grey;">
                                                        Full Name
                                                        <input type="text" id="fullname" class="form-control faq-form" style="color: #000000" value="Tiana Rosser" disabled>
                                                    </div>
                                                    <div style="margin-top: 20px; color: grey;">
                                                        ID Type
                                                        <input type="text" id="id_type" class="form-control faq-form" style="color: #000000" value="My Kad" disabled>
                                                    </div>
                                                    <div style="margin-top: 20px; color: grey;">
                                                        ID Number
                                                        <input type="text" id="id_number" class="form-control faq-form" style="color: #000000" value="9201030181" disabled>
                                                    </div>
                                                    <br/>
                                                </div>
                                                <div class="col-sm-6 col-md-6 col-lg-6">
                                                    <div style="margin-top: 20px; color: grey;">
                                                        Email
                                                        <input type="text" id="fullname" class="form-control faq-form" style="color: #000000" value="tianarosser@gmail.com" disabled>
                                                    </div>
                                                    <div style="margin-top: 20px; color: grey;">
                                                        Date Of Birth
                                                        <input type="text" id="id_type" class="form-control faq-form" style="color: #000000" value="03 Jan 1992" disabled>
                                                    </div>
                                                    <div style="margin-top: 20px; color: grey;">
                                                        Gender
                                                        <input type="text" id="id_number" class="form-control faq-form" style="color: #000000" value="Placeholders" disabled>
                                                    </div>
                                                    <br/>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                <button class="btn btn-radius mt-4 editBtn" style="background-color:#0F2A51; color:white; font-size: 12px; width: 136px; padding: 8px; margin-top: -30px;" type="button">Edit Details</button>
                                <button class="btn btn-radius2 mt-4 submitBtn" style="background-color:#0F2A51; color:white; font-size: 12px; width: 136px; padding: 8px; margin-top: -30px; display:none;" type="button">Submit</button>
                                <button class="btn btn-radius2 mt-4 cancelBtn" style="background-color:red; color:white; font-size: 12px; width: 136px; padding: 8px; margin-top: -30px; display:none;" type="button">Cancel</button>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="password">
                                    <div class="card shadow col-sm-6 col-md-6 col-lg-6" style="margin-top: 20px;">
                                        <form action="#">
                                            <div class="row d-flex justify-content-left" >
                                                <div class="col-sm-12 col-md-12 col-lg-12" >
                                                    <div style="margin-top: 20px; color: grey;">
                                                        Old Password *
                                                        <input type="text" id="old_password" class="form-control faq-form" style="color: #000000">
                                                    </div>
                                                    <div style="margin-top: 20px; color: grey;">
                                                        <div style="width: 200px">
                                                            New Password *
                                                        </div>
                                                        <input type="text" id="new_password" class="form-control faq-form" style="color: #000000">
                                                    </div>
                                                    <div style="margin-top: 20px; color: grey;">
                                                        <div style="width: 200px">
                                                            New Password Again *
                                                        </div>
                                                        <input type="text" id="password_again" class="form-control faq-form" style="color: #000000">
                                                    </div>
                                                    <br/>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <button class="btn btn-radius mt-4 changeBtn" style="background-color:#0F2A51; color:white; font-size: 12px; width: 167px; padding: 8px; margin-top: -30px;" type="button">Changes Password</button>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="payment_method">
                                    <div  style="margin-top: 20px;">
                                        <form action="#">
                                            <div class="row d-flex justify-content-left" >
                                                <div class="col-12 col-sm-12 col-md-12 col-lg-12" style="color: grey;">
                                                    <div>
                                                        Add your credit / debit card details and save your payment information to your account for future purchases. You can also select a card as a preferred payment or replace your existing card.
                                                    </div>
                                                    <button class="btn btn-radius mt-4 new_cardBtn" style="background-color:#0F2A51; color:white; font-size: 12px; width: 167px; padding: 8px; margin-top: -35px; margin-bottom: 236px;" type="button">Add new card</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        
                    </div>                      
            </div>
        </div>
</div>
</div>   
        @endsection
        
@push('scripts')
    <script>
       $( ".editBtn" ).on( "click", function() {
            $('.faq-form').prop("disabled", false);
            $(".editBtn").hide();
            $(".cancelBtn").show();
            $(".submitBtn").show();
        });
       $( ".cancelBtn" ).on( "click", function() {
            $('.faq-form').prop("disabled", true);
            $(".cancelBtn").hide();
            $(".submitBtn").hide();
            $(".editBtn").show();
        });
        $( ".submitBtn" ).on( "click", function() {
            $('.faq-form').prop("disabled", true);
            $(".cancelBtn").hide();
            $(".submitBtn").hide();
            $(".editBtn").show();
        });
    </script>
@endpush
@extends('layout.app')
@section('title', ' Profile')
@section('content')
@include('layout.header')

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<link href="{{ asset('css/profile.css') }}" rel="stylesheet">
<style>
.card-hint{
    border-top:1px solid #EDEDED;
}

.icons8-checked { 
    position: absolute;
    margin-top: 2px;
    margin-left: 2px;
    display: inline-block;
    width: 16px;
    height: 16px;
    background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4Igp3aWR0aD0iMzIiIGhlaWdodD0iMzIiCnZpZXdCb3g9IjAgMCAyMjYgMjI2IgpzdHlsZT0iIGZpbGw6IzAwMDAwMDsiPjxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0ibm9uemVybyIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIHN0cm9rZS1saW5lY2FwPSJidXR0IiBzdHJva2UtbGluZWpvaW49Im1pdGVyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHN0cm9rZS1kYXNoYXJyYXk9IiIgc3Ryb2tlLWRhc2hvZmZzZXQ9IjAiIGZvbnQtZmFtaWx5PSJub25lIiBmb250LXdlaWdodD0ibm9uZSIgZm9udC1zaXplPSJub25lIiB0ZXh0LWFuY2hvcj0ibm9uZSIgc3R5bGU9Im1peC1ibGVuZC1tb2RlOiBub3JtYWwiPjxwYXRoIGQ9Ik0wLDIyNnYtMjI2aDIyNnYyMjZ6IiBmaWxsPSJub25lIj48L3BhdGg+PGcgZmlsbD0iIzJlY2M3MSI+PHBhdGggZD0iTTExMywyMS4xODc1Yy01MC44NDQ0OCwwIC05MS44MTI1LDQwLjk2ODAyIC05MS44MTI1LDkxLjgxMjVjMCw1MC44NDQ0OCA0MC45NjgwMiw5MS44MTI1IDkxLjgxMjUsOTEuODEyNWM1MC44NDQ0OCwwIDkxLjgxMjUsLTQwLjk2ODAyIDkxLjgxMjUsLTkxLjgxMjVjMCwtOS44NzY0NiAtMS4zMjQyMiwtMTkuNzI1MzQgLTQuODU1NDcsLTI4LjkxMjExbC0xMS40NzY1NiwxMS4yNTU4NmMxLjQwNjk4LDUuNjU1NTIgMi4yMDcwMywxMS4zMTEwNCAyLjIwNzAzLDE3LjY1NjI1YzAsNDMuMDkyMjkgLTM0LjU5NTIxLDc3LjY4NzUgLTc3LjY4NzUsNzcuNjg3NWMtNDMuMDkyMjgsMCAtNzcuNjg3NSwtMzQuNTk1MjEgLTc3LjY4NzUsLTc3LjY4NzVjMCwtNDMuMDkyMjggMzQuNTk1MjIsLTc3LjY4NzUgNzcuNjg3NSwtNzcuNjg3NWMyMS4xODc1LDAgNDAuMjIzMTUsOC40NDE5IDUzLjYzMDg2LDIxLjg0OTYxbDkuOTMxNjQsLTkuOTMxNjRjLTE2LjI0OTI3LC0xNi4yNDkyNyAtMzguODQzNzUsLTI2LjA0Mjk3IC02My41NjI1LC0yNi4wNDI5N3pNMTkyLjY3MzgzLDUxLjQyMzgzbC03OS42NzM4Myw3OS42NzM4M2wtMzAuMjM2MzMsLTMwLjIzNjMzbC0xMC4xNTIzNCwxMC4xNTIzNGwzNS4zMTI1LDM1LjMxMjVsNS4wNzYxNyw0Ljg1NTQ3bDUuMDc2MTcsLTQuODU1NDdsODQuNzUsLTg0Ljc1eiI+PC9wYXRoPjwvZz48L2c+PC9zdmc+') 50% 50% no-repeat;
    background-size: 100%; 
opacity: 1;
}
.btn-radius{
    background: var(--unnamed-color-ed1b2f) 0% 0% no-repeat padding-box;
    border: 1px solid var(--unnamed-color-ed1b2f);
    background: #0F2A51 0% 0% no-repeat padding-box;
    border: 1px solid #0F2A51;
    border-radius: 18px;
    opacity: 1;
}
.btn-radius2{
    background: var(--unnamed-color-ed1b2f) 0% 0% no-repeat padding-box;
    border: 1px solid var(--unnamed-color-ed1b2f);
    background:#ED1B2F 0% 0% no-repeat padding-box;
    border: 1px solid #ED1B2F;
    border-radius: 18px;
    opacity: 1;
}
</style>

<div class="col-12 p-5" style="max-width: 1920px; margin: 0 auto; color: #0F2A51;">
        <div class="container">
            <div class="row justify-content-center">
                @include('layout.sidebar')
                <div class="col-8">
        <div class="justify-content-left" style="color:#0F2A51;font-size:30px;font-weight:700; margin-top: -8px;">
                        My
                        <span style="color: #ED1B2F;">Profile</span>
                    </div>
                    <div class="tab" role="tabpanel">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#personal_info" aria-controls="home" role="tab" data-toggle="tab">Personal Info</a></li>
                            <li role="presentation"><a href="#password" aria-controls="profile" role="tab" data-toggle="tab">Password</a></li>
                            <li role="presentation"><a href="#payment_method" aria-controls="messages" role="tab" data-toggle="tab">Payment Method</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabs">
                            <div role="tabpanel" class="tab-pane fade show active" id="personal_info">
                                <div class="card shadow" style="width: 799px; margin-top: 20px;">
                                    <form action="#">
                                        <div class="row d-flex justify-content-left" >
                                            <div class="col-4" style="margin-left:20px; margin-right: 110px;">
                                                <div style="margin-top: 20px;">
                                                    Full Name
                                                    <input type="text" id="fullname" class="form-control faq-form" value="Tiana Rosser" style="width: 365.17px;" disabled>
                                                </div>
                                                <div style="margin-top: 20px;">
                                                    ID Type
                                                    <input type="text" id="id_type" class="form-control faq-form" value="My Kad" style="width: 365.17px;" disabled>
                                                </div>
                                                <div style="margin-top: 20px;">
                                                    ID Number
                                                    <input type="text" id="id_number" class="form-control faq-form" value="9201030181" style="width: 365.17px;" disabled>
                                                </div>
                                                <br/>
                                            </div>
                                            <div class="col-4" style="margin-left:10px; margin-right: 80px;">
                                                <div style="margin-top: 20px;">
                                                    Email
                                                    <input type="text" id="fullname" class="form-control faq-form" value="tianarosser@gmail.com" style="width: 365.17px;" disabled>
                                                </div>
                                                <div style="margin-top: 20px;">
                                                    Date Of Birth
                                                    <input type="text" id="id_type" class="form-control faq-form" value="03 Jan 1992" style="width: 365.17px;" disabled>
                                                </div>
                                                <div style="margin-top: 20px;">
                                                    Gender
                                                    <input type="text" id="id_number" class="form-control faq-form" value="Placeholders" style="width: 365.17px;" disabled>
                                                </div>
                                                <br/>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            <button class="btn btn-radius mt-4 editBtn" style="background-color:#0F2A51; color:white; font-size: 12px; width: 136px; padding: 8px; margin-top: -30px;" type="button">Edit Details</button>
                            <button class="btn btn-radius2 mt-4 cancelBtn" style="background-color:red; color:white; font-size: 12px; width: 136px; padding: 8px; margin-top: -30px; display:none;" type="button">Cancel</button>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="password">
                                <div class="card shadow" style="width: 407px; margin-top: 20px;">
                                    <form action="#">
                                        <div class="row d-flex justify-content-left" >
                                            <div class="col-4" style="margin-left: 21.21px;">
                                                <div style="margin-top: 20px;">
                                                    Old Password *
                                                    <input type="text" id="old_password" class="form-control faq-form"  style="width: 365.17px;">
                                                </div>
                                                <div style="margin-top: 20px;">
                                                    New Password *
                                                    <input type="text" id="new_password" class="form-control faq-form"  style="width: 365.17px;">
                                                </div>
                                                <div style="margin-top: 20px;">
                                                    <div style="width: 200px">
                                                        New Password Again *
                                                    </div>
                                                    <input type="text" id="password_again" class="form-control faq-form" style="width: 365.17px;">
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
                                            <div class="col-12" style="#">
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
        @include('layout.footer')
        @endsection
        
@push('scripts')
    <script>
       $( ".editBtn" ).on( "click", function() {
            $('.faq-form').prop("disabled", false);
            $(".editBtn").hide();
            $(".cancelBtn").show();
        });
       $( ".cancelBtn" ).on( "click", function() {
            $('.faq-form').prop("disabled", true);
            $(".cancelBtn").hide();
            $(".editBtn").show();
        });
    </script>
@endpush
@extends('layout.app')
@section('title', ' Profile')
@section('content')
@include('layout.header')

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
    background: #ED1B2F 0% 0% no-repeat padding-box;
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
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                          <a class="nav-link active" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="true">Personal Info</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="password-tab" data-toggle="tab" href="#password" role="tab" aria-controls="password" aria-selected="false">Password</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" id="payment-tab" data-toggle="tab" href="#payment" role="tab" aria-controls="payment" aria-selected="false">Payment Method</a>
                        </li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
                                    <div class="card">
                                        <form action="#">
                                            <div class="row d-flex justify-content-left" >
                                                <div class="col-4" style="margin-left:10px; margin-right: 80px; width: 50%;">
                                                    Full Name
                                                    <input type="text" id="fullname" class="form-control faq-form font-weight-bold" value="Tiana Rosser" disabled>
                                                    <br>
                                                    ID Type
                                                    <input type="text" id="id_type" class="form-control faq-form font-weight-bold" value="My Kad" disabled>
                                                    <br>
                                                    ID Number
                                                    <input type="text" id="id_number" class="form-control faq-form font-weight-bold" value="9201030181" disabled>
                                                    <br>
                                                </div>
                                                <div class="col-4" style="margin-left:10px; margin-right: 80px;">
                                                    Email
                                                    <input type="text" id="fullname" class="form-control faq-form font-weight-bold" value="tianarosser@gmail.com" disabled>
                                                    <br>
                                                    Date Of Birth
                                                    <input type="text" id="id_type" class="form-control faq-form font-weight-bold" value="03 Jan 1992" disabled>
                                                    <br>
                                                    Gender
                                                    <input type="text" id="id_number" class="form-control faq-form font-weight-bold" value="Placeholders" disabled>
                                                    <br>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                <button class="btn mt-5 editBtn" style="background-color:#0F2A51; color:white; font-size: 12px; width: 15%; padding:15px;" type="button">EDIT</button>
                                <button class="btn mt-5 cancelBtn" style="background-color:red; color:white; font-size: 12px; width: 15%; padding:15px;display:none;" type="button">Cancel</button>
                        </div>
                        <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">...</div>
                        <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="payment-tab">...</div>
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
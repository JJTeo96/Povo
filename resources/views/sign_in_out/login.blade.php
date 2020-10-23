@extends('layout.app')
@section('title', ' Login')

@section('content')
<style>
    .welcome{
        width:421px;
        height:538px;
        margin-top:39px;
        margin-bottom:43px;
        color: var(--unnamed-color-0f2a51);
        text-align: left;
        letter-spacing: -1.6px;
        color: #0F2A51;
        opacity: 1;
 }

    .row-bg{
        background-attachment:initial;
        background-position:top center;
        background-repeat: no-repeat;
        background-size:cover;
        background-image: url({{asset('img/login/Mask-Group-17.jpg')}});
    }
    .register_btn {
        background-color: white;
        color: red;
        border: 2px solid red; 
    }
    a.btn_font{
        text-decoration: none;
        color:red;
        
    }
    input{
        background: var(--unnamed-color-ffffff) 0% 0% no-repeat padding-box;
        background: #FFFFFF 0% 0% no-repeat padding-box;
        box-shadow: 0px 3px 5px #0000000D;
        border: 1px solid #E2E8F0;
        border-radius: 6px;
        opacity: 1;
    }

    @media only screen and (max-width: 321px) {
    .fontsz {
        font-size:0.9rem !important;
       
    }
    }
</style>
<div class="container-fluid p-0">
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
    <div class="row row-bg d-flex justify-content-end" style="min-height: 700px">
        <div class="col-12 col-sm-12 col-md-12 col-lg-8 p-0  d-flex align-items-center justify-content-center">
            <div class="card shadow welcome">
                <article class="card-body" style="margin-left: 20px;margin-right:21px">
                    <h4 class="card-title" style="margin-bottom:35px;margin-top:50px;font-size:32px"><b>Welcome</b></h4>
                    <form>
                        <div class="form-group">
                            <input name="" class="form-control" placeholder="Email or Mobile number" type="text">
                        </div>

                        <div class="form-group">
                            <input class="form-control" placeholder="Password" type="password">
                        </div> 

                        <div class="form-group"> 
                            <div class="checkbox" style="letter-spacing: 0px;">
                            <label> <input type="checkbox"> <span class="fontsz">Remember me</span> </label>
                            <a class="float-right" href="#" style="color: #4B5669"><span class="fontsz">Forgot Password?</span></a>
                            </div> <!-- checkbox .// -->
                        </div>

                        <div class="form-group">
                            {{-- <button type="submit" class="btn btn-primary btn-block"> Login  </button>
                            <button class="btn btn-primary btn-block"> Login  </button> --}}
                            <div class="row" style="letter-spacing: 0px;">
                                <div class="col-lg-6 col-sm-12 col-md-6 pb-3">
                                    <a href="{{ url('/trc') }}" class="btn_font"><div class="btn btn-danger  btn-block" style="background-color:#ED1B2F">Login </div></a>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-md-6">
                                    <a href="{{ url('/register') }}" class="btn_font" style=""><div class="btn register_btn  btn-block" style="color:red">Register</div></a> 
                                </div>
                            </div>
                        </div> <!-- form-group// -->                                                           
                    </form>
                </article>
            </div> <!-- card.// -->
        </div>
    </div>
</div>
</div>

@endsection

@push('scripts')

@endpush
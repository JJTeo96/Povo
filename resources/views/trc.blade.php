@extends('layout.app')
@section('title', ' TRC')

@section('content')
<style>
    .trc{
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
    }
</style>
<div class="container-fluid p-0">
<div class="col-12 col-sm-12 col-md-12 col-lg-12">
    <div class="row row-bg d-flex justify-content-end" style="min-height: 700px">
        <div class="col-12 col-sm-12 col-md-12 col-lg-8 p-0  d-flex align-items-center justify-content-center">
            <div class="card shadow trc">
                <article class="card-body" style="margin-left: 20px;margin-right:21px">
                    <h4 class="card-title" style="margin-bottom:35px;margin-top:50px;font-size:32px"><b>Login to account</b></h4>
                    <form>
                        <div class="form-group">
                            <p style="letter-spacing: 0px;font-size:14px">Enter the TAC just sent to the number <b>60123456789</b></p>
                            <input name="" class="form-control" placeholder="Enter TAC" type="text">
                        </div>

                        <div class="form-group"> 
                            <p style="letter-spacing: 0px;font-size:14px">Resend TAC In 4:50</p>
                        </div>

                        <div class="form-group">
                            {{-- <button type="submit" class="btn btn-primary btn-block"> Login  </button>
                            <button class="btn btn-primary btn-block"> Login  </button> --}}
                            <div class="row" style="letter-spacing: 0px;">
                                <div class="col-lg-6 col-sm-12 col-md-6 ">
                                    <a href="{{ url('/dashboard') }}" class="btn_font"><div class="btn btn-danger  btn-block">Proceed </div></a>
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
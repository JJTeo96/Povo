@extends('layout.app')
@section('title', ' Login')

@section('content')
@include('layout.header')

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
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
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
        color: black;
        border: 0px solid red; 
    }
    a.btn_font{
        text-decoration: none;
    }
</style>
<div class="col-12">
    <div class="row justify-content-end row-bg">
        <div class="col-6">
            {{-- <img class="w-100" src="{{asset('img/login/13105.png')}}"> --}}
        </div>

        <div class="col-6">
            <div class="card shadow welcome">
                <article class="card-body" style="margin-left: 20px;margin-right:21px">
                <h4 class="card-title" style="margin-bottom:35px;margin-top:50px;font-size:32px"><b>Register</b></h4>
                    <form>
                        <div class="form-group">
                            <input name="" class="form-control" placeholder="Mobile number" type="text">
                        </div>

                        <div class="form-group">
                            {{-- <button type="submit" class="btn btn-primary btn-block"> Login  </button>
                            <button class="btn btn-primary btn-block"> Login  </button> --}}
                            <div class="row" style="letter-spacing: 0px;font-size:14px;margin-top:34px">
                                <div class="col">
                                    <a href="#" class="btn_font"><div class="btn btn-danger  btn-block">Request TAC </div></a>
                                </div>
                                <div class="col">
                                    <a href="{{ url('/login') }}" class="btn_font"><div class="btn register_btn btn-block">Back to Sign In &nbsp;<i class="fas fa-long-arrow-alt-right"></i></div></a> 
                                </div>
                            </div>
                        </div> <!-- form-group// -->                                                           
                    </form>
                </article>
            </div> <!-- card.// -->
        </div>
    </div>
</div>

@include('layout.footer')
@endsection
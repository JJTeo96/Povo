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
        color: red;
        border: 2px solid red; 
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
                <h4 class="card-title" style="margin-bottom:35px;margin-top:50px;font-size:32px"><b>Welcome</b></h4>
                    <form>
                        <div class="form-group">
                            <input name="" class="form-control" placeholder="Email or Mobile number" type="text">
                        </div>

                        <div class="form-group">
                            <input class="form-control" placeholder="Password" type="password">
                        </div> 

                        <div class="form-group"> 
                            <div class="checkbox">
                            <label> <input type="checkbox"> Remember me </label>
                            <a class="float-right" href="#">Forgot Password?</a>
                            </div> <!-- checkbox .// -->
                        </div>

                        <div class="form-group">
                            {{-- <button type="submit" class="btn btn-primary btn-block"> Login  </button>
                            <button class="btn btn-primary btn-block"> Login  </button> --}}
                            <div class="row">
                                <div class="col">
                                    <a href="{{ url('/trc') }}" class="btn_font"><div class="btn btn-danger  btn-block">Login </div></a>
                                </div>
                                <div class="col">
                                    <a href="#" class="btn_font"><div class="btn register_btn  btn-block">Register</div></a> 
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
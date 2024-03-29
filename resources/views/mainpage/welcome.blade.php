@extends('layout.app')
@section('title', ' Home')

@push('styles')
<style>
    .carousel-indicators li{
        transition: 0.3s all cubic-bezier(0.32, 0.71, 0.53, 0.53);
        /* display: inline-block; */
        width: 8px;
        height: 8px;
        border-radius: 8px;
        background: #ffffff;
        margin: 3px;
        border-top:0px;
        border-bottom:0px;
    }
    
    .carousel-indicators .active{
        width: 20px;
        height: 7px;
    }
    
    </style>
@endpush

@section('content')
<div class="container-fluid p-0">
    {{-- Carousel --}}
    {{-- <div class="col-12 p-0">
        <div id="carouselExampleIndicators" class="carousel slide col-lg-12 col-md-12 col-sm-6 p-0" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block" src="{{asset('img/mainpage/banner3.png')}}" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="{{asset('img/mainpage/banner3.png')}}" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block" src="{{asset('img/mainpage/banner3.png')}}" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div> --}}

    <div id="carousel" class="carousel slide carousel-fade" data-ride="carousel" data-interval="6000">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                    <!-- 
                    If you need more browser support use https://scottjehl.github.io/picturefill/
                    If a picture looks blurry on a retina device you can add a high resolution like this
                    <source srcset="img/blog-post-1000x600-2.jpg, blog-post-1000x600-2@2x.jpg 2x" media="(min-width: 768px)">

                    What image sizes should you use? This can help - https://codepen.io/JacobLett/pen/NjramL
                     -->
                <picture>
                    <source srcset="{{asset('img/mainpage/banner3.png')}}" media="(min-width: 1400px)">
                    <source srcset="https://dummyimage.com/1400x500/#007aeb/4196e5" media="(min-width: 769px)">
                    <source srcset="https://dummyimage.com/800x500/007aeb/4196e5" media="(min-width: 577px)">
                    <img srcset="{{asset('img/mainpage/banner-mobile.jpg')}}" alt="responsive image"class="img-fluid" style="width:100%"width:100%">
                </picture>

                {{-- <div class="carousel-caption">
                    <div>
                        <h2>Digital Craftsmanship</h2>
                        <p>We meticously build each site to get results</p>
                        <span class="btn btn-sm btn-outline-secondary">Learn More</span>
                    </div>
                </div> --}}
            </div>

            <!-- /.carousel-item -->
            <div class="carousel-item">
                <picture>
                    <source srcset="{{asset('img/mainpage/banner4.png')}}" media="(min-width: 1400px)">
                    <source srcset="https://dummyimage.com/1400x500/007aeb/4196e5" media="(min-width: 769px)">
                    <source srcset="https://dummyimage.com/800x500/007aeb/4196e5" media="(min-width: 577px)">
                    <img srcset="{{asset('img/mainpage/banner-mobile.jpg')}}" alt="responsive image"class="img-fluid" style="width:100%">
                </picture>
            </div>

            <!-- /.carousel-item -->
            <div class="carousel-item">
                <picture>
                    <source srcset="{{asset('img/about/banner5.png')}}" media="(min-width: 1400px)">
                    <source srcset="https://dummyimage.com/1400x500/007aeb/4196e5" media="(min-width: 769px)">
                    <source srcset="https://dummyimage.com/800x500/007aeb/4196e5" media="(min-width: 577px)">
                    <img srcset="{{asset('img/mainpage/banner-mobile.jpg')}}" alt="responsive image"class="img-fluid" style="width:100%">
                </picture>
            </div>
        </div>
        
        <!-- /.carousel-inner -->
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!-- /.carousel -->
    {{-- End Carousel --}}
    
    {{-- Mobile Plan --}}
    <div id="plans" class="p-3 mb-5"></div>
    <div class="col-12">
        <div class="auto-container">
            <h1 class="text-center" style="font-weight: 800"><span style="color:#0F2A51">MOBILE </span><span style="color: red; ">PLAN</span></h1>
            <div class="p-3" style="max-width: 636px;margin: auto">
                <h6 class="text-center font-weight-bold" style="font-size:18px;color:#0F2A51">PAVOCOMMS your mobile experiences. Save more as you add more lines for your family, tablets and wearables.</h6>
            </div>
        </div>
    </div>
    {{-- End Mobile Plan --}}
    
    {{-- Card--}}
    <div class="col-12">
        <div class="auto-container mt-3">
            <div class="row">
                
                <div class="col-lg-4 col-12 d-flex justify-content-center mb-lg-1 mb-5 mb-md-3 mb-xs-3 ">
                    <div class="card shadow">
                        <div class="card img-fluid">
                            <div class="img-gradient"> 
                                <img class="card-img-top" src="{{asset('img/mainpage/2.png')}}" alt="Card image cap">
                            </div>
                            
                            <div class="card-img-overlay d-flex flex-column justify-content-end" style="padding-left:20px">
                                <h4 class="card-title" style="color:white;font-size:2.1rem;text-aligin:left;padding: 0px 50px 0px 0px"><b>One Family Plan for Sharing</b></h4>
                                <p class="card-text" style="color:white">FROM <span style="font-size: 22px"> RM90.00/month</span></p>
                            </div>    
                        </div>
                        <div class="card-body">
                            <h3 class="card-title" style="font-size:40px;color:#0F2A51;font-weight:800;padding: 20px 50px 20px 9px">Unlimited Share Plan</h3>
                            <p class="card-text pl-2" style="color:#8E8888;padding-right:70px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                            <hr/>
                            <a class="font-weight-bold" style="color:#0F2A51;padding-left:8px" href="#" >View Plan Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-12 d-flex justify-content-center mb-lg-1 mb-5 mb-md-3 mb-xs-3">
                    <div class="card shadow" >
                        <div class="card img-fluid ">
                            <div class="img-gradient"> 
                                <img class="card-img-top" src="{{asset('img/mainpage/3.png')}}" alt="Card image cap">
                            </div>
                            <div class="card-img-overlay  d-flex flex-column justify-content-end">
                                <h4 class="card-title" style="color:white;font-size:2.1rem;text-aligin:left;padding: 0px 100px 0px 0px"><b>Just Right for you</b></h4>
                                <p class="card-text" style="color:white">FROM<span style="font-size: 22px"> RM90.00/month</p>
                            </div>    
                        </div>
                        <div class="card-body">
                            <h3 class="card-title" style="font-size:40px;color:#0F2A51;font-weight:800;padding: 20px 70px 20px 9px">PAVO Lite Plan</h3>
                            <p class="card-text pl-2" style="color:#8E8888;padding-right:70px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                            <hr/>
                            <a class="font-weight-bold" style="color:#0F2A51;padding-left:8px" href="#" >View Plan Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-12 d-flex justify-content-center mb-lg-1 mb-5 mb-md-3 mb-xs-3">
                    <div class="card shadow" >
                        <div class="card img-fluid">
                            <div class="img-gradient"> 
                                <img class="card-img-top" src="{{asset('img/mainpage/4.png')}}" alt="Card image cap">
                            </div>
                            <div class="card-img-overlay  d-flex flex-column justify-content-end">
                                <h4 class="card-title" style="color:white;font-size:2.1rem;text-aligin:left;padding: 0px 70px 0px 0px"><b>Always Connected</b></h4>
                                <p class="card-text" style="color:white">FROM<span style="font-size: 22px">  RM90.00/month</p>
                            </div>    
                        </div>
                        <div class="card-body">
                            <h3 class="card-title" style="font-size:40px;color:#0F2A51;font-weight:800;padding: 20px 50px 20px 9px">PAVO Plus Plan</h3>
                                <p class="card-text pl-2" style="color:#8E8888;padding-right:70px">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                                <hr/>
                                <a class="font-weight-bold" style="color:#0F2A51;padding-left:8px" href="#" >View Plan Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Card--}}

    {{-- Image Bottom Web--}}
            <div class="col-12 p-0 pt-5 d-sm-none d-none d-md-none d-lg-block " style="position: relative;">
                <div class="w-100" style="display: flex; align-items: center; min-height: 597px; background-position: center; background-attachment: scroll; background-size: cover; background-repeat: no-repeat; background-image: url({{ asset('img/mainpage/Group-249.jpg')}});">
                    <div class="col-10  d-flex justify-content-end">
                        <div class="col-4 " style="text-align: end">
                            <div class="col-sm-6 col-md-12 col-lg-12" style="color:white; font-size: 3rem;text-shadow: 0px 3px 20px #00000094;text-aligin:right;font-weight:700">
                                Pavocomms is not just about data, we're a new lease on life.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    {{-- End Image Bottom Web--}}

    {{-- Image Bottom Mobile--}}
    <div class="col-12 p-0 d-block d-sm-block d-md-block d-lg-none " style="position: relative;">
        <div class="w-100" style="display: flex; align-items: center; min-height: 597px; background-position: center; background-attachment: scroll; background-size: cover; background-repeat: no-repeat; background-image: url({{ asset('img/mainpage/banner-mobile-2.jpg')}});">
            <div class="col-12  d-flex">
                <div class="col-12" style="text-align: left">
                    <div class="col-sm-12 col-md-12 col-lg-12" style="color:white; font-size: 2.2rem;text-shadow: 0px 3px 20px #00000094;text-aligin:right;font-weight:700;margin-top:200px;">
                        Pavocomms is not just about data, we're a new lease on life.
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- End Image Bottom Mobile--}}
</div>


@endsection

@push('scripts')
@endpush
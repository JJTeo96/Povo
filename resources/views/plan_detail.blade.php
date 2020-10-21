@extends('layout.app')
@section('title', ' Upgrade Plan')
@section('content')

<style>
    .vl {
      border-left: 1px solid #EDEDED;
      height: 86px;
      /* position: absolute; */
      /* left: 100%; */
      /* right: 100%; */
      margin-right: 3px;
      /* top: 0; */
    }

    .upgrade_btn {
        background-color: white;
        color: red !important;
        border: 1px solid red; 
        border-radius: 18px;
        /* width: 112px; */
        /* height: 35px; */
        font-weight:bold;
        text-decoration: none;
        font-size:0.8rem;
    }
</style>

<div class="container-fluid p-0">
    <div class="auto-container row pt-5" style="min-height: 900px">
        {{-- Col-3 --}}
        @include('layout.sidebar')
        {{-- End Col-3 --}}

        {{-- Content --}}
        <div class="col-12 col-md-12 col-lg-9">
            <div class="col d-sm-none d-none d-md-block p-0">
                <a href="{{ url('/upgrade_plan') }}" style="text-decoration: none;font-size:20px;color:#25283A"><i class="fas fa-angle-left"></i> &nbsp; Back</a>
            </div>

            <div class="col d-block d-sm-block d-md-none p-0">
                <a href="{{ url('/upgrade_plan') }}" style="text-decoration: none;font-size:20px;color:#25283A"><i class="fas fa-angle-left pr-1"></i> Back to Plan</a>
            </div>

            <div class="col mt-3 p-0">
                <span style="font-size:24px;color:#0F2A51;font-weight:bold">Unlimited Internet and Calls</span>
            </div>

            <div class="col mt-2 d-sm-none d-none d-md-block p-0" >
                <div class="w-100" style="display: flex;min-height:268px;background-position:left;background-attachment:scroll;background-repeat:no-repeat;background-image: url({{ asset('img/Image.png')}});">
                </div>
            </div>

            <div class="col mt-2 d-block d-sm-block d-md-none p-0">
                <div class="w-100" style="display: flex;min-height:200px;background-position:left;background-attachment:scroll;background-repeat:no-repeat;background-image: url({{ asset('img/Image_responsive.png')}});">
                </div>
            </div>

            <div class="col mt-3 p-0">
                <div class="col" style="padding: 0px;color:#0F2A51;font-weight:bold">Truly unlimited internet, unlimited calls, and more!</div>
                <div class="col-sm-7 mt-3 " style="padding: 0px;font-size:14px;color:black">The plan will suit the increasingly digital lifestyles of Generation Z, who are primed to take advantage of the digital ecosystem through skills learnt online and e-Commerce.</div>
            </div>

            <div class="col mt-3 p-0">
                <div class="row">
                    {{-- Card 1,2 --}}
                    <div class="col-lg-6 col-md-12 col-sm-12 p-0 pr-lg-3 pr-md-0 pr-sm-0 pb-3">
                        <div class="card" style="color: #0F2A51;font-weight:bold;box-shadow: 0px 5px 5px #0000000D;">
                            <div class="row no-gutters d-flex align-items-center">
                                {{-- <div class="col-md-8 col-sm-8 p-2" >
                                    <div class="col">
                                        <span style="font-size: 22px">RM35.00</span> / mth 
                                    </div>
                                    <div class="col">
                                        - Unlimited internet (3Mbps) <br/>
                                        - Unlimited calls (all networks) <br/>
                                        - Free VIU Premium
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-4" style="margin: 0 auto">
                                    <div class="vl" style="margin-top: 21px;margin-right:9px"></div>
                                    <a href="{{ url('/payment') }}" class="btn upgrade_btn " style="margin-top:42px;" >Upgrade</a>
                                </div> --}}
                                <div class="col-8 col-md-8 col-sm-8 p-3" >
                                    <span style="font-size: 22px">RM35.00</span> / mth 
                                    <div class="col p-0" style="font-size: 14px">
                                        - Unlimited internet (3Mbps) <br/>
                                        - Unlimited calls (all networks) <br/>
                                        - Free VIU Premium
                                    </div>
                                </div>
                                <div class="col-4 col-md-4 col-sm-4 d-flex align-items-center">
                                    <div class="vl" ></div>
                                    <div style='margin:0 auto;color:red'><a href="{{ url('/payment') }}" class="btn upgrade_btn" >Upgrade</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12 p-0 pr-lg-3 pr-md-0 pr-sm-0 pb-3">
                        <div class="card" style="color: #0F2A51;font-weight:bold;box-shadow: 0px 5px 5px #0000000D;">
                            <div class="row no-gutters d-flex align-items-center">
                                {{-- <div class="col-md-8 col-sm-8 p-2" >
                                    <div class="col">
                                        <span style="font-size: 22px">RM35.00</span> / mth 
                                    </div>
                                    <div class="col">
                                        - Unlimited internet (3Mbps) <br/>
                                        - Unlimited calls (all networks) <br/>
                                        - Free VIU Premium
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-4" style="margin: 0 auto">
                                    <div class="vl" style="margin-top: 21px;margin-right:9px"></div>
                                    <a href="{{ url('/payment') }}" class="btn upgrade_btn " style="margin-top:42px;" >Upgrade</a>
                                </div> --}}
                                <div class="col-8 col-md-8 col-sm-8 p-3" >
                                    <span style="font-size: 22px">RM45.00</span> / mth 
                                    <div class="col p-0" style="font-size: 14px">
                                        - Unlimited internet (6Mbps) <br/>
                                        - Unlimited calls (all networks) <br/>
                                        - Free VIU Premium
                                    </div>
                                </div>
                                <div class="col-4 col-md-4 col-sm-4 d-flex align-items-center">
                                    <div class="vl" ></div>
                                    <div style='margin:0 auto;'><a href="{{ url('/payment') }}" class="btn upgrade_btn " >Upgrade</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    {{-- End Card 1,2 --}}

                    {{-- Card 3 --}}
                    <div class="col-lg-6 col-md-12 col-sm-12 p-0 pr-lg-3 pr-md-0 pr-sm-0 pb-3">
                        <div class="card" style="color: #0F2A51;font-weight:bold;box-shadow: 0px 5px 5px #0000000D;">
                            <div class="row no-gutters d-flex align-items-center">
                                {{-- <div class="col-md-8 col-sm-8 p-2" >
                                    <div class="col">
                                        <span style="font-size: 22px">RM35.00</span> / mth 
                                    </div>
                                    <div class="col">
                                        - Unlimited internet (3Mbps) <br/>
                                        - Unlimited calls (all networks) <br/>
                                        - Free VIU Premium
                                    </div>
                                </div>

                                <div class="col-md-3 col-sm-4" style="margin: 0 auto">
                                    <div class="vl" style="margin-top: 21px;margin-right:9px"></div>
                                    <a href="{{ url('/payment') }}" class="btn upgrade_btn " style="margin-top:42px;" >Upgrade</a>
                                </div> --}}
                                <div class="col-8 col-md-8 col-sm-8 p-3" >
                                    <span style="font-size: 22px">RM12.00</span> / week 
                                    <div class="col p-0" style="font-size: 14px">
                                        - Unlimited internet (3Mbps) <br/>
                                        - Unlimited calls (all networks)
                                    </div>
                                </div>
                                <div class="col-4 col-md-4 col-sm-4 d-flex align-items-center">
                                    <div class="vl" ></div>
                                    <div style='margin:0 auto;'><a href="{{ url('/payment') }}" class="btn upgrade_btn " >Upgrade</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End Card 3 --}}
                </div>
            </div>
        </div>
        {{-- End Content --}}
    </div>
</div>

@endsection
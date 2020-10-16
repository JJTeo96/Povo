@extends('layout.app')
@section('title', ' Upgrade Plan')
@section('content')
@include('layout.header')

<style>
    .vl {
      border-left: 1px solid #EDEDED;
      height: 70px;
      /* position: absolute; */
      /* left: 100%; */
      /* right: 100%; */
      margin-right: 3px;
      /* top: 0; */
    }

    .upgrade_btn {
        background-color: white;
        color: red;
        border: 1px solid red; 
        border-radius: 18px;
        /* width: 112px; */
        /* height: 35px; */
        font-weight:bold;
        text-decoration: none;
        font-size:0.8rem;
        
        
    }
</style>


    <div class="auto-container row" style="min-height: 800px">
        {{-- Col-3 --}}
        @include('layout.sidebar')
        {{-- End Col-3 --}}

        {{-- Content --}}
        <div class="col-sm-9">
            <div class="col-sm">
                <a href="{{ url('/upgrade_plan') }}" style="text-decoration: none;font-size:20px;color:#25283A"><i class="fas fa-angle-left"></i> &nbsp; Back</a>
            </div>
            <div class="col-sm mt-3">
                <span style="font-size:26px;color:#0F2A51;font-weight:bold">Unlimited Internet and Calls</span>
            </div>

            <div class="col-sm mt-2">
                <div class="w-100" style="display: flex;min-height:268px;background-position:left;background-attachment:scroll;background-repeat:no-repeat;background-image: url({{ asset('img/Image.png')}});">
                </div>
            </div>

            <div class="col-sm mt-3">
                <div class="col" style="padding: 0px;color:#0F2A51;font-weight:bold">Truly unlimited internet, unlimited calls, and more!</div>
                <div class="col-sm-7 mt-3 " style="padding: 0px;font-size:14px;color:black">The plan will suit the increasingly digital lifestyles of Generation Z, who are primed to take advantage of the digital ecosystem through skills learnt online and e-Commerce.</div>
            </div>

            <div class="col-sm mt-3">
                <div class="row">
                    {{-- Card 1 --}}
                    <div class="col-lg-6 col-md-12 col-sm-12 p-0 p-md-4">
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
                                <div class="col-8 col-md-8 col-sm-8 p-4" >
                                    <span style="font-size: 22px">RM35.00</span> / mth 
                                    - Unlimited internet (3Mbps) <br/>
                                        - Unlimited calls (all networks) <br/>
                                        - Free VIU Premium
                                </div>
                                <div class="col-4 col-md-4 col-sm-4 d-flex align-items-center">
                                    <div class="vl" ></div>
                                    <div style='margin:0 auto;'><a href="{{ url('/payment') }}" class="btn upgrade_btn " >Upgrade</a></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12 p-0 p-md-4">
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
                                <div class="col-8 col-md-8 col-sm-8 p-4" >
                                    <span style="font-size: 22px">RM35.00</span> / mth 
                                    - Unlimited internet (3Mbps) <br/>
                                        - Unlimited calls (all networks) <br/>
                                        - Free VIU Premium
                                </div>
                                <div class="col-4 col-md-4 col-sm-4 d-flex align-items-center">
                                    <div class="vl" ></div>
                                    <div style='margin:0 auto;'><a href="{{ url('/payment') }}" class="btn upgrade_btn " >Upgrade</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End Card 1 --}}

                    {{-- Card 2 --}}
                    <div class="col-md-6 col-sm-12">
                        <div class="card" style="color: #0F2A51;font-weight:bold;box-shadow: 0px 5px 5px #0000000D;">
                            <div class="row no-gutters">
                                <div class="col-md-8 p-2" >
                                    <div class="col">
                                        <span style="font-size: 22px">RM45.00</span> / mth 
                                    </div>
                                    <div class="col">
                                        - Unlimited internet (6Mbps) <br/>
                                        - Unlimited calls (all networks) <br/>
                                        - Free VIU Premium
                                    </div>
                                </div>

                                <div class="col-md-3" style="margin: 0 auto">
                                    <div class="vl" style="margin-top: 21px;margin-right:9px"></div>
                                    <a href="{{ url('/payment') }}" class="btn upgrade_btn " style="margin-top:42px;" >Upgrade</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End Card 2 --}}
                </div>

                <div class="row" style="margin-top: 14px">
                    {{-- Card 3 --}}
                    <div class="col-sm-6">
                        <div class="card" style="color: #0F2A51;font-weight:bold;box-shadow: 0px 5px 5px #0000000D;">
                            <div class="row no-gutters">
                                <div class="col-md-8 p-2" >
                                    <div class="col">
                                        <span style="font-size: 22px">RM12.00</span> / week 
                                    </div>
                                    <div class="col">
                                        - Unlimited internet (3Mbps) <br/>
                                        - Unlimited calls (all networks)
                                    </div>
                                </div>

                                <div class="col-md-3" style="margin: 0 auto">
                                    <div class="vl" style="margin-top: 21px;margin-right:9px"></div>
                                    <a href="{{ url('/payment') }}" class="btn upgrade_btn " style="margin-top:42px;" >Upgrade</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- End Card 3 --}}
                </div>
            </div>

            <section>
                
              </section>
            
        </div>
        {{-- End Content --}}
       
    </div>



@include('layout.footer')
@endsection
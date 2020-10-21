@extends('layout.app')
@section('title', ' Upgrade Plan')
@section('content')

<div class="container-fluid p-0">
    <div class="pt-5 col-12" >
        <div class="auto-container row">
            {{-- Col-3 --}}
            @include('layout.sidebar')
            {{-- End Col-3 --}}

            <div class="col-12 col-md-12 col-lg-8 " style="min-height: 650px">
                <div class="col p-0 d-block d-sm-block d-md-block d-lg-none">
                <a href="{{url('/dashboard')}}" style="text-decoration: none"><p style="color:#0F2A51;font-weight:700"><i class="fas fa-angle-left pr-1"></i>Back to Dashboard</p></a>
                </div>
                <div class="d-sm-none d-none d-md-block" style="color:#ED1B2F;font-size:33px;font-weight:700;margin-bottom: 31px">
                    Upgrade <span style="color:#0F2A51">Plan</span>
                </div>
            
                <div class="row auto-container">
                    <div class="col-lg-5 col-md-6 col-12 p-0 mb-3 d-flex justify-content-center mr-0 mr-md-0 mr-lg-5" style="max-width: 1230px">
                        <a href="{{ url('/plan_detail') }}" style="text-decoration: none">
                        <div class="card " style="width: 325px;border:none">
                            <img class="card-img-top" src="{{asset('img/upgrade_plan/hotlink-prepaid.png')}}" alt="Card image cap">
        
                            <div class="card-footer text-muted" style="height: 35px;text-align:center;background-color:#0F2A51;border-radius: 0px 0px 10px 10px">
                                <div class="auto_container text-white" style="margin-top:-5px;font-size:12px">
                                    View Plan
                                </div>   
                            </div>
                        </div>
                        </a>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 p-0 d-flex justify-content-center">
                        <a href="#" style="text-decoration: none">
                            <div class="card" style="width: 325px;border:none">
                                <img class="card-img-top" src="{{asset('img/upgrade_plan/Group 149.png')}}" alt="Card image cap">
            
                                <div class="card-footer text-muted" style="height: 35px;text-align:center;background-color:#0F2A51;border-radius: 0px 0px 10px 10px">
                                    <div class="auto_container text-white" style="margin-top:-5px;font-size:12px">
                                        View Plan
                                    </div>   
                                </div>
                            </div>
                        </a>
                    </div>
                
                        

                
                </div>
                
            </div>
        </div>
    </div>
</div>

@endsection
@extends('layout.app')
@section('title', ' Upgrade Plan')
@section('content')
@include('layout.header')

<div class="p-5 col-sm-12" >
    <div class="auto-container row">
        {{-- Col-3 --}}
        @include('layout.sidebar')
        {{-- End Col-3 --}}

        <div class="col-sm-9">
            <div style="color:#ED1B2F;font-size:33px;font-weight:700;margin-bottom: 31px">
                Upgrade <span style="color:#0F2A51">Plan</span>
            </div>
          
            <div class="row auto-container" style="min-height: 600px;">
            <a href="{{ url('/plan_detail') }}" style="text-decoration: none">
                <div class="card mr-5" style="width: 325px;border:none">
                    <img class="card-img-top" src="{{asset('img/upgrade_plan/hotlink-prepaid.png')}}" alt="Card image cap">
  
                    <div class="card-footer text-muted" style="height: 35px;text-align:center;background-color:#0F2A51;border-radius: 0px 0px 10px 10px">
                        <div class="auto_container text-white" style="margin-top:-5px;font-size:12px">
                            View Plan
                        </div>   
                    </div>
                </div>
            </a>
                    

            <a href="#" style="text-decoration: none">
                <div class="card" style="width: 325px;border:none">
                    <img class="card-img-top" src="{{asset('img/upgrade_plan/switch-to-hotlink-rebrand-herobanner-desktop.png')}}" alt="Card image cap">
  
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


@include('layout.footer')
@endsection
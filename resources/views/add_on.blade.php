@extends('layout.app')
@section('title', 'Buy Add-Ons')
@section('content')

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<link href="{{ asset('css/addon.css') }}" rel="stylesheet">
<div class="container-fluid p-0">
    <div class="pt-5 col-12" style="color: #0F2A51;" >
        <div class="auto-container row" style="min-height: 800px">
                @include('layout.sidebar')
                <div class="col-lg-9 col-sm-12">
                @include('layout.mobile_sidebar')

                    <div class="justify-content-left" style="color:#0F2A51;font-size:30px;font-weight:700; margin-top: -8px;">
                        Buy
                        <span style="color: #ED1B2F;">Add-Ons</span>
                    </div>
                    <div class="tab" role="tabpanel" style="margin-top: 15px;">
                        <section id="tabs">
                            <nav class="d-sm-none d-none d-md-block">
                                <div class="nav nav-tabs nav-fill col-sm-9 col-md-7 col-lg-9" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="internet_tab" data-toggle="tab" href="#internet" role="tab" aria-controls="internet" aria-selected="true">
                                        <img src="img/addon/Wifi.svg">&nbsp;&nbsp;Internet
                                    </a>
                                    <a class="nav-item nav-link" id="call_sms_tab" data-toggle="tab" href="#call_sms" role="tab" aria-controls="call_sms" aria-selected="false">
                                        <img src="img/addon/Call.svg">&nbsp;&nbsp;Calls+SMS
                                    </a>

                                    <a class="nav-item nav-link" id="roaming_tab" data-toggle="tab" href="#roaming" role="tab" aria-controls="roaming" aria-selected="false">
                                        <img src="img/addon/Group-146.svg">&nbsp;&nbsp;Roaming
                                    </a>
                                    <a class="nav-item nav-link" id="idd_tab" data-toggle="tab" href="#idd" role="tab" aria-controls="idd" aria-selected="false">
                                        <img src="img/addon/IDD-01.svg">&nbsp;&nbsp;IDD
                                    </a>
                                </div>
                            </nav>

                            <nav class="d-block d-sm-block d-md-none">
                                <div class="nav nav-tabs nav-fill col-sm-9 col-md-7 col-lg-9" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="internet_tab" data-toggle="tab" href="#internet" role="tab" aria-controls="internet" aria-selected="true">
                                        <img class="" src="img/addon/Wifi.svg">&nbsp;&nbsp;Internet&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </a>
                                    <a class="nav-item nav-link" id="call_sms_tab" data-toggle="tab" href="#call_sms" role="tab" aria-controls="call_sms" aria-selected="false">
                                        <img src="img/addon/Call.svg">&nbsp;&nbsp;Calls+SMS
                                    </a>

                                    <a class="nav-item nav-link" style="width:107px;margin-top:5px" id="roaming_tab" data-toggle="tab" href="#roaming" role="tab" aria-controls="roaming" aria-selected="false">
                                        <img src="img/addon/Group-146.svg">&nbsp;&nbsp;Roaming
                                    </a>
                                    <a class="nav-item nav-link" id="idd_tab" data-toggle="tab" href="#idd" role="tab" aria-controls="idd" aria-selected="false">
                                        <img src="img/addon/IDD-01.svg">&nbsp;&nbsp;IDD
                                    </a>
                                    
                                </div>
                            </nav>
                        </section>
                        <!-- Tab panes -->
                        <div class="tab-content tabs" style="max-width: 900px;">
                            <div role="tabpanel" class="tab-pane fade show active" id="internet">
                                    <div  style="color:#0F2A51; font-size: 16px; margin-top: 35px;">Choose Your Internet Plan</div>
                                    <div class="col-lg-9 col-sm-12 p-0"> 
                                    <div class="row mb-4" style="margin-top: 10px;">
                                        <div class="col-6 col-md-6 col-lg-4" style="margin-top: 10px; margin-right: -15px">
                                            <div class="card border-light shadow" >
                                                <div class="card-header header-card">
                                                    BigBonus - AutoRenew
                                                </div>
                                                    <div class="card-body body-card">
                                                        4GB + FREE 30GB + <br/>Unlimited Calls<br/><br/>
                                                        <p>
                                                            <span class="font-weight-bold" style="color: #ED1B2F;">RM28.00</span>
                                                            <span class="font-weight-bold" style="color: #0F2A51;"> / 30 Days</span>
                                                        </p>
                                                        <a class="#" href="{{ url('/payment') }}">
                                                            <button class="btn btn-radius btn-outline font-weight-bold" style="background-color:white; color:Red; font-size: 12px; width: 112px; padding: 8px; margin-top: -10px;" type="submit">Buy Now</button>
                                                        </a>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-6 col-lg-4" style="margin-top: 10px; margin-right: -15px">
                                            <div class="card border-light shadow" >
                                                <div class="card-header header-card">
                                                    BigBonus - AutoRenew
                                                </div>
                                                    <div class="card-body body-card">
                                                        7GB + FREE 30GB<br/><br/><br/>
                                                        <p>
                                                            <span class="font-weight-bold" style="color: #ED1B2F;">RM30.00</span>
                                                            <span class="font-weight-bold" style="color: #0F2A51;"> / 30 Days</span>
                                                        </p>
                                                        <a class="#" href="{{ url('/payment') }}">
                                                            <button class="btn btn-radius btn-outline font-weight-bold" style="background-color:white; color:Red; font-size: 12px; width: 112px; padding: 8px; margin-top: -10px;" type="submit">Buy Now</button>
                                                        </a>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-6 col-lg-4" style="margin-top: 10px; margin-right: -15px">
                                            <div class="card border-light shadow" style="height: 186px;">
                                                <div class="card-header header-card">
                                                    BigBonus - AutoRenew
                                                </div>
                                                    <div class="card-body body-card">
                                                        8GB + FREE 30GB<br/><br/><br/>
                                                        <p>
                                                            <span class="font-weight-bold" style="color: #ED1B2F;">RM35.00</span>
                                                            <span class="font-weight-bold" style="color: #0F2A51;"> / 30 Days</span>
                                                        </p>
                                                        <a class="#" href="{{ url('/payment') }}">
                                                            <button class="btn btn-radius btn-outline font-weight-bold" style="background-color:white; color:Red; font-size: 12px; width: 112px; padding: 8px; margin-top: -10px;" type="submit">Buy Now</button>
                                                        </a>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-6 col-lg-4" style="margin-top: 10px; margin-right: -15px">
                                            <div class="card border-light shadow" style="height: 186px;">
                                                <div class="card-header header-card">
                                                    BigBonus - AutoRenew
                                                </div>
                                                    <div class="card-body body-card">
                                                        9GB + FREE 30GB + <br/>Unlimited Calls<br/><br/>
                                                        <p>
                                                            <span class="font-weight-bold" style="color: #ED1B2F;">RM40.00</span>
                                                            <span class="font-weight-bold" style="color: #0F2A51;"> / 30 Days</span>
                                                        </p>
                                                        <a class="#" href="{{ url('/payment') }}">
                                                            <button class="btn btn-radius btn-outline font-weight-bold" style="background-color:white; color:Red; font-size: 12px; width: 112px; padding: 8px; margin-top: -10px;" type="submit">Buy Now</button>
                                                        </a>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-6 col-lg-4" style="margin-top: 10px; margin-right: -15px">
                                            <div class="card border-light shadow" style="height: 186px;">
                                                <div class="card-header header-card">
                                                    BigBonus - AutoRenew
                                                </div>
                                                    <div class="card-body body-card">
                                                        12GB + FREE 30GB +<br/>Unlimited Calls<br/><br/>
                                                        <p>
                                                            <span class="font-weight-bold" style="color: #ED1B2F;">RM50.00</span>
                                                            <span class="font-weight-bold" style="color: #0F2A51;"> / 30 Days</span>
                                                        </p>
                                                        <a class="#" href="{{ url('/payment') }}">
                                                            <button class="btn btn-radius btn-outline font-weight-bold" style="background-color:white; color:Red; font-size: 12px; width: 112px; padding: 8px; margin-top: -10px;" type="submit">Buy Now</button>
                                                        </a>
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-6 col-lg-4" style="margin-top: 10px; margin-right: -15px">
                                            <div class="card border-light shadow" style="height: 186px;">
                                                <div class="card-header header-card">
                                                    BigBonus - AutoRenew
                                                </div>
                                                    <div class="card-body body-card">
                                                        30GB + FREE 30GB<br/><br/><br/>
                                                        <p>
                                                            <span class="font-weight-bold" style="color: #ED1B2F;">RM89.00</span>
                                                            <span class="font-weight-bold" style="color: #0F2A51;"> / 30 Days</span>
                                                        </p>
                                                        <a class="#" href="{{ url('/payment') }}">
                                                            <button class="btn btn-radius btn-outline font-weight-bold" style="background-color:white; color:Red; font-size: 12px; width: 112px; padding: 8px; margin-top: -10px;" type="submit">Buy Now</button>
                                                        </a>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>  
                                </div>

                            <div role="tabpanel" class="tab-pane fade" id="call_sms" style="margin-bottom: 199px;">
                                <div  style="color:#0F2A51; font-size: 16px; margin-top: 35px;">Choose Your Calls & SMS Plan</div>
                                <div class="row mb-4" style="margin-top: 10px;">
                                    <div class="col-6 col-md-6 col-lg-3" style="margin-top: 10px; margin-right: -15px">
                                      <div class="card border-light shadow" style=" height: 158px;">
                                        <div class="card-header header-card2"></div>
                                            <div class="card-body body-card">
                                                1000min Calls<br/><br/><br/>
                                                <p>
                                                    <span class="font-weight-bold" style="color: #ED1B2F;">RM3.00</span>
                                                    <span class="font-weight-bold" style="color: #0F2A51;"> / 1 Days</span>
                                                </p>
                                                <a class="#" href="{{ url('/payment') }}">
                                                    <button class="btn btn-radius btn-outline font-weight-bold" style="background-color:white; color:Red; font-size: 12px; width: 112px; padding: 8px; margin-top: -10px;" type="submit">Buy Now</button>
                                                </a>
                                            </div>
                                      </div>
                                    </div>
                                    <div class="col-6 col-md-6 col-lg-3" style="margin-top: 10px; margin-right: -15px">
                                    <div class="card border-light shadow" style=" height: 158px;">
                                        <div class="card-header header-card2"></div>
                                            <div class="card-body body-card">
                                               500min Calls<br/> (All Network)<br/><br/>
                                               <p>
                                                    <span class="font-weight-bold" style="color: #ED1B2F;">RM8.00</span>
                                                    <span class="font-weight-bold" style="color: #0F2A51;"> / 7 Days</span>
                                                </p>
                                                <a class="#" href="{{ url('/payment') }}">
                                                    <button class="btn btn-radius btn-outline font-weight-bold" style="background-color:white; color:Red; font-size: 12px; width: 112px; padding: 8px; margin-top: -10px;" type="submit">Buy Now</button>
                                                </a>
                                            </div>
                                      </div>
                                    </div>
                                    <div class="col-6 col-md-6 col-lg-3" style="margin-top: 10px; margin-right: -15px">
                                      <div class="card border-light shadow" style=" height: 158px;">
                                        <div class="card-header header-card2"></div>
                                            <div class="card-body body-card">
                                                1000min Calls <br/> (All Network+100SMS)<br/><br/>
                                                <p>
                                                    <span class="font-weight-bold" style="color: #ED1B2F;">RM10.00</span>
                                                    <span class="font-weight-bold" style="color: #0F2A51;"> / 7 Days</span>
                                                </p>
                                                <a class="#" href="{{ url('/payment') }}">
                                                    <button class="btn btn-radius btn-outline font-weight-bold" style="background-color:white; color:Red; font-size: 12px; width: 112px; padding: 8px; margin-top: -10px;" type="submit">Buy Now</button>
                                                </a>
                                            </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="roaming" style="margin-bottom: 139px;">
                                <div  style="color:#0F2A51; font-size: 16px; margin-top: 35px;">Choose Your Roaming</div>
                                    <div class="dropdown" style="margin-top: 30px; width: 300px;">
                                        Country: &nbsp;
                                        <button class="btn btn-sm dropdown-toggle dropdown-list" type="button" id="dropdown_country" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="img/addon/download.png">&nbsp;&nbsp;Indonesia &nbsp;&nbsp;<i class="fas fa-angle-down"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdown_country">
                                          <button class="dropdown-item" type="button"><img src="img/addon/download.png">&nbsp;&nbsp;Indonesia </button>
                                          <button class="dropdown-item" type="button"><img style="width: 24px; height: 16px;" src="img/addon/malaysia.png">&nbsp;&nbsp;Malaysia</button>
                                          <button class="dropdown-item" type="button"><img style="width: 24px; height: 16px;" src="img/addon/singapore.png">&nbsp;&nbsp;Singapore</button>
                                        </div>
                                    </div>
                                <div class="row mb-4" style="margin-top: 19px;">
                                    <div class="col-6 col-md-6 col-lg-3" style="margin-top: 10px; margin-right: -15px">
                                      <div class="card border-light shadow" >
                                        <div class="card-header header-card2"></div>
                                            <div class="card-body body-card">
                                                Unlimited Social Messaging<br/><br/><br/>
                                                <p>
                                                    <span class="font-weight-bold" style="color: #ED1B2F;">RM10.00</span>
                                                    <span class="font-weight-bold" style="color: #0F2A51;"> / 1 Days</span>
                                                </p>
                                                <a class="#" href="{{ url('/payment') }}">
                                                    <button class="btn btn-radius btn-outline font-weight-bold" style="background-color:white; color:Red; font-size: 12px; width: 112px; padding: 8px; margin-top: -10px;" type="submit">Buy Now</button>
                                                </a>
                                            </div>
                                      </div>
                                    </div>
                                    <div class="col-6 col-md-6 col-lg-3" style="margin-top: 10px; margin-right: -15px">
                                    <div class="card border-light shadow" >
                                        <div class="card-header header-card2"></div>
                                            <div class="card-body body-card">
                                                2GB Internet +30 min calls<br/><br/><br/>
                                                <p>
                                                    <span class="font-weight-bold" style="color: #ED1B2F;">RM25.00</span>
                                                    <span class="font-weight-bold" style="color: #0F2A51;"> / 3 Days</span>
                                                </p>
                                                <a class="#" href="{{ url('/payment') }}">
                                                    <button class="btn btn-radius btn-outline font-weight-bold" style="background-color:white; color:Red; font-size: 12px; width: 112px; padding: 8px; margin-top: -10px;" type="submit">Buy Now</button>
                                                </a>
                                            </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="idd" style="margin-bottom: 127px;">
                                <div  style="color:#0F2A51; font-size: 16px; margin-top: 35px;">Choose Your IDD Plan</div>
                                <div class="row mb-4" style="margin-top: 19px;">
                                    <div class="col-sm-4 col-md-4 col-lg-4">
                                      <div class="card border-light shadow" style=" height: 228px;">
                                            <div class="card-header header-card2"></div>
                                            <div class="card-body body-card pl-4" style="text-align: left">
                                                <b>60 IDD Mins</b><br/>
                                                IDD Mins: To China, Hong Kong, Indonesia, India, Thailand, Australia, Japan, South Korea, Brunei only<br/><br/><br/>
                                                <p>
                                                    <span class="font-weight-bold" style="color: #ED1B2F;">RM5.00</span>
                                                    <span class="font-weight-bold" style="color: #0F2A51;"> / 7 Days</span>
                                                </p>
                                                <a class="#" href="{{ url('/payment') }}">
                                                    <button class="btn btn-radius btn-outline font-weight-bold" style="background-color:white; color:Red; font-size: 12px; width: 112px; padding: 8px; margin-top: -10px;" type="submit">Buy Now</button>
                                                </a>
                                            </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                      
                </div>
            </div>
        </div>
    </div>  
        @endsection
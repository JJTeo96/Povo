@extends('layout.app')
@section('title', 'Buy Add-Ons')
@section('content')
@include('layout.header')

<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<link href="{{ asset('css/profile.css') }}" rel="stylesheet">
<style>
.btn-radius{
    background: var(--unnamed-color-ed1b2f) 0% 0% no-repeat padding-box;
    border: 1px solid var(--unnamed-color-ed1b2f);
    background: #ED1B2F 0% 0% no-repeat padding-box;
    border: 1px solid #ED1B2F;
    border-radius: 18px;
    opacity: 1;
}
.btn-radius2{
    background: var(--unnamed-color-ed1b2f) 0% 0% no-repeat padding-box;
    border: 1px solid var(--unnamed-color-ed1b2f);
    background:#ED1B2F 0% 0% no-repeat padding-box;
    border: 1px solid #ED1B2F;
    border-radius: 18px;
    opacity: 1;
}
.header-card{
    background-color: #ED1B2F;
    color: white;
    text-align: center; 
    font-size: 12px; 
    height: 34px;
    padding: 0px;
}
.header-card2{
    background-color: #ED1B2F;
    height: 7px;
    padding: 0px;
}
.body-card{
    text-align: center; 
    font-size:14px;
    padding: 10px;
    color: #222222;
}
.dropdown-list{
    background-color: white;
    border-color: grey;
    color: black;
    width: 162.5px;
}
</style>

<div class="col-12 p-5" style="max-width: 1920px; margin: 0 auto; color: #0F2A51;">
        <div class="container">
            <div class="row justify-content-center">
                @include('layout.sidebar')
                <div class="col-8">
        <div class="justify-content-left" style="color:#0F2A51;font-size:30px;font-weight:700; margin-top: -8px;">
                        Buy
                        <span style="color: #ED1B2F;">Add-Ons</span>
                    </div>
                    <div class="tab" role="tabpanel" style="margin-top: 15px;">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#internet" aria-controls="home" role="tab" data-toggle="tab"><img src="img/addon/Wifi.svg">&nbsp;&nbsp;Internet</a></li>
                            <li role="presentation"><a href="#call_sms" aria-controls="profile" role="tab" data-toggle="tab" style="color: grey;"><img src="img/addon/Call.svg">&nbsp;&nbsp;Calls+SMS</a></li>
                            <li role="presentation"><a href="#roaming" aria-controls="messages" role="tab" data-toggle="tab" style="color: grey;"><img src="img/addon/Send.svg">&nbsp;&nbsp;Roaming</a></li>
                            <li role="presentation"><a href="#idd" aria-controls="messages" role="tab" data-toggle="tab" style="color: grey;"><img src="img/addon/IDD-01.svg">&nbsp;&nbsp;IDD</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabs">
                            <div role="tabpanel" class="tab-pane fade show active" id="internet">
                                <div  style="color:#0F2A51; font-size: 16px;">Choose Your Internet Plan</div>
                                <div class="row mb-4" style="margin-top: 19px;">
                                    <div class="col-sm-4" style="margin-right: -15px">
                                      <div class="card border-light shadow" style="width: 212px; height: 186px;">
                                        <div class="card-header header-card">
                                            BigBonus - AutoRenew
                                        </div>
                                            <div class="card-body body-card">
                                                4GB + FREE 30GB + Unlimited Calls<br/>
                                                    <span class="font-weight-bold" style="color: #ED1B2F;">RM28.00</span>
                                                    <span class="font-weight-bold" style="color: #0F2A51;"> / 30 Days</span>
                                                </p>
                                                <button class="btn btn-radius btn-outline font-weight-bold" style="background-color:white; color:Red; font-size: 12px; width: 112px; padding: 8px; margin-top: -20px;" type="submit">Buy Now</button>
                                            </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-4" style="margin-right: -15px">
                                    <div class="card border-light shadow" style="width: 212px; height: 186px;">
                                        <div class="card-header header-card">
                                            BigBonus - AutoRenew
                                        </div>
                                            <div class="card-body body-card">
                                                7GB + FREE 30GB<br/><br/>
                                                    <span class="font-weight-bold" style="color: #ED1B2F;">RM30.00</span>
                                                    <span class="font-weight-bold" style="color: #0F2A51;"> / 30 Days</span>
                                                </p>
                                                <button class="btn btn-radius btn-outline font-weight-bold" style="background-color:white; color:Red; font-size: 12px; width: 112px; padding: 8px; margin-top: -20px;" type="submit">Buy Now</button>
                                            </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-4" style="margin-right: -15px">
                                      <div class="card border-light shadow" style="width: 212px; height: 186px;">
                                        <div class="card-header header-card">
                                            BigBonus - AutoRenew
                                        </div>
                                            <div class="card-body body-card">
                                                8GB + FREE 30GB<br/><br/>
                                                    <span class="font-weight-bold" style="color: #ED1B2F;">RM35.00</span>
                                                    <span class="font-weight-bold" style="color: #0F2A51;"> / 30 Days</span>
                                                </p>
                                                <button class="btn btn-radius btn-outline font-weight-bold" style="background-color:white; color:Red; font-size: 12px; width: 112px; padding: 8px; margin-top: -20px;" type="submit">Buy Now</button>
                                            </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="row mb-4" style="margin-top: 32px;">
                                    <div class="col-sm-4" style="margin-right: -15px">
                                      <div class="card border-light shadow" style="width: 212px; height: 186px;">
                                        <div class="card-header header-card">
                                            BigBonus - AutoRenew
                                        </div>
                                            <div class="card-body body-card">
                                                9GB + FREE 30GB + Unlimited Calls<br/>
                                                    <span class="font-weight-bold" style="color: #ED1B2F;">RM40.00</span>
                                                    <span class="font-weight-bold" style="color: #0F2A51;"> / 30 Days</span>
                                                </p>
                                                <button class="btn btn-radius btn-outline font-weight-bold" style="background-color:white; color:Red; font-size: 12px; width: 112px; padding: 8px; margin-top: -20px;" type="submit">Buy Now</button>
                                            </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-4" style="margin-right: -15px">
                                    <div class="card border-light shadow" style="width: 212px; height: 186px;">
                                        <div class="card-header header-card">
                                            BigBonus - AutoRenew
                                        </div>
                                            <div class="card-body body-card">
                                                12GB + FREE 30GB + Unlimited Calls<br/>
                                                    <span class="font-weight-bold" style="color: #ED1B2F;">RM50.00</span>
                                                    <span class="font-weight-bold" style="color: #0F2A51;"> / 30 Days</span>
                                                </p>
                                                <button class="btn btn-radius btn-outline font-weight-bold" style="background-color:white; color:Red; font-size: 12px; width: 112px; padding: 8px; margin-top: -20px;" type="submit">Buy Now</button>
                                            </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-4" style="margin-right: -15px">
                                      <div class="card border-light shadow" style="width: 212px; height: 186px;">
                                        <div class="card-header header-card">
                                            BigBonus - AutoRenew
                                        </div>
                                            <div class="card-body body-card">
                                                30GB + FREE 30GB<br/><br/>
                                                    <span class="font-weight-bold" style="color: #ED1B2F;">RM89 .00</span>
                                                    <span class="font-weight-bold" style="color: #0F2A51;"> / 30 Days</span>
                                                </p>
                                                <button class="btn btn-radius btn-outline font-weight-bold" style="background-color:white; color:Red; font-size: 12px; width: 112px; padding: 8px; margin-top: -20px;" type="submit">Buy Now</button>
                                            </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>

                            <div role="tabpanel" class="tab-pane fade" id="call_sms" style="margin-bottom: 199px;">
                                <div  style="color:#0F2A51; font-size: 16px;">Choose Your Calls & SMS Plan</div>
                                <div class="row mb-4" style="margin-top: 19px;">
                                    <div class="col-sm-4" style="margin-right: -15px">
                                      <div class="card border-light shadow" style="width: 212px; height: 158px;">
                                        <div class="card-header header-card2"></div>
                                            <div class="card-body body-card">
                                                1000min Calls<br/><br/>
                                                    <span class="font-weight-bold" style="color: #ED1B2F;">RM3.00</span>
                                                    <span class="font-weight-bold" style="color: #0F2A51;"> / 1 Days</span>
                                                </p>
                                                <button class="btn btn-radius btn-outline font-weight-bold" style="background-color:white; color:Red; font-size: 12px; width: 112px; padding: 8px; margin-top: -20px;" type="submit">Buy Now</button>
                                            </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-4" style="margin-right: -15px">
                                    <div class="card border-light shadow" style="width: 212px; height: 158px;">
                                        <div class="card-header header-card2"></div>
                                            <div class="card-body body-card">
                                               500min Calls<br/> (All Network)<br/>
                                                    <span class="font-weight-bold" style="color: #ED1B2F;">RM8.00</span>
                                                    <span class="font-weight-bold" style="color: #0F2A51;"> / 7 Days</span>
                                                </p>
                                                <button class="btn btn-radius btn-outline font-weight-bold" style="background-color:white; color:Red; font-size: 12px; width: 112px; padding: 8px; margin-top: -20px;" type="submit">Buy Now</button>
                                            </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-4" style="margin-right: -15px">
                                      <div class="card border-light shadow" style="width: 212px; height: 158px;">
                                        <div class="card-header header-card2"></div>
                                            <div class="card-body body-card">
                                                1000min Calls <br/> (All Network+100SMS)<br/>
                                                    <span class="font-weight-bold" style="color: #ED1B2F;">RM10.00</span>
                                                    <span class="font-weight-bold" style="color: #0F2A51;"> / 7 Days</span>
                                                </p>
                                                <button class="btn btn-radius btn-outline font-weight-bold" style="background-color:white; color:Red; font-size: 12px; width: 112px; padding: 8px; margin-top: -20px;" type="submit">Buy Now</button>
                                            </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="roaming" style="margin-bottom: 137px;">
                                <div  style="color:#0F2A51; font-size: 16px;">Choose Your Roaming</div>
                                    <div class="dropdown" style="margin-top: 30px; width: 300px;">
                                        Country: &nbsp;
                                        <button class="btn btn-sm dropdown-toggle dropdown-list" type="button" id="dropdown_country" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="img/addon/download.png">&nbsp;&nbsp;Indonesia
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdown_country">
                                          <button class="dropdown-item" type="button"><img src="img/addon/download.png">&nbsp;&nbsp;Indonesia</button>
                                          <button class="dropdown-item" type="button"><img style="width: 24px; height: 16px;" src="img/addon/malaysia.png">&nbsp;&nbsp;Malaysia</button>
                                          <button class="dropdown-item" type="button"><img style="width: 24px; height: 16px;" src="img/addon/singapore.png">&nbsp;&nbsp;Singapore</button>
                                        </div>
                                    </div>
                                <div class="row mb-4" style="margin-top: 19px;">
                                    <div class="col-sm-4" style="margin-right: -15px">
                                      <div class="card border-light shadow" style="width: 212px; height: 158px;">
                                        <div class="card-header header-card2"></div>
                                            <div class="card-body body-card">
                                                Unlimited Social Messaging<br/><br/>
                                                    <span class="font-weight-bold" style="color: #ED1B2F;">RM10.00</span>
                                                    <span class="font-weight-bold" style="color: #0F2A51;"> / 1 Days</span>
                                                </p>
                                                <button class="btn btn-radius btn-outline font-weight-bold" style="background-color:white; color:Red; font-size: 12px; width: 112px; padding: 8px; margin-top: -20px;" type="submit">Buy Now</button>
                                            </div>
                                      </div>
                                    </div>
                                    <div class="col-sm-4" style="margin-right: -15px">
                                    <div class="card border-light shadow" style="width: 212px; height: 158px;">
                                        <div class="card-header header-card2"></div>
                                            <div class="card-body body-card">
                                                2GB Internet +30 min calls<br/><br/>
                                                    <span class="font-weight-bold" style="color: #ED1B2F;">RM25.00</span>
                                                    <span class="font-weight-bold" style="color: #0F2A51;"> / 3 Days</span>
                                                </p>
                                                <button class="btn btn-radius btn-outline font-weight-bold" style="background-color:white; color:Red; font-size: 12px; width: 112px; padding: 8px; margin-top: -20px;" type="submit">Buy Now</button>
                                            </div>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="idd" style="margin-bottom: 129px;">
                                <div  style="color:#0F2A51; font-size: 16px;">Choose Your IDD Plan</div>
                                <div class="row mb-4" style="margin-top: 19px;">
                                    <div class="col-sm-4" style="margin-right: -15px">
                                      <div class="card border-light shadow" style="width: 274px; height: 228px;">
                                        <div class="card-header header-card2"></div>
                                            <div class="card-body body-card">
                                                <b>60 IDD Mins</b><br/>
                                                IDD Mins: To China, Hong Kong, Indonesia, India, Thailand, Australia, Japan, South Korea, Brunei only<br/>
                                                    <span class="font-weight-bold" style="color: #ED1B2F;">RM5.00</span>
                                                    <span class="font-weight-bold" style="color: #0F2A51;"> / 7 Days</span>
                                                </p>
                                                <button class="btn btn-radius btn-outline font-weight-bold" style="background-color:white; color:Red; font-size: 12px; width: 112px; padding: 8px; margin-top: -20px;" type="submit">Buy Now</button>
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
        @include('layout.footer')
        @endsection
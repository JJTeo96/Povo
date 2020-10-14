@extends('layout.app')
@section('title', ' Dashboard')
@section('content')
@include('layout.header')

<style>
.card-hint{
    border-top:1px solid #EDEDED;
}

.icons8-checked { 
    position: absolute;
    margin-top: 2px;
    margin-left: 2px;
    display: inline-block;
    width: 16px;
    height: 16px;
    background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4Igp3aWR0aD0iMzIiIGhlaWdodD0iMzIiCnZpZXdCb3g9IjAgMCAyMjYgMjI2IgpzdHlsZT0iIGZpbGw6IzAwMDAwMDsiPjxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0ibm9uemVybyIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIHN0cm9rZS1saW5lY2FwPSJidXR0IiBzdHJva2UtbGluZWpvaW49Im1pdGVyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHN0cm9rZS1kYXNoYXJyYXk9IiIgc3Ryb2tlLWRhc2hvZmZzZXQ9IjAiIGZvbnQtZmFtaWx5PSJub25lIiBmb250LXdlaWdodD0ibm9uZSIgZm9udC1zaXplPSJub25lIiB0ZXh0LWFuY2hvcj0ibm9uZSIgc3R5bGU9Im1peC1ibGVuZC1tb2RlOiBub3JtYWwiPjxwYXRoIGQ9Ik0wLDIyNnYtMjI2aDIyNnYyMjZ6IiBmaWxsPSJub25lIj48L3BhdGg+PGcgZmlsbD0iIzJlY2M3MSI+PHBhdGggZD0iTTExMywyMS4xODc1Yy01MC44NDQ0OCwwIC05MS44MTI1LDQwLjk2ODAyIC05MS44MTI1LDkxLjgxMjVjMCw1MC44NDQ0OCA0MC45NjgwMiw5MS44MTI1IDkxLjgxMjUsOTEuODEyNWM1MC44NDQ0OCwwIDkxLjgxMjUsLTQwLjk2ODAyIDkxLjgxMjUsLTkxLjgxMjVjMCwtOS44NzY0NiAtMS4zMjQyMiwtMTkuNzI1MzQgLTQuODU1NDcsLTI4LjkxMjExbC0xMS40NzY1NiwxMS4yNTU4NmMxLjQwNjk4LDUuNjU1NTIgMi4yMDcwMywxMS4zMTEwNCAyLjIwNzAzLDE3LjY1NjI1YzAsNDMuMDkyMjkgLTM0LjU5NTIxLDc3LjY4NzUgLTc3LjY4NzUsNzcuNjg3NWMtNDMuMDkyMjgsMCAtNzcuNjg3NSwtMzQuNTk1MjEgLTc3LjY4NzUsLTc3LjY4NzVjMCwtNDMuMDkyMjggMzQuNTk1MjIsLTc3LjY4NzUgNzcuNjg3NSwtNzcuNjg3NWMyMS4xODc1LDAgNDAuMjIzMTUsOC40NDE5IDUzLjYzMDg2LDIxLjg0OTYxbDkuOTMxNjQsLTkuOTMxNjRjLTE2LjI0OTI3LC0xNi4yNDkyNyAtMzguODQzNzUsLTI2LjA0Mjk3IC02My41NjI1LC0yNi4wNDI5N3pNMTkyLjY3MzgzLDUxLjQyMzgzbC03OS42NzM4Myw3OS42NzM4M2wtMzAuMjM2MzMsLTMwLjIzNjMzbC0xMC4xNTIzNCwxMC4xNTIzNGwzNS4zMTI1LDM1LjMxMjVsNS4wNzYxNyw0Ljg1NTQ3bDUuMDc2MTcsLTQuODU1NDdsODQuNzUsLTg0Ljc1eiI+PC9wYXRoPjwvZz48L2c+PC9zdmc+') 50% 50% no-repeat;
    background-size: 100%; 
opacity: 1;
}
.btn-radius{
    background: var(--unnamed-color-ed1b2f) 0% 0% no-repeat padding-box;
    border: 1px solid var(--unnamed-color-ed1b2f);
    background: #ED1B2F 0% 0% no-repeat padding-box;
    border: 1px solid #ED1B2F;
    border-radius: 18px;
    opacity: 1;
}
</style>

<div class="col-12 p-5" style="max-width: 1920px; margin: 0 auto; color: #0F2A51;">
        <div class="container">
            <div class="row justify-content-center">
                @include('layout.sidebar')
                <div class="col-8">
                    <div class="justify-content-left font-weight-bolder" style="color:#ED1B2F;font-size:30px; margin-top: -8px;">
                        Hello,
                        <span style="color: #0F2A51;">Tiana Rosser</span>
                    </div>
                    <div class="row mb-4" style="margin-top: 35px;">
                        <div class="col-sm-4" style="margin-right: -15px">
                          <div class="card shadow" style="width: 212px; height: 155px;">
                            <div class="card-body">
                                <span style="font-size: 14px;">Account number:</span>
                                <p class="font-weight-bold" style="font-size: 25px">A1.12550012</p>
                                    <div class="#" style="font-size: 14px; margin-top: 41px;">Account Status:
                                    <span class="font-weight-bold" style="color: #0F2A51;">Active</span>
                                    <div class="icons8-checked"></div>
                                    </div>                           
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4" style="margin-right: -15px">
                            <div class="card shadow" style="width: 212px; height: 155px;">
                              <div class="card-body">
                                  <span style="font-size: 14px;">Mobile number:</span>
                                  <p class="font-weight-bold" style="font-size: 25px">0123456789</p>                       
                              </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card shadow" style="width: 369px;  height: 155px;">
                              <div class="card-body">
                                  <span style="font-size: 14px;">Current Balance</span>
                                  <p class="font-weight-bold text-danger" style="font-size: 25px">MYR 51.57
                                    <span class="float-right">
                                      <a class="#" href="{{ url('/reload') }}">
                                        <button class="btn btn-radius" style="background-color:red; color:white; font-size: 12px; width: 136px; padding: 8px; margin-top: -30px;" type="submit">Reload</button>
                                      </a>
                                    </span>
                                  </p>
                                  
                                      <div class="#" style="font-size: 14px; margin-top: 41px;">Dude Date:
                                      <span class="font-weight-bold" style="color: #0F2A51;"> 04/09/2020</span>
                                      <span class="float-right">
                                          <a href="#" class="font-weight-bold" style="color: #00AEEF; font-size:14px;">View Reload History</a>
                                    </span>
                                      </div>                           
                              </div>
                            </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-4">
                            <div class="card shadow" style="width: 449px; height:310px">
                              <div class="card-body">
                                <span style="font-size: 14px;">My Plan:</span>
                                  <p class="font-weight-bold" style="font-size: 16px">Best Prepaid v1
                                    <span class="float-right">
                                      <a class="#" href="{{ url('/upgrade_plan') }}">
                                        <button class="btn btn-radius btn-outline" style="background-color:white; color:Red; font-size: 12px; width: 136px; padding: 8px; margin-top: -30px;" type="submit">Upgrade plan</button>
                                      </a>
                                    </span>
                                    </p>
                                <div class="card-hint">
                                    <div style="width: 65%">
                                    <div style="margin-top: 20px;">Data Usage: 17.5GB/ 20GB</div>
                                    <div class="progress">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 85%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div style="margin-top: 20px;">Talk Time: 300min</div>
                                    <div class="progress">
                                        <div class="progress-bar progress-barbar" role="progressbar" style="width: 100%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div style="margin-top: 20px;">SMS Left: 300</div>
                                    <div class="progress">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 65%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
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
@extends('layout.app')
@section('title', ' Dashboard')
@section('content')
@include('layout.header')
<style>
    .card-title{
        font-size:22px;
    }
    .card-text{
        font-size: 14px;
    }
    .card-hint{
        border-top:1px solid #EDEDED;
    }
    .custom-control-label::before {
        background-color: #ED1B2F;
}
.icons8-checked { 
display: inline-block;
width: 15px;
height: 15px;
background: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHg9IjBweCIgeT0iMHB4Igp3aWR0aD0iMzIiIGhlaWdodD0iMzIiCnZpZXdCb3g9IjAgMCAyMjYgMjI2IgpzdHlsZT0iIGZpbGw6IzAwMDAwMDsiPjxnIGZpbGw9Im5vbmUiIGZpbGwtcnVsZT0ibm9uemVybyIgc3Ryb2tlPSJub25lIiBzdHJva2Utd2lkdGg9IjEiIHN0cm9rZS1saW5lY2FwPSJidXR0IiBzdHJva2UtbGluZWpvaW49Im1pdGVyIiBzdHJva2UtbWl0ZXJsaW1pdD0iMTAiIHN0cm9rZS1kYXNoYXJyYXk9IiIgc3Ryb2tlLWRhc2hvZmZzZXQ9IjAiIGZvbnQtZmFtaWx5PSJub25lIiBmb250LXdlaWdodD0ibm9uZSIgZm9udC1zaXplPSJub25lIiB0ZXh0LWFuY2hvcj0ibm9uZSIgc3R5bGU9Im1peC1ibGVuZC1tb2RlOiBub3JtYWwiPjxwYXRoIGQ9Ik0wLDIyNnYtMjI2aDIyNnYyMjZ6IiBmaWxsPSJub25lIj48L3BhdGg+PGcgZmlsbD0iIzJlY2M3MSI+PHBhdGggZD0iTTExMywyMS4xODc1Yy01MC44NDQ0OCwwIC05MS44MTI1LDQwLjk2ODAyIC05MS44MTI1LDkxLjgxMjVjMCw1MC44NDQ0OCA0MC45NjgwMiw5MS44MTI1IDkxLjgxMjUsOTEuODEyNWM1MC44NDQ0OCwwIDkxLjgxMjUsLTQwLjk2ODAyIDkxLjgxMjUsLTkxLjgxMjVjMCwtOS44NzY0NiAtMS4zMjQyMiwtMTkuNzI1MzQgLTQuODU1NDcsLTI4LjkxMjExbC0xMS40NzY1NiwxMS4yNTU4NmMxLjQwNjk4LDUuNjU1NTIgMi4yMDcwMywxMS4zMTEwNCAyLjIwNzAzLDE3LjY1NjI1YzAsNDMuMDkyMjkgLTM0LjU5NTIxLDc3LjY4NzUgLTc3LjY4NzUsNzcuNjg3NWMtNDMuMDkyMjgsMCAtNzcuNjg3NSwtMzQuNTk1MjEgLTc3LjY4NzUsLTc3LjY4NzVjMCwtNDMuMDkyMjggMzQuNTk1MjIsLTc3LjY4NzUgNzcuNjg3NSwtNzcuNjg3NWMyMS4xODc1LDAgNDAuMjIzMTUsOC40NDE5IDUzLjYzMDg2LDIxLjg0OTYxbDkuOTMxNjQsLTkuOTMxNjRjLTE2LjI0OTI3LC0xNi4yNDkyNyAtMzguODQzNzUsLTI2LjA0Mjk3IC02My41NjI1LC0yNi4wNDI5N3pNMTkyLjY3MzgzLDUxLjQyMzgzbC03OS42NzM4Myw3OS42NzM4M2wtMzAuMjM2MzMsLTMwLjIzNjMzbC0xMC4xNTIzNCwxMC4xNTIzNGwzNS4zMTI1LDM1LjMxMjVsNS4wNzYxNyw0Ljg1NTQ3bDUuMDc2MTcsLTQuODU1NDdsODQuNzUsLTg0Ljc1eiI+PC9wYXRoPjwvZz48L2c+PC9zdmc+') 50% 50% no-repeat;
background-size: 100%; 
}
</style>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-3">
                    <div class="card" style="width: 240px;">
                        <ul class="list-group list-group-flush">
                          <li class="list-group-item "><svg width="16px" height="16px" viewBox="0 2 16 16" class="bi bi-house-door" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
                            <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
                            </svg> &nbsp; Dashboard
                          </li>
                          <li class="list-group-item"><svg width="1em" height="1em" viewBox="0 2 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                            </svg> &nbsp; My profile
                          </li>
                          <li class="list-group-item"><svg width="1em" height="1em" viewBox="0 2 16 16" class="bi bi-bucket" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2.522 5H2a.5.5 0 0 0-.494.574l1.372 9.149A1.5 1.5 0 0 0 4.36 16h7.278a1.5 1.5 0 0 0 1.483-1.277l1.373-9.149A.5.5 0 0 0 14 5h-.522A5.5 5.5 0 0 0 2.522 5zm1.005 0h8.945a4.5 4.5 0 0 0-8.945 0zm9.892 1H2.581l1.286 8.574A.5.5 0 0 0 4.36 15h7.278a.5.5 0 0 0 .494-.426L13.42 6z"/>
                          </svg> &nbsp; Buy Add-Ons
                          </li>
                          <li class="list-group-item"><svg width="1em" height="1em" viewBox="0 2 16 16" class="bi bi-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                            </svg> &nbsp; My membership
                          </li>
                          <li class="list-group-item">
                            <svg width="1em" height="1em" viewBox="0 2 16 16" class="bi bi-box-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                                <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                              </svg> &nbsp; Logout
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-7">
                    <div class="justify-content-left" style="color:#ED1B2F;font-size:30px;">
                        Hello,
                        <span style="color: #0F2A51;">Tiana Rosser</span>
                    </div>
                    <div class="row mb-4">
                        <div class="col-sm-4">
                          <div class="card">
                            <div class="card-body">
                                <span style="font-size: 10px;">Account number:</span>
                                <p class="font-weight-bold" style="font-size: 20px">A1.12550012</p>
                                    <div class="mt-4" style="font-size: 10px;">Account Status:
                                    <span class="font-weight-bold" style="color: #0F2A51;">Active</span>
                                    <div class="icons8-checked"></div>
                                    </div>                           
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                              <div class="card-body">
                                <span class="card-title"><b>RM10.00</b></span>
                                <p class="card-text mb-3">Validity for 10 days.</p>
                                <div class="card-hint">free 1 days</div>                           
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="card">
                              <div class="card-body">
                                <span class="card-title"><b>RM10.00</b></span>
                                <p class="card-text mb-3">Validity for 10 days.</p>
                                <div class="card-hint">free 1 days</div>                           
                              </div>
                            </div>
                          </div>
                      </div>
                      <div class="row">
                        <div class="col-sm-4">
                            <div class="card">
                              <div class="card-body">
                                <span class="card-title"><b>RM10.00</b></span>
                                <p class="card-text mb-3">Validity for 10 days.</p>
                                <div class="card-hint">free 1 days</div>                           
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="card">
                              <div class="card-body">
                                <span class="card-title"><b>RM10.00</b></span>
                                <p class="card-text mb-3">Validity for 10 days.</p>
                                <div class="card-hint">free 1 days</div>                           
                              </div>
                            </div>
                          </div>
                      </div> 
                </div>
            </div>
        </div>
        
        
        @include('layout.footer')
        @endsection
        

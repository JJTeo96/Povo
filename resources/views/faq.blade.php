@extends('layout.app')
@section('title', ' FAQ')
@section('content')

<style>
.faq-form{
    -webkit-transition: border-color .15s ease-in-out,-webkit-box-shadow .15s ease-in-out; 
    -o-transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    /* transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out; */
    /* transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out,-webkit-box-shadow .15s ease-in-out; */
    outline: 0;
    -webkit-box-shadow: none;
    box-shadow: none;
    border: none;
    border-bottom: 1px solid #ced4da;
    -webkit-border-radius: 0;
    border-radius: 0;
    -webkit-box-sizing: content-box;
    box-sizing: content-box;
    background-color: transparent;
}
.row-bg{
        background-attachment:initial;
        background-position:top center;
        background-repeat: no-repeat;
        background-size:cover;
    }
</style>

<div class="col-12 p-5">
    <h1 class="text-center font-weight-bold" style="margin-bottom: -50px;">
        <span style="color: #0F2A51;">PAVOCOMMS</span>
        <span style="color: red; ">FAQ'S</span>
    </h1>
</div>

<div class="col-12 p-5" id="accordion" style="margin-top: -70px; max-width: 1000px; margin: 0 auto; color: #0F2A51;">
    <div class="card shadow" style="margin-bottom: 5px;">
      <div class="card-header" id="headingOne">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed font-weight-bold text-danger firstBtn" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <img class="redBtn" src="https://img.icons8.com/small/25/000000/ED1B2F/circled-chevron-up.png"/>&nbsp;
            {{-- <img class="blueBtn" src="https://img.icons8.com/small/25/000000/circled-chevron-down.png"/>&nbsp; --}}
            How do I see my Pavocomms billing history, weekly or monthly invoice?
          </button>
        </h5>
      </div>
  
      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
        <div class="card-body">
            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
      </div>
    </div>
    <div class="card shadow" style="margin-bottom: 5px;">
      <div class="card-header" id="headingTwo">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed font-weight-bold" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <img src="https://img.icons8.com/small/25/000000/circled-chevron-down.png"/>&nbsp;
            <span style="color: #0F2A51;">Can I pay for Pavocomms with cash?</span>
          </button>
        </h5>
      </div>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
        <div class="card-body">
          Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        
        </div>
      </div>
    </div>
    <div class="card shadow" style="margin-bottom: 5px;">
      <div class="card-header" id="headingThree">
        <h5 class="mb-0">
          <button class="btn btn-link collapsed font-weight-bold" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
            <img src="https://img.icons8.com/small/25/000000/circled-chevron-down.png"/>&nbsp;
            <span style="color: #0F2A51;">Why isn't my payment method accepted?</span>
          </button>
        </h5>
      </div>
      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
        <div class="card-body">
            Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
        </div>
      </div>
    </div>

    <div class="card shadow" style="margin-bottom: 5px;">
        <div class="card-header" id="headingFour">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed font-weight-bold" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                <img src="https://img.icons8.com/small/25/000000/circled-chevron-down.png"/>&nbsp;
                <span style="color: #0F2A51;">Why was I charged earlier than excepted?</span>
            </button>
          </h5>
        </div>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
          <div class="card-body">
              Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </div>
        </div>
      </div>
      <div class="card shadow">
        <div class="card-header" id="headingFive">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed font-weight-bold" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                <img src="https://img.icons8.com/small/25/000000/circled-chevron-down.png"/>&nbsp;
                <span style="color: #0F2A51;">How do I cancel Pavocomms Subscription?</span>
            </button>
          </h5>
        </div>
        <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
          <div class="card-body">
              Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
          </div>
        </div>
      </div>
  </div>


    <div class="col-12 p-5 text-center row-bg" style="background-image: linear-gradient(rgb(4, 26, 57, 0.95), rgb(4, 26, 57, 0.95)), url({{ asset('img/faq/contact-bg.png')}})">
      <div class="container">  
        <div class="d-flex justify-content-center mt-4">
              <h1 style="color: white;">Have a Question?</h1>
          </div>
          <p class="d-flex justify-content-center mt-4">
          Ask here if need any special Queries, Custom Plans
          </p>
          
          <form action="#">
              <div class="row d-flex justify-content-center" >
                  <div class="md-form col-sm-4 mt-4">
                    <div class="mr-0 mr-sm-4 mr-md-2">
                      <input style="background-color: transparent;" type="text" id="name" class="form-control faq-form font-weight-bold" placeholder="Name">
                      <br>
                      <input style="background-color: transparent;" type="text" id="email" class="form-control faq-form font-weight-bold" placeholder="Email">
                      <br>
                      <input style="background-color: transparent;" type="text" id="phone" class="form-control faq-form font-weight-bold" placeholder="Phone">
                      <br>
                    </div>
                  </div>
                  <div class="col-sm-4 mt-4">
                      <input style="background-color: transparent;" type="text" id="title" class="form-control faq-form font-weight-bold" placeholder="Title">
                      <br>
                      <input style="background-color: transparent;" type="text" id="your_message" class="form-control faq-form font-weight-bold" placeholder="Your Message">
                  </div>
              </div>
              <button class="btn col-sm-4 mt-5" style="background-color:red; color:white; font-size: 12px; max-width: 150px; padding:15px;" type="submit">SEND MESSAGE</button>
          </form>
    </div>
  </div>
    <div class="container">
        <div class="col-12" style="margin-top: 50px; color: #0F2A51;">
            <div class="row no-gutters" style="max-width: 1100px; margin: 0 auto;">
                <div class="col-sm-4 d-flex justify-content-end" style="margin-bottom: 50px;">
                    <div class="text-center font-weight-bold m-4 px-4">
                        <img src="img/faq/Mask Group 3.svg">
                        <p style="font-size: 20px; margin-top:20px;">
                            No Contracts
                        </p>
                        <p style="margin-top:20px;">
                            If you don't love the service, cancel without any fees or penalties.
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 d-flex justify-content-end" style="margin-bottom: 50px">
                    <div class="text-center font-weight-bold m-4 px-4">
                        <img src="img/faq/Mask Group 2.svg">
                        <p style="font-size: 20px; margin-top:20px;">
                            Support
                        </p>
                        <p style="margin-top:20px;">
                            Round-the-clock technicians ready to help online or by phone.
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 d-flex justify-content-end" style="margin-bottom: 50px">
                    <div class="text-center font-weight-bold m-4 px-4">
                        <img src="img/faq/Mask Group 1.svg">
                        <p style="font-size: 20px; margin-top:20px;">
                            Live Chat
                        </p>
                        <p style="margin-top:20px;">
                            A 100% fiber-optic network backed by real-time fiber monitoring.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

        @endsection

{{-- @push('scripts')
    <script>
       $( ".firstBtn" ).on( "click", function() {
            $(".redBtn").hide('<img src="https://img.icons8.com/small/25/000000/ED1B2F/circled-chevron-up.png"/>&nbsp;');
            $(".blueBtn").show('<img src="https://img.icons8.com/small/25/000000/circled-chevron-down.png"/>&nbsp;');
        });
       $( ".firstBtn" ).on( "click", function() {
            $(".blueBtn").hide('<img src="https://img.icons8.com/small/25/000000/circled-chevron-down.png"/>&nbsp;');
            $(".redBtn").show('<img src="https://img.icons8.com/small/25/000000/ED1B2F/circled-chevron-up.png"/>&nbsp;');

        });
    </script>
@endpush --}}
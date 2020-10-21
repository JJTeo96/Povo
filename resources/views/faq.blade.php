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
form .form-control:focus{
  /* border-color: #ced4da; */
  box-shadow: none;
}
.row-bg{
        background-attachment:initial;
        background-position:top center;
        background-repeat: no-repeat;
        background-size:cover;
    }

.accordion .card {
	background: none;
	border: none;
}
.accordion .card .card-header {
	background: none;
	border: none;
	padding: .4rem 1rem;
	font-family: "Roboto", sans-serif;
}
.accordion .card-header h2 span {
	float: left;
	margin-top: 10px;
}
.accordion .card-header .btn {
	color: #2f2f31;
	font-size: 1.04rem;
	text-align: left;
	position: relative;
	font-weight: 500;
	padding-left: 2rem;
}
.accordion .card-header i {
	font-size: 1.2rem;
	font-weight: bold;
	position: absolute;
	left: 0;
	top: 9px;
}
.accordion .card-header .btn:hover {
	color: red;
}
.accordion .card-body {
	color: #324353;
	padding: 0.5rem 3rem;
}
.page-title {
	margin: 3rem 0 3rem 1rem;
	font-family: "Roboto", sans-serif;
	position: relative;
}
.page-title::after {
	content: "";
	width: 80px;
	position: absolute;
	height: 3px;
	border-radius: 1px;
	background: #73bb2b;
	left: 0;
	bottom: -15px;
}
.accordion .highlight .btn {
	color: #74bd30;
}
.accordion .highlight i {
	transform: rotate(180deg);
}
.rotate1 .rotate2 .rotate3 .rotate4{
    -moz-transition: all 0.2s linear;
    -webkit-transition: all 0.2s linear;
    transition: all 0.2s linear;
}

.rotate1.down,.rotate2.down,.rotate3.down,.rotate4.down{
    -ms-transform: rotate(180deg);
    -moz-transform: rotate(180deg);
    -webkit-transform: rotate(180deg);
    transform: rotate(180deg);
}
</style>

<div class="col-12 p-5">
    <h1 class="text-center font-weight-bold" style="margin-bottom: -50px;">
        <span style="color: #0F2A51;">PAVOCOMMS</span>
        <span style="color: red; ">FAQ'S</span>
    </h1>
</div>

<div class="col-12 pt-5 pr-0 pl-0 " id="accordion" style="margin-top: -70px; max-width: 1000px; margin: 0 auto; color: #0F2A51;">
{{-- Accordion --}}
  <div class="container-lg p-0">
    <div class="row no-gutters">
      <div class="col-lg-12 pr-0 pl-0">
        <div class="accordion" id="accordionExample">
          <div class="card shadow pb-2 mb-2" >
            <div class="card-header" id="headingOne">
              <h2 class="clearfix mb-0">
                <a class="btn btn-link rotateBtn1 text-danger" id="down" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><i class="fa fa-chevron-circle-down rotate1"></i>  How do I see my Pavocomms billing history, weekly or monthly invoice?</a>									
              </h2>
            </div>
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
            </div>
          </div>
          <div class="card shadow pb-2 mb-2">
            <div class="card-header" id="headingTwo">
              <h2 class="mb-0">
                <a class="btn btn-link rotateBtn2 collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><i class="fa fa-chevron-circle-down rotate2"></i> Can I pay for Pavocomms with cash?</a>
              </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="card-body">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
            </div>
          </div>
          <div class="card shadow pb-2 mb-2">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <a class="btn btn-link rotateBtn3 collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><i class="fa fa-chevron-circle-down rotate3"></i> Why isn't my payment method accepted?</a>                     
              </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body"> Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
            </div>
          </div>
          <div class="card shadow pb-2 mb-5 ">
            <div class="card-header" id="headingFour">
              <h2 class="mb-0">
                <a class="btn btn-link rotateBtn4 collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"><i class="fa fa-chevron-circle-down rotate4"></i> How do I cancel Pavocomms Subscription?</a>                               
              </h2>
            </div>
            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
              <div class="card-body">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
{{-- End Accordion --}}
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
                  <div class="col-lg-6 col-sm-12 col-md-12 d-flex justify-content-end">
                    <div class="md-form col-sm-12 col-md-12 col-lg-6">
                      <div class="mr-0 ">
                        <input style="background-color: transparent;" type="text" id="name" class="form-control faq-form font-weight-bold" placeholder="Name">
                        <br>
                        <input style="background-color: transparent;" type="text" id="email" class="form-control faq-form font-weight-bold" placeholder="Email">
                        <br>
                        <input style="background-color: transparent;" type="text" id="phone" class="form-control faq-form font-weight-bold" placeholder="Phone">
                        <br>
                      </div>
                    </div>
                  </div>

                  <div class="col-lg-6 col-sm-12 col-md-12">
                    <div class="col-sm-12 col-md-12 col-lg-6">
                      <input style="background-color: transparent;" type="text" id="title" class="form-control faq-form font-weight-bold" placeholder="Title">
                      <br>
                      <input style="background-color: transparent;" type="text" id="your_message" class="form-control faq-form font-weight-bold" placeholder="Your Message">
                    </div>
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
                        <p style="font-size: 25px; margin-top:20px;">
                            No Contracts
                        </p>
                        <p style="margin-top:20px; font-size: 16px;">
                            If you don't love the service, cancel without any fees or penalties.
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 d-flex justify-content-end" style="margin-bottom: 50px">
                    <div class="text-center font-weight-bold m-4 px-4">
                        <img src="img/faq/Mask Group 2.svg">
                        <p style="font-size: 25px; margin-top:20px;">
                            Support
                        </p>
                        <p style="margin-top:20px; font-size: 16px;">
                            Round-the-clock technicians ready to help online or by phone.
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 d-flex justify-content-end" style="margin-bottom: 50px">
                    <div class="text-center font-weight-bold m-4 px-4">
                        <img src="img/faq/Mask Group 1.svg">
                        <p style="font-size: 25px; margin-top:20px;">
                            Live Chat
                        </p>
                        <p style="margin-top:20px; font-size: 16px;">
                            A 100% fiber-optic network backed by real-time fiber monitoring.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

        @endsection

@push('scripts')
<script>
  $(function() {
    $(".rotateBtn1").on('click', function() {   
       $(".rotate1").toggleClass("down");
       $(".btn-link").removeClass('text-danger');
       $(".rotate2").removeClass('down');
       $(".rotate3").removeClass('down');
       $(".rotate4").removeClass('down');
       $(this).addClass('text-danger');
    });
});
$(function() {
    $(".rotateBtn2").on('click', function() {   
       $(".rotate2").toggleClass("down");
       $(".btn-link").removeClass('text-danger');
       $(".rotate1").removeClass('down');
       $(".rotate3").removeClass('down');
       $(".rotate4").removeClass('down');
       $(this).addClass('text-danger');
    });
});
$(function() {
    $(".rotateBtn3").on('click', function() {   
       $(".rotate3").toggleClass("down");
       $(".btn-link").removeClass('text-danger');
       $(".rotate2").removeClass('down');
       $(".rotate1").removeClass('down');
       $(".rotate4").removeClass('down');
       $(this).addClass('text-danger');
    });
});
$(function() {
    $(".rotateBtn4").on('click', function() {   
       $(".rotate4").toggleClass("down");
       $(".btn-link").removeClass('text-danger');
       $(".rotate2").removeClass('down');
       $(".rotate3").removeClass('down');
       $(".rotate1").removeClass('down');
       $(this).addClass('text-danger');
    });
});
</script>
@endpush
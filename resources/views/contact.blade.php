@extends('layouts.app')
<style>

@media (max-width: 85em) {
.loksa {
display: none;
}


}


.loksa {
  color:#0066ff
  ;  text-align: center;  margin-right:530px;

}

.popup {
    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* The actual popup */
.popup .popuptext {
    visibility: hidden;
    width: 160px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 8px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;}
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
}






</style>
<script>
// When the user clicks on div, open the popup
function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
}
function myFunction2() {
    var popup = document.getElementById("myPopup2");
    popup.classList.toggle("show");
}
function myFunction3() {
    var popup = document.getElementById("myPopup3");
    popup.classList.toggle("show");
}
function myFunction4() {
    var popup = document.getElementById("myPopup4");
    popup.classList.toggle("show");
}
</script>

@section('content')


<h1>Contact Form</h1><br>
{!! Form::open(['url' => 'contact/submit']) !!}
<div class="form-group">
{{Form::label('name', 'Name')}}
{{Form::text('name', '', ['class' => 'form-control','placeholder' => 'Enter Name'])}}
</div>
<div class="form-group">
{{Form::label('email', 'E-Mail Address')}}
{{Form::text('email', '',['class' => 'form-control','placeholder' => 'Enter Email'])}}
</div>
<div class="form-group">
{{Form::label('message', 'Message')}}
{{Form::textarea('message', '',['class' => 'form-control','placeholder' => 'Enter Message'])}}
</div>

<div>
  {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
</div>
{!! Form::close() !!}


@endsection

@section('sidebar')
@parent
<h3>About Us</h3>
<br></br>
<p>The Real Estate Company of Greece (R-E Ltd) was established on 2004 representing Premium Properties, located all over the Country.</p><p> Our scope is to bridge the Greek Real Estate Market with International Investors, by the most reliable and efficient way. R-E Ltd equips you with all the Real Estate information and knowledge you will need, in order to invest successfully in Greece. As the global financial crisis unfolds and the Tourism of Greece is in growth, this is a unique period of opportunities.</p>
<br></br>


<!-- Tooltip -->
 <div class="demo-btn-space lg-4 sm-3">
   <h3 class="loksa2" style="font-size:2vw;">You Can Find Us At</h3>
   <h3 class="h5 lg-3"></h3>

   <div class="row">


&nbsp;&nbsp;
     <div class="popup" onclick="myFunction()">
       <a class="text-center d-block" data-toggle="tooltip" data-placement="top" title=" 244 Sigrou Avenue, 17672 Athens, Greece">
       <img class="img-fluid d-block mb-2"  src="location.png" alt="Htmlstream">
     </a>
       <span class="popuptext" id="myPopup">244 Sigrou Avenue, 17672 Athens, Greece</span>
     </div>
&nbsp;&nbsp;
<div class="popup" onclick="myFunction2()">
  <a class="text-center d-block" data-toggle="tooltip" data-placement="top" title=" 2109596800">
  <img class="img-fluid d-block mb-2"  src="tel.png" alt="Htmlstream">
</a>
  <span class="popuptext" id="myPopup2">2109596800</span>
</div>
&nbsp;&nbsp;
<div class="popup" onclick="myFunction3()">
  <a class="text-center d-block" data-toggle="tooltip" data-placement="top" title=" 2109596810">
  <img class="img-fluid d-block mb-2"  src="fax2.png" alt="Htmlstream">
</a>
  <span class="popuptext" id="myPopup3">2109596810</span>
</div>
&nbsp;&nbsp;
<div class="popup" onclick="myFunction4()">
  <a class="text-center d-block" data-toggle="tooltip" data-placement="top" title=" info@r-e.gr">
  <img class="img-fluid d-block mb-2"  src="mail.png" alt="Htmlstream">
</a>
  <span class="popuptext" id="myPopup4">info@r-e.gr</span>
</div>





<!--
     <div class="popup" onclick="myFunction()">
       <a class="text-center d-block" data-toggle="tooltip" data-placement="top" title=" 244 Sigrou Avenue, 17672 Athens, Greece">
         <img class="img-fluid d-block mb-2 popup" onclick="myFunction()" src="location.png" alt="Htmlstream">
       </a>
       <span class="popuptext" id="myPopup">popopo</span>
     </div>
&nbsp;&nbsp;&nbsp;&nbsp;
     <div >
       <a class="text-center d-block" data-toggle="tooltip" data-placement="top" title=" 2109596800">
         <img class="img-fluid d-block mb-2" src="tel.png" alt="Htmlstream">
       </a>
     </div>
&nbsp;&nbsp;&nbsp;&nbsp;
     <div >
       <a class="text-center d-block" data-toggle="tooltip" data-placement="right" title=" 2109596810">
         <img class="img-fluid d-block mb-2" src="fax2.png" alt="Htmlstream">
       </a>
     </div>
&nbsp;&nbsp;&nbsp;&nbsp;
     <div >
       <a class="text-center d-block" data-toggle="tooltip" data-placement="right" title=" info@r-e.gr">
         <img class="img-fluid d-block mb-2" src="mail.png" alt="Htmlstream">
       </a>
     </div>
S
     <div class="col-6 col-md-4 col-lg-3 mb-7 mb-lg-0">
       <a class="text-center d-block" data-toggle="tooltip" data-placement="bottom" title="Tooltip on bottom">
         <img class="img-fluid d-block mb-2" src="assets/img/tooltips/tooltip-bottom.jpg" alt="Htmlstream">
         Tooltip on bottom
       </a>
     </div>

     <div class="col-6 col-md-4 col-lg-3 mb-7 mb-lg-0">
       <a class="text-center d-block" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
         <img class="img-fluid d-block mb-2" src="assets/img/tooltips/tooltip-left.jpg" alt="Htmlstream">
         Tooltip on left
       </a>
     </div> -->
   </div>



 </div>
 <!-- End Tooltip -->
@endsection

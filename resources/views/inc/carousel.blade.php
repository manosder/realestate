<head>

  <link rel="stylesheet" href="/css/app.css">

</head>

<style>



body {
  font-family: Arial;
  margin: 0;
}



img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
  width: 100vw;

}
@media (max-width: 85em) {

.carou {
height: 1000px;
}
.carouimg {

  height: 1040px;;
}
.txt1 {
  font-size: 100px;
}

}
/* Hide the images by default */
.mySlides {
  display: none;
  bottom: 0;

}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: white;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: white;
  padding: 2px 16px;
  color: black;
  color: #111; font-family: 'calibri'; font-size: 20px; font-weight: 100; line-height: 31px; margin: 0 0 0; text-align: center;

}

.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Six columns side by side */
.column {
  float: left;
  width: 16.66%;
}

/* Add a transparency effect for thumnbail images */
.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

.centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 30px;

}

.txt1 {
    position: absolute;
    top: 74%;
    left: 74%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 2vw;
    font-family: 'calibri';
    font-weight: 100;


}
.txt2 {
    position: absolute;
    top: 74%;
    left: 30%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 2vw;
    font-family: 'calibri';
    font-weight: 100;

}
.txt3 {
    position: absolute;
    top: 38%;
    left: 43%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 2vw;
    font-family: 'calibri';
    font-weight: 100;

}
.txt4 {
    position: absolute;
    top: 53%;
    left: 86%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 2vw;
    font-family: 'calibri';
    font-weight: 100;

}
.txt5 {
    position: absolute;
    top: 40%;
    left: 49%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 2vw;
    font-family: 'calibri';
    font-weight: 100;

}
.txt6 {
    position: absolute;
    top: 84%;
    left: 14%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 2vw;
    font-family: 'calibri';
    font-weight: 100;

}
.txt7 {
    position: absolute;
    top: 84%;
    left: 17%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 2vw;
    font-family: 'calibri';
    font-weight: 100;

}
.txt8 {
    position: absolute;
    top: 20%;
    left:20%;
    transform: translate(-50%, -50%);
    color: white;
    font-size: 2vw;
    font-family: 'calibri';
    font-weight: 100;

}


h1 {
color:#0066ff
;    font-family: inherit; font-size: 36px; font-weight: 400;  line-height: 44px; margin: 100 0 12px; text-align: center; padding-top: 10px;

}
div.a {
    font-size: 15px;
}
h4 {

  font-family: calibri;
}
.first-letter {
  font-size: 3vw;
  line-height: 70px;
}
</style>
<body>



<div class="carou carousel slide" data-ride="carousel" >
  <div class="mySlides">
    <div class="numbertext">1 / 8</div>
    <img class="carouimg"src="1.jpeg" height="650px" width="100%">
      <div class="txt1"> <span class="first-letter">U</span>nique &nbsp;	<span class="first-letter">S</span>eaFront&nbsp;	  <span class="first-letter">C</span>omplex</div>
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 8</div>
    <img class="carouimg" src="2.jpg"height="600PX" width="100%">
    <div class="txt2"><span class="first-letter">S</span>ummer &nbsp;	<span class="first-letter">H</span>ouses&nbsp;	 by&nbsp;	 &nbsp;	 <span class="first-letter">B</span>each</div>
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 8</div>
    <img class="carouimg" src="3.jpg" height="650px" width="100%">
    <div class="txt3"> <span class="first-letter">5*</span> <span class="first-letter">S</span>tar <span class="first-letter">S</span>eafront <span class="first-letter">H</span>otels</div>
  </div>

  <div class="mySlides">
    <div class="numbertext">4 / 8</div>
    <img class="carouimg" src="4.jpg" height="650px" width="100%">
    <div class="txt4"><span class="first-letter">M</span>yconian <span class="first-letter">V</span>illas</div>
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 8</div>
    <img class="carouimg" src="poly3.jpg" height="650px" width="100%">
    <div class="txt5"><span class="first-letter">S</span>tunning <span class="first-letter">V</span>illas with <span class="first-letter">B</span>reathtaking <span class="first-letter">V</span>iews of the <span class="first-letter">A</span>egean <span class="first-letter">S</span>ea</div>
  </div>

  <div class="mySlides">
    <div class="numbertext">6 / 8</div>
    <img class="carouimg" src="6.jpg" height="650px" width="100%">
    <div class="txt6"> <span class="first-letter">H</span>igh-<span class="first-letter">S</span>tandard <span class="first-letter">S</span>ingle <span class="first-letter">H</span>ouses</div>
  </div>

  <div class="mySlides">
    <div class="numbertext">7 / 8</div>
    <img class="carouimg" src="7.jpg" height="650px" width="100%">
    <div class="txt7"><span class="first-letter">&nbsp;&nbsp;L</span>uxury <span class="first-letter">A</span>partments with <span class="first-letter">L</span>uxurius <span class="first-letter">I</span>nteriors</div>
  </div>
<!--
  <div class="mySlides">
    <div class="numbertext">8 / 8</div>
    <img src="8.jpg" height="650px" width="100%">
    <div class="txt8"> Commercial Buildings in Premium Locations</div>
  </div>
-->
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>



  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>


<!--
  <div class="row">
    <div class="column">
      <img class="demo cursor" src="1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Mykonian Villas With Spectacular Views Of The Aegean Sea" font-family: 'Open Sans Condensed'>
    </div>
    <div class="column">
      <img class="demo cursor" src="2.jpg" style="width:100%" onclick="currentSlide(2)" alt="5 Star SeaFront Hotels">
    </div>
    <div class="column">
      <img class="demo cursor" src="3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Stunning Villas For Ideal Summer Vacations ">
    </div>
    <div class="column">
      <img class="demo cursor" src="4.jpeg" style="width:100%" onclick="currentSlide(4)" alt="Unique SeaFront Complex">
    </div>
    <div class="column">
      <img class="demo cursor" src="5.jpg" style="width:100%" onclick="currentSlide(5)" alt="Modern Day Living In The City Center">
    </div>
    <div class="column">
      <img class="demo cursor" src="6.jpg" style="width:100%" onclick="currentSlide(6)" alt="Apartments With Luxurius Interiors">
    </div>
  </div>
-->


</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>

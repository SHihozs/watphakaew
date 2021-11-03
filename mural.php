<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>mural</title>
<style>
body {
  font-family: Arial;
  margin: 0;
}

* {
  box-sizing: border-box;
}

img {
  vertical-align: middle;
}

/* Position the image container (needed to position the left and right arrows) */
.container {
  position: relative;
}

/* Hide the images by default */
.mySlides {
  display: none;
}

/* Add a pointer when hovering over the thumbnail images */
.cursor {
  cursor: pointer;
}


}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 1px 380px;
  position: center;
  top: 0;
}

/* Container for image text */
.caption-container {
  text-align: center;
  background-color: #222;
  padding: 2px 16px;
  color: white;
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
</style>
</head>

<body bgcolor="#000000">
	
<?PHP
	
//สร้างตาราง
echo"<table border='0' align='center'> ";//สร้างตาราง
echo"<tr> 
     <td><a href='homenew.php'><img src='home3.png' width='143' height='155'></td>
	 <td><a href='history.php'><img src='headhistory2.png' width='148' height='150'></td>
	 <td><a href='location.php'><img src='headloca2.png' width='148' height='150'></td></td>
     <td><a href='dressup.php'><img src='headdress2.png' width='148' height='150'></td>
	 <td><a href='travel.php'><img src='headtra2.png' width='148' height='150'></td>
	 <td><a href='mural.php'><img src='headmural2.png' width='148' height='150'></td>
	 <td><a href='arc.php'><img src='headarc2.png' width='148' height='150' ></td>
     <td><a href='emer.php'><img src='heademer2.png ' width='148' height='150'></td>
	 <td><a href='giant.php'><img src='headgiant2.png' width='148' height='150'></td>
	 </tr>";
echo"</table>";//ปิดตาราง 
echo"<center><img src='muralsubheadss.png' width='1000' height='230'></center>";	
echo"<br>";
echo"<br>";
echo"<center><img src='mu2.png' width='1528' height='750'></center>";
?>
<h2 style="text-align:center">Slideshow Gallery</h2>
<div class="container">
  <div class="mySlides">
    <div class="numbertext">1 / 12</div>
    <center><img src="mu01.jpg" style='width:50%'></center>
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 12</div>
    <center><img src="mu12.jpg" style='width:50%'></center>
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 12</div>
     <center><img src="mu03.jpg" style='width:50%'></center>
  </div>
    
  <div class="mySlides">
    <div class="numbertext">4 / 12</div>
     <center><img src="mu04.jpg" style='width:50%'></center>
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 12</div>
     <center><img src="mu05.jpg" style='width:50%'></center>
  </div>
    
  <div class="mySlides">
    <div class="numbertext">6 / 12</div>
     <center><img src="mu10.jpg" style='width:50%'></center>
  </div>
	
<div class="mySlides">
    <div class="numbertext">7 / 12</div>
    <center><img src="mu11.jpg" style='width:50%'></center>
  </div>

  <div class="mySlides">
    <div class="numbertext">8 / 12</div>
    <center><img src="mu14.jpg" style='width:50%'></center>
  </div>

  <div class="mySlides">
    <div class="numbertext">9 / 12</div>
     <center><img src="mu08.jpg" style='width:50%'></center>
  </div>
    
  <div class="mySlides">
    <div class="numbertext">10 / 12</div>
     <center><img src="mu09.jpg" style='width:50%'></center>
  </div>

  <div class="mySlides">
    <div class="numbertext">11 / 12</div>
     <center><img src="mu15.jpg" style='width:50%'></center>
  </div>
    
  <div class="mySlides">
    <div class="numbertext">12 / 12</div>
     <center><img src="mu02.jpg" style='width:50%'></center>
  </div>
    
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>

  <div class="caption-container">
    <p id="caption"></p>
  </div>

  <div class="row">
    <div class="column">
      <img class="demo cursor" src="mu01.jpg" style="width:95%" onclick="currentSlide(1)">
    </div>
    <div class="column">
      <img class="demo cursor" src="mu12.jpg" style="width:95%" onclick="currentSlide(2)">
    </div>
    <div class="column">
      <img class="demo cursor" src="mu03.jpg" style="width:95%" onclick="currentSlide(3)">
    </div>
    <div class="column">
      <img class="demo cursor" src="mu04.jpg" style="width:95%" onclick="currentSlide(4)">
    </div>
    <div class="column">
      <img class="demo cursor" src="mu05.jpg" style="width:95%" onclick="currentSlide(5)">
    </div>    
    <div class="column">
      <img class="demo cursor" src="mu10.jpg" style="width:95%" onclick="currentSlide(6)">
    </div>
  </div>
</div>
	
<div class="row">
    <div class="column">
      <img class="demo cursor" src="mu11.jpg" style="width:95%" onclick="currentSlide(7)">
    </div>
    <div class="column">
      <img class="demo cursor" src="mu14.jpg" style="width:95%" onclick="currentSlide(8)">
    </div>
    <div class="column">
      <img class="demo cursor" src="mu08.jpg" style="width:95%" onclick="currentSlide(9)">
    </div>
    <div class="column">
      <img class="demo cursor" src="mu09.jpg" style="width:95%" onclick="currentSlide(10)">
    </div>
    <div class="column">
      <img class="demo cursor" src="mu15.jpg" style="width:95%" onclick="currentSlide(11)">
    </div>    
    <div class="column">
      <img class="demo cursor" src="mu02.jpg" style="width:95%" onclick="currentSlide(12)">
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
</body>
</html>
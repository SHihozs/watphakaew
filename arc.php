<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Architecture</title>
<style>
* {box-sizing: border-box}
body {font-family: arail, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: center;
  margin: auto;
}


/* Caption text */
.text {
  color: #FFFFFF;
  font-size: 35px;
  font-family:'Courier New';
  padding: 8px 12px;
  position: center;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 1px 1px;
  position: center;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  position: center;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>

<body bgcolor='#000000'>
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

echo"<center><img src='arcsubhead.png' width='1000' height='250'></center>";
?>
	
<div class="slideshow-container">
	
<div class="mySlides fade">
  <div class="numbertext">1 / 18</div>
  <img src="bangkok.jpg" style="width:100%">
  <div class="text"><font face="Nithan Regular">ARCHITECTURE</font></div>
</div>
	
<div class="mySlides fade">
  <div class="numbertext">2 / 18</div>
  <img src="arc022.png" style="width:100%">
  <div class="text"><font face="Nithan Regular">พระอุโบสถ</font></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 18</div>
  <img src="arc033.png" style="width:100%">
  <div class="text"><font face="Nithan Regular">ศาลาราย</font></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 18</div>
  <img src="arc044.png" style="width:100%">
  <div class="text"><font face="Nithan Regular">พระศรีรัตนเจดีย์</font></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 18</div>
  <img src="arc055.png" style="width:100%">
  <div class="text"><font face="Nithan Regular">ปราสาทพระเทพบิดร หรือ พระพุทธปรางค์ปราสาท</font></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">6 / 18</div>
  <img src="arc066.png" style="width:100%">
  <div class="text"><font face="Nithan Regular">พระมณฑป</font></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">7 / 18</div>
  <img src="arc077.png" style="width:100%">
  <div class="text"><font face="Nithan Regular">หอมณเฑียรธรรม</font></div>
</div>
	
<div class="mySlides fade">
  <div class="numbertext">8 / 18</div>
  <img src="arc088.png" style="width:100%">
  <div class="text"><font face="Nithan Regular">หอคันธารราษฎร์</font></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">9 / 18</div>
  <img src="arc099.png" style="width:100%">
  <div class="text"><font face="Nithan Regular">หอพระนาก</font></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">10 / 18</div>
  <img src="arc01000.png" style="width:100%">
  <div class="text"><font face="Nithan Regular">พระวิหารยอด</font></div>
</div>
	
<div class="mySlides fade">
  <div class="numbertext">11 / 18</div>
  <img src="arc0111.png" style="width:100%">
  <div class="text"><font face="Nithan Regular">นครวัดจำลอง</font></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">12 / 18</div>
  <img src="arc0122.png" style="width:100%">
  <div class="text"><font face="Nithan Regular">พระโพธิธาตุพิมาน</font></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">13 / 18</div>
  <img src="arc01333.png" style="width:100%">
  <div class="text"><font face="Nithan Regular">พระบรมราชานุสาวรีย์ประจำราชกาล</font></div>
</div>
	
<div class="mySlides fade">
  <div class="numbertext">14 / 18</div>
  <img src="arc0144.png" style="width:100%">
  <div class="text"><font face="Nithan Regular">พระอัษฏามหาเจดีย์หรือพระปรางค์เเปดองค์</font></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">15 / 18</div>
  <img src="arc0155.png" style="width:100%">
  <div class="text"><font face="Nithan Regular">พระมณฑปยอดปรางค์</font></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">16 / 18</div>
  <img src="arc0166.png" style="width:100%">
  <div class="text"><font face="Nithan Regular">หอระฆัง</font></div>
</div>
	
<div class="mySlides fade">
  <div class="numbertext">17 / 18</div>
  <img src="arc0177.png" style="width:100%">
  <div class="text"><font face="Nithan Regular">พระเจดีย์ทองสององค์</font></div>
</div>

<div class="mySlides fade">
  <div class="numbertext">18 / 18</div>
  <img src="arc01888.png" style="width:100%">
  <div class="text"><font face="Nithan Regular">หอพระราชพงศานุสรเเละหอพระราชกรมานุสรณ์</font></div>
</div>


<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>



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
  var dots = document.getElementsByClassName("dot");
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
}
</script>



</div>
<br>

<div style="text-align:center">
  
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
  <span class="dot" onclick="currentSlide(6)"></span> 
  <span class="dot" onclick="currentSlide(7)"></span> 
  <span class="dot" onclick="currentSlide(8)"></span> 
  <span class="dot" onclick="currentSlide(9)"></span> 
  <span class="dot" onclick="currentSlide(10)"></span> 
  <span class="dot" onclick="currentSlide(11)"></span> 
  <span class="dot" onclick="currentSlide(12)"></span> 
  <span class="dot" onclick="currentSlide(13)"></span> 
  <span class="dot" onclick="currentSlide(14)"></span> 
  <span class="dot" onclick="currentSlide(15)"></span> 
  <span class="dot" onclick="currentSlide(16)"></span> 
  <span class="dot" onclick="currentSlide(17)"></span> 
  <span class="dot" onclick="currentSlide(18)"></span> 
  
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
  var dots = document.getElementsByClassName("dot");
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
}
</script>
</body>
</html>
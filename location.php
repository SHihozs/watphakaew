<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Location</title>
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  font-size: 20px;
}

#myBtn {
  display: none;
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
  font-size: 18px;
  border: none;
  outline: none;
  background-color: white;
  color: black;
  cursor: pointer;
  padding: 15px;
  border-radius: 4px;
}

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
	

echo"<center><img src='locasubhead.png' width='1000' height='250'></center>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<center><img src='locaup.png' width='1528' height='1050'></center>";
echo"<center><a href='https://www.google.co.th/maps/place/%E0%B8%A7%E0%B8%B1%E0%B8%94%E0%B8%9E%E0%B8%A3%E0%B8%B0%E0%B8%A8%E0%B8%A3%E0%B8%B5%E0%B8%A3%E0%B8%B1%E0%B8%95%E0%B8%99%E0%B8%A8%E0%B8%B2%E0%B8%AA%E0%B8%94%E0%B8%B2%E0%B8%A3%E0%B8%B2%E0%B8%A1/@13.7514967,100.4904799,17z/data=!3m1!4b1!4m5!3m4!1s0x30e2990eee7769e5:0x343cc1aab522fe88!8m2!3d13.7515912!4d100.4926579'><img src='clickmap1.png'></a></center>";
echo"<center><img src='localow.png' width='1528' height='2400'></center>";




?>
<button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>



<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>
</script>
	
</body>
</html>
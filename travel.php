<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>travel</title>
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

echo"<center><img src='travelsubhead.png' width='1000' height='250'></center>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<center><img src='tra22.png' width='1528' height='2960'></center>";
echo"<center><img src='tra23.png' width='1528' height='2960'></center>";
echo"<center><img src='tra3.png' width='1528' height='4550'></center>";


?>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Image Hotspot</title>
	<link rel="stylesheet" href="css/custom.css">
</head>

<body>
<div style="float:left; width:50%; max-width:566px;">
<img src="images/computer.jpg" alt="Workplace" usemap="#myMap">
<map name="myMap">
  <area shape="rect" coords="25,50,575,325" alt="Monitor" onclick="myFunction()">
  <area shape="rect" coords="85,415,510,460" alt="Keyboard" href="https://www.dell.com/en-in/work/shop/keyboards-mice/ar/6591" target="_blank">
  <area shape="circle" coords="575,420,50" alt="Mouse" href="https://www.dell.com/en-in/work/shop/kit-dell-premier-wireless-mouse-wm527-s-p/apd/580-afsv/pc-accessories" target="_blank">
</map>
<p class="initialImage">Click on the computer, the keyboard, or the mouse to go to a new page and read more about the topic.</p>
</div>

<div class="popup" style="float:right; width:50%">
<video class="popuptext" id="myPopup" style="width:700px;" ><source src="videos/monitor.mp4" type="video/mp4"></video>
</div>

<script>
function myFunction() {
var popup = document.getElementById("myPopup");
popup.classList.toggle("show");

if (popup.paused){ 
    popup.play(); 
    }
  else{ 
    popup.pause();
    }
}
</script>

</body>
</html>

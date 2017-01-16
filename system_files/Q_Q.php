<?php
echo'
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js" type="text/javascript">
</script>


<script type="text/javascript">
function mouseOver($var)
{
if ($var == "t1"){
	document.getElementById("b1").src ="result.jpg";
}
else if ($var == "t2") {
document.getElementById("b2").src ="result.jpg";
}
else {
document.getElementById("b3").src ="result.jpg";
}
}

function mouseOut($var)
{
if ($var == "t1") {
	document.getElementById("b1").src ="siena.gif";
}
else if ($var == "t2") {
	document.getElementById("b2").src ="siena.gif";
}
else {
	document.getElementById("b3").src ="siena.gif";
}
}
</script>
</head>

<body>

<img border="0" alt="Visit W3Schools!" src="siena.gif" id="b1" width="50" height="50" onMouseOver="mouseOver(\'t1\')" onMouseOut="mouseOut(\'t1\')" />

<a href="http://www.w3schools.com" target="_blank">
<img border="0" alt="Visit W3Schools!" src="siena.gif" id="b2" width="50" height="50" onMouseOver="mouseOver(\'t2\')" onMouseOut="mouseOut(\'t2\')" /></a>

<a href="http://www.w3schools.com" target="_blank">
<img border="0" alt="Visit W3Schools!" src="siena.gif" id="b3" width="50" height="50" onMouseOver="mouseOver(\'t3\')" onMouseOut="mouseOut(\'t3\')" /></a>
</body>
</html>';
?>
<?php
session_start();
$cname=$_GET['cname'];
$cadd=$_GET['cadd'];
$cmb=$_GET['cmb'];

$_SESSION['cname']=$cname;
$_SESSION['cadd']=$cadd;
$_SESSION['cmb']=$cmb;

?>


<html>
<style>
body { 
background-image: url('aa2.jpeg'); background-size: cover; 
}
</style>
<body>
<form action="setc2.php" method="get">
Enter Product Details:<br><br>
peoduct name:
<input type="text" name="pname">
<br>
<br>
product quantity :
<input type="number" name="pqyt">
<br>
<br>
producrt rate :
<input type="number" name="prate">
<br>
<br>
<input type="submit" value="submit">
</form>

<source src="path-to-your-video.ogg" type="video/ogg"> 
</body>
</html>


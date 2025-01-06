<?php
Session_start();
$eno=$_GET['eno'];
$ename=$_GET['ename'];
$ename=$_GET['eadd'];

$_SESSION['eno']=$eno;
$_SESSION['ename']=$ename;
$_SESSION['eadd']=$eadd;

?>

<html>
<body>
<form action="setb22.php" method="get">

employe basic:
<input type="number" name="ebasic">
emplye da:
<input type="text" name="eda">
empy hre:
<input type="text" name="ehra">


<input type="submit" value="Next">
</form>
</body>
</html>


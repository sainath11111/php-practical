<?php
Session_start();
$ebasic=$_GET['ebasic'];
$eda=$_GET['eda'];
$ehra=$_GET['ehra'];

echo "Eno:".$_SESSION['eno'];
echo"<br>";
echo "Ename:".$_SESSION['ename'];
echo"<br>";
echo "Eadd:".$_SESSION['eadd'];
echo"<br>";
echo "Ebasic:".$ebasic;
echo"<br>";
echo "Eda:".$eda;
echo"<br>";
echo "Ehra:".$ehra;
echo"<br>";
$total=$ebasic+$eda+$ehra;
echo"<br>";
echo"total earning is:".$total;
?>

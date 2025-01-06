<?php
session_start();
$pname=$_GET['pname'];
$pqyt=$_GET['pqyt'];
$prate=$_GET['prate'];
echo "<h1 style='background-color:red; color:white; font-style:italic;'> Bill Details </h1>";
echo"<h3 style='color:black;'>";
echo "Custemer name:".$_SESSION['cname'];
echo"<br>";
echo "Custemer Address:".$_SESSION['cadd'];
echo"<br>";
echo "Custemer Mobile:".$_SESSION['cmb'];
echo"<br>";
echo"</h3>"; 

echo"<h1 style='background-color:red; color:white;'> Product Details </h1>";
echo"<h3 style='color:black;'>";
echo "Product Name:".$pname;
echo"<br>";
echo "Product QYT:".$pqyt;
echo"<br>";
echo "Product Rate:".$prate;
echo"</h3>";
?>
<html>
<style>
body { 
background-image: url('aa.webp'); background-size: cover; 
}
</style>

<body>

</body>
</html>


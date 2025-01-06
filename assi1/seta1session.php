<?php
Session_start();
$_SESSION['views']=($_SESSION['views'] ?? 0)+1;
echo"page accesed {$_SESSION['views'] }time this session";
?>

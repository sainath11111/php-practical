<?php
Session_start();
$_SESSION['views']=($_SESSION['views'] ?? 0)+1;

$page_views=($_COOKIE['views'] ?? 0)+1;
setcookie('views',$page_views,time()+86400*30);

echo" session page accesed {$_SESSION['views'] }time this session";
echo"<br>";
echo "cookies page accessed $page_views times";
?>

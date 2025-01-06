<?php
$page_views=($_COOKIE['views'] ?? 0)+1;
setcookie('views',$page_views,time()+86400*30);
echo "page accessed $page_views times";
?>

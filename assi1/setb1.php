<?php
Session_start();
$user=$_GET['uname'];
$pass=$_GET['upass'];
if($user=="sainath"&&$pass=="sai123")
{
echo "welcome ".$user;
}
else
{
if($_SESSION['cnt']==3)
{
echo "you lost chances";
$SESSION['cnts']=0;
}
else if($cnt<3)
{
echo"you have chanced".$_SESSION['cnt'];
$_SESSION['cnt']=$_SESSION['cnt']+1;
}
}
?>


<?php
setcookie("s11",$_GET['s1'],time()+3600);
setcookie("s12",$_GET['s3'],time()+3600);
setcookie("s13",$_GET['s4'],time()+3600);
setcookie("s14",$_GET['s2'],time()+3600);
echo"style is".$_GET['s1']."<br>color is".$_GET['s3']."<br>Background color is".$_GET['s4']."<br>size is".$_GET['s2'];
?>

<html>
<body>
<form action="seta2.cookie2.php">
<input type="submit"value="enter">
</form>
</body>
</html>

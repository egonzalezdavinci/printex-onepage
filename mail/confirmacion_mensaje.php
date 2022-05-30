<?php

$to = "eliarubengonzalez@gmail.com";

$subject = "Mensaje Bringo.com.ar";
$enviado = "../index.html#gracias";

$body = "'".include( 'header_mailing.html' )."'";
$body .= "<p>Nombre y Apellido: ".$_POST['nombre']."</p>
<p>Correo Electronico: ".$_POST['correo']."</p>
<p>Telefono de contacto: ".$_POST['telefono']."</p>
<p>Consulta: ".$_POST['consulta']."</p>";
$body .= "'".include( 'footer_mailing.html' )."'";

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "From: eliarubengonzalez@hotmail.com \r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1  \r\n";

$res = mail($to, utf8_decode($subject), utf8_decode($body), $headers); 

if($res == true){
header("location: ".$enviado ."?mensaje=ok");
}else{
header("location: ".$enviado);
}
?>
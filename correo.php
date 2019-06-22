<?php

$url_ok="enviado.html";
$url_ko="error.html";
$nombre=$_POST["nombre"];
$telefono=$_POST["phone"];
$texto_mail=$_POST["message"];
$remitente=$_POST["email"];
$destinatario="formulario_web@peluqueriadiagonal.com";
$asunto=$_POST["asunto"];
$headers="MIME-Version: 1.0\r\n";
$headers.="Content-type: text/html; charset=iso-8859-1\r\n";
$headers.="From: Recibido desde el formulario de la web";
$cuerpo_msg="Enviado por:<br>Nombre: $nombre Telefono: $telefono Email: $remitente <br><hr> $texto_mail";

$exito=mail($destinatario,$asunto,$cuerpo_msg,$headers);

if($exito){
    header("Location: $url_ok");
exit; 
}else{
    header("Location: $url_ko");
exit; 
}

?>
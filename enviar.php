<?php 


$destino="informacionlibrosyalgomas@gmail.com";
$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$dependencia = $_POST["dependencia"];
$mensaje = $_POST["mensaje"];
$contenido = "Nombre: " . $nombre "\nCorreo: " . $correo . "\nTeléfono: " . $telefono . "\nMensaje:" .$mensaje;
mail($destino,"Solicitud",$contenido);
header("Location:gracias.html");
?>
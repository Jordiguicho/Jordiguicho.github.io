<?php

$destino= "chury2721@gmail.com";
$nombre = $_POST["nombre"];
$mail = $_POST["mail"];
$tel = $_POST["tel"];
$mensaje = $_POST["mensaje"];

$contenido = "Nombre: " . $nombre. "\nCorreo: " . $mail . "\nTelefono: " . $tel . "\nMensaje: " . $mensaje;

mail($destino, "Contacto", $contenido);
header("Location:index.html")

?>
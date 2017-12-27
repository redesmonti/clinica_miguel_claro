<?php

include ('conexion.php');

/*Nuevo tipo Mail*/
$nombre = $_POST['name'];
$email = $_POST['email'];
$telefono = $_POST['telefono']
$contenido = $_POST['content'];

$sql = "INSERT INTO contacto(contacto_nombre, contacto_email, contacto_telefono, contacto_contenido) 
VALUES('$nombre','$email','$telefono','$contenido')";

if ($conn->query($sql) === TRUE) {
    echo "datos enviados correctamente";
    //Parte de enviar mail
    $header = 'From: ' . $email . " \r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    $mensaje = "Este mensaje fue enviado por: " . $nombre . " \r\n";
    $mensaje .= "Su correo electronico es: " . $email . " \r\n";
    $mensaje .= "Su correo telefono es: " . $telefono . " \r\n";
    $mensaje .= "Mensaje: " . $_POST['content'] . " \r\n";
    $mensaje .= "Enviado el " . date('d/m/Y', time());

    $para = 'redes.monti@gmail.com';
    $asunto = 'Mensaje en la pagina web';

    mail($para, $asunto, utf8_decode($mensaje), $header);

    header('Location:http://pruebabrother.96.lt/');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>	
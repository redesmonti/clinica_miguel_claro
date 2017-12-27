<?php

//Datos de la base en Hostinger
$servername = "mysql.hostinger.es";
$username = "u802988470_cm";
$password = "qwe123";
$dbname = "u802988470_pb";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Fallo la conexión con la base de datos: " . $conn->connect_error);
}

?>
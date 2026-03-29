<?php
$host = "localhost";
$usuario = "root";
$password = "";
$basedatos = "tienda_celulares";

$conn = new mysqli($host, $usuario, $password, $basedatos);

// Verificar conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}
?>
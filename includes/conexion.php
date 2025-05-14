<?php
$host = "localhost";
$usuario = "root";
$contrasena = "qwerty";
$base_de_datos = "powerlifting_shop";

$conexion = new mysqli($host, $usuario, $contrasena, $base_de_datos);

// Aquí forzamos UTF-8 para evitar signos de interrogación �
$conexion->set_charset("utf8mb4");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>

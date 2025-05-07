<?php
session_start();
include 'conexion.php';

if (!isset($_SESSION['usuario']) || empty($_SESSION['carrito'])) {
    header("Location: carrito.php");
    exit;
}

$carrito = $_SESSION['carrito'];
$id_usuario = $_SESSION['id_usuario'];
$detalle = "";

foreach ($carrito as $id => $item) {
    $nombre = $item['nombre'];
    $cantidad = (int)$item['cantidad'];
    $subtotal = $item['precio'] * $cantidad;
    $detalle .= "$nombre (x$cantidad) - $$subtotal\n";

    // Restar del inventario
    $conexion->query("UPDATE productos SET stock = stock - $cantidad WHERE id_producto = $id");
}

// Escapar el texto por seguridad
$detalle = $conexion->real_escape_string($detalle);

// Guardar en historial
$conexion->query("INSERT INTO historial (usuario_id, detalle) VALUES ($id_usuario, '$detalle')");

// Vaciar carrito
unset($_SESSION['carrito']);

// Redirigir con mensaje
header("Location: carrito.php?finalizado=1");
exit;

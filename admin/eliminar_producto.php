<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== 'admin') {
    header("Location: ../vistas/index.php");
    exit;
}

include '../includes/conexion.php';

// Validar ID
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = (int)$_GET['id'];

    // Eliminar el producto
    $conexion->query("DELETE FROM productos WHERE id_producto = $id");
}

// Redireccionar de vuelta
header("Location: productos_admin.php");
exit;
?>

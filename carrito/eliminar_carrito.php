<?php
session_start();

if (!isset($_SESSION['usuario']) || !isset($_GET['id'])) {
    header("Location: ../vistas/carrito.php");
    exit;
}

$id = $_GET['id'];

if (isset($_SESSION['carrito'][$id])) {
    unset($_SESSION['carrito'][$id]);
}

header("Location: ../vistas/carrito.php");
exit;


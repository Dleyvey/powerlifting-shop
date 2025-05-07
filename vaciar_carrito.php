<?php
session_start();

// Asegura que el usuario esté logueado antes de vaciar el carrito
if (!isset($_SESSION['usuario'])) {
    header("Location: login.php");
    exit;
}

unset($_SESSION['carrito']); // Elimina todo el contenido del carrito

header("Location: carrito.php");
exit;

<?php
session_start();
include '../includes/conexion.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE email='$email'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows == 1) {
    $usuario = $resultado->fetch_assoc();
    if (password_verify($password, $usuario['password'])) {
        $_SESSION['usuario'] = $usuario['nombre'];
        $_SESSION['id_usuario'] = $usuario['id_usuario'];
        $_SESSION['rol'] = $usuario['rol'];
        header("Location: ../vistas/index.php");
        exit;
    }
}

echo "<p class='text-danger text-center mt-5'>Credenciales incorrectas. <a href='login.php'>Volver a intentar</a></p>";
?>




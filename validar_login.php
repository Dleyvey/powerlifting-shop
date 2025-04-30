<?php
session_start();
include 'conexion.php';

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE email='$email'";
$resultado = $conexion->query($sql);

if ($resultado->num_rows == 1) {
    $usuario = $resultado->fetch_assoc();
    if (password_verify($password, $usuario['password'])) {
        $_SESSION['usuario'] = $usuario['nombre'];
        $_SESSION['id_usuario'] = $usuario['id_usuario'];
        header("Location: index.php");
        exit;
    }
}

echo "<p class='text-danger text-center mt-5'>Credenciales incorrectas. <a href='login.php'>Volver a intentar</a></p>";
?>


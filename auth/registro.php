<?php include '../includes/header.php'; ?>
<h2 class="text-center">Crear Cuenta</h2>

<form action="registro.php" method="POST" class="w-50 mx-auto">
  <div class="mb-3">
    <label>Nombre</label>
    <input type="text" name="nombre" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Apellido</label>
    <input type="text" name="apellido" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Contraseña</label>
    <input type="password" name="password" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-primary">Registrar</button>
</form>

<?php
include '../includes/conexion.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT); // cifrado

    $sql = "INSERT INTO usuarios (nombre, apellido, email, password) VALUES ('$nombre', '$apellido', '$email', '$password')";
    if ($conexion->query($sql)) {
        echo "<p class='text-success text-center mt-3'>Cuenta creada correctamente. <a href='login.php'>Iniciar sesión</a></p>";
    } else {
        echo "<p class='text-danger text-center mt-3'>Error: " . $conexion->error . "</p>";
    }
}
?>

<?php include '../includes/footer.php'; ?>

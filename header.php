<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Powerlifting Shop</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/estilos.css">
</head>
<body>

<!-- Barra de navegación -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="index.php">Powerlifting Shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="productos.php">Productos</a></li>
        <li class="nav-item"><a class="nav-link" href="rutinas.php">Rutinas</a></li>
        <li class="nav-item"><a class="nav-link" href="nutricion.php">Nutrición</a></li>
        <li class="nav-item"><a class="nav-link" href="platicas.php">Pláticas</a></li>
        <li class="nav-item"><a class="nav-link" href="accesorios.php">Accesorios</a></li>
        <li class="nav-item"><a class="nav-link" href="about.php">Sobre mí</a></li>
      </ul>
    </div>
  </div>
</nav>
<?php session_start(); ?>

<div class="bg-light py-2 text-end pe-4">
  <?php if (isset($_SESSION['usuario'])): ?>
    Bienvenido, <strong><?php echo $_SESSION['usuario']; ?></strong> |
    <a href="logout.php" class="btn btn-sm btn-outline-danger">Cerrar sesión</a>
  <?php else: ?>
    <a href="login.php" class="btn btn-sm btn-outline-primary">Iniciar sesión</a>
    <a href="registro.php" class="btn btn-sm btn-outline-success">Registrarse</a>
  <?php endif; ?>
</div>

<main class="container mt-4">

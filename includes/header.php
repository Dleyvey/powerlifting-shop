<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php echo $titulo ?? 'Powerlifting Shop'; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/estilos.css">
</head>
<body>

<!-- Barra de navegación -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="../vistas/index.php">Powerlifting Shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="../vistas/productos.php">Productos</a></li>
        <li class="nav-item"><a class="nav-link" href="../vistas/rutinas.php">Metodología</a></li>
        <li class="nav-item"><a class="nav-link" href="../vistas/nutricion.php">Nutrición</a></li>
        <li class="nav-item"><a class="nav-link" href="../vistas/platicas.php">Pláticas</a></li>
        <li class="nav-item"><a class="nav-link" href="../vistas/accesorios.php">Accesorios</a></li>
        <li class="nav-item"><a class="nav-link" href="../vistas/about.php">Sobre mí</a></li>
      </ul>
    </div>
  </div>
</nav>

<?php session_start(); ?>

<div class="bg-light py-2 d-flex justify-content-end align-items-center pe-4 gap-2" style="min-height: 44px">
<?php if (isset($_SESSION['usuario'])): ?>
    <span class="me-2">Bienvenido, <strong><?php echo $_SESSION['usuario']; ?></strong></span>

    <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] === 'admin'): ?>
        <a href="../admin/productos_admin.php" class="btn btn-sm btn-outline-dark">Administrar tienda</a>
    <?php endif; ?>

    <a href="../vistas/carrito.php" class="btn btn-sm btn-outline-warning">Carrito</a>
    <a href="../vistas/historial.php" class="btn btn-sm btn-outline-secondary">Historial</a>
    <a href="../auth/logout.php" class="btn btn-sm btn-outline-danger">Cerrar sesión</a>
<?php else: ?>
    <a href="../auth/login.php" class="btn btn-sm btn-outline-primary">Iniciar sesión</a>
    <a href="../auth/registro.php" class="btn btn-sm btn-outline-success">Registrarse</a>
<?php endif; ?>
</div>

<main class="container mt-4">

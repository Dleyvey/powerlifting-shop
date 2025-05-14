<?php $titulo = "Bienvenido a Powerlifting Shop"; ?>
<?php include '../includes/header.php'; ?>

<!-- Hero Section -->
<div class="text-center mt-4 fade-in">
  <h1 class="display-4">Bienvenido a Powerlifting Shop 🏋️‍♂️</h1>
  <p class="lead">Tu tienda especializada en rutinas, suplementos, equipamiento y más.</p>
  <a href="productos.php" class="btn btn-warning btn-lg mt-3">Ver productos</a>
</div>

<!-- Banner o imagen destacada -->
<div class="my-5 text-center fade-in">
  <img src="../assets/img/powerlifting-banner.jpg" alt="Banner Powerlifting" class="img-fluid rounded shadow" style="max-height: 400px;">
</div>

<!-- Sección de categorías destacadas -->
<section class="row text-center mt-5">
  <div class="col-md-4 mb-4 fade-in">
    <h3>Metodología De Entrenamiento</h3>
    <p>Programas personalizados para fuerza, hipertrofia y más.</p>
    <a href="rutinas.php" class="btn btn-outline-dark">Ver Metodología</a>
  </div>
  <div class="col-md-4 mb-4 fade-in">
    <h3>Suplementos</h3>
    <p>Creatina, proteínas, preentrenos y asesoría nutricional.</p>
    <a href="nutricion.php" class="btn btn-outline-dark">Ver Nutrición</a>
  </div>
  <div class="col-md-4 mb-4 fade-in">
    <h3>Accesorios</h3>
    <p>Cinturones, muñequeras, bandas, ganchos y más.</p>
    <a href="accesorios.php" class="btn btn-outline-dark">Ver Accesorios</a>
  </div>
</section>

<!-- Llamado a la acción adicional -->
<div class="text-center mt-5 fade-in">
  <h4>¿Nuevo en el Powerlifting?</h4>
  <p>Empieza con nuestros programas de iniciación o contáctanos para una asesoría personalizada.</p>
  <a href="platicas.php" class="btn btn-secondary">Conoce nuestras pláticas</a>
</div>

<?php include '../includes/footer.php'; ?>

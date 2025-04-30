<?php include 'header.php'; ?>
<h2 class="text-center">Iniciar Sesión</h2>

<form action="validar_login.php" method="POST" class="w-50 mx-auto">
  <div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Contraseña</label>
    <input type="password" name="password" class="form-control" required>
  </div>
  <button type="submit" class="btn btn-success">Entrar</button>
</form>
<?php include 'footer.php'; ?>

<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== 'admin') {
    header("Location: ../vistas/index.php");
    exit;
}

include '../includes/conexion.php';
include '../includes/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre      = trim($_POST['nombre']);
    $descripcion = trim($_POST['descripcion']);
    $precio      = floatval($_POST['precio']);
    $stock       = intval($_POST['stock']);
    $imagen_url  = trim($_POST['imagen_url']);
    $categoria   = trim($_POST['categoria']);

    // Seguridad: uso de consultas preparadas
    $stmt = $conexion->prepare("INSERT INTO productos (nombre, descripcion, precio, stock, imagen_url, categoria) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssdiss", $nombre, $descripcion, $precio, $stock, $imagen_url, $categoria);
    $stmt->execute();
    $stmt->close();

    header("Location: productos_admin.php");
    exit;
}
?>

<h2 class="text-center my-4">Agregar Producto</h2>

<form method="POST" class="w-50 mx-auto">
    <div class="mb-3">
        <label>Nombre</label>
        <input type="text" name="nombre" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Descripción</label>
        <textarea name="descripcion" class="form-control" required></textarea>
    </div>
    <div class="mb-3">
        <label>Precio</label>
        <input type="number" name="precio" step="0.01" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Stock</label>
        <input type="number" name="stock" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Nombre de imagen (ej: creatina.jpg)</label>
        <input type="text" name="imagen_url" class="form-control" required>
    </div>
    <div class="mb-3">
        <label>Categoría</label>
        <input type="text" name="categoria" class="form-control" required>
    </div>

    <div class="d-flex justify-content-between">
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="productos_admin.php" class="btn btn-secondary">Cancelar</a>
    </div>
</form>

<?php include '../includes/footer.php'; ?>

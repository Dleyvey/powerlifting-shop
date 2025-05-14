<?php
session_start();
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== 'admin') {
    header("Location: ../vistas/index.php");
    exit;
}

include '../includes/conexion.php';
include '../includes/header.php';

// Validar que haya un ID
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    echo "<p class='text-center text-danger'>ID de producto no especificado o inválido.</p>";
    include '../includes/footer.php';
    exit;
}

$id = (int)$_GET['id'];

// Obtener datos del producto
$sql = "SELECT * FROM productos WHERE id_producto = $id";
$resultado = $conexion->query($sql);

if ($resultado->num_rows === 0) {
    echo "<p class='text-center text-danger'>Producto no encontrado.</p>";
    include '../includes/footer.php';
    exit;
}

$producto = $resultado->fetch_assoc();

// Procesar formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $conexion->real_escape_string($_POST['nombre']);
    $descripcion = $conexion->real_escape_string($_POST['descripcion']);
    $precio = (float)$_POST['precio'];
    $stock = (int)$_POST['stock'];
    $imagen_url = $conexion->real_escape_string($_POST['imagen_url']);
    $categoria = $conexion->real_escape_string($_POST['categoria']);

    $sql = "UPDATE productos SET 
                nombre = '$nombre',
                descripcion = '$descripcion',
                precio = $precio,
                stock = $stock,
                imagen_url = '$imagen_url',
                categoria = '$categoria'
            WHERE id_producto = $id";

    if ($conexion->query($sql)) {
        header("Location: productos_admin.php");
        exit;
    } else {
        echo "<p class='text-danger text-center'>Error al actualizar el producto: {$conexion->error}</p>";
    }
}
?>

<h2 class="text-center">Editar Producto</h2>

<form method="POST" class="w-50 mx-auto mb-5">
    <div class="mb-3">
        <label>Nombre</label>
        <input type="text" name="nombre" class="form-control" value="<?php echo htmlspecialchars($producto['nombre']); ?>" required>
    </div>
    <div class="mb-3">
        <label>Descripción</label>
        <textarea name="descripcion" class="form-control" required><?php echo htmlspecialchars($producto['descripcion']); ?></textarea>
    </div>
    <div class="mb-3">
        <label>Precio</label>
        <input type="number" name="precio" step="0.01" class="form-control" value="<?php echo $producto['precio']; ?>" required>
    </div>
    <div class="mb-3">
        <label>Stock</label>
        <input type="number" name="stock" class="form-control" value="<?php echo $producto['stock']; ?>" required>
    </div>
    <div class="mb-3">
        <label>URL Imagen</label>
        <input type="text" name="imagen_url" class="form-control" value="<?php echo htmlspecialchars($producto['imagen_url']); ?>" required>
    </div>
    <div class="mb-3">
        <label>Categoría</label>
        <input type="text" name="categoria" class="form-control" value="<?php echo htmlspecialchars($producto['categoria']); ?>" required>
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
    <a href="productos_admin.php" class="btn btn-secondary">Cancelar</a>
</form>

<?php include '../includes/footer.php'; ?>

<?php
session_start();

// Verificar que haya sesión activa y que el usuario sea admin
if (!isset($_SESSION['usuario']) || $_SESSION['rol'] !== 'admin') {
    header("Location: ../vistas/index.php");
    exit;
}

include '../includes/conexion.php';
include '../includes/header.php';
?>

<h2 class="text-center my-4">Administración de Productos</h2>

<div class="text-center mb-4">
    <a href="agregar_producto.php" class="btn btn-success">Agregar nuevo producto</a>
</div>

<div class="container">
    <table class="table table-bordered text-center">
        <thead class="table-dark">
            <tr>
                <th>ID</th>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Stock</th>
                <th>Categoría</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = "SELECT * FROM productos";
            $resultado = $conexion->query($sql);

            while ($fila = $resultado->fetch_assoc()):
                $imagenRuta = strpos($fila['imagen_url'], 'http') === 0 
                    ? $fila['imagen_url'] 
                    : "../assets/img/" . $fila['imagen_url'];
            ?>
            <tr>
                <td><?php echo $fila['id_producto']; ?></td>
                <td>
                    <img src="<?php echo $imagenRuta; ?>" width="80" height="80" class="rounded shadow-sm" style="object-fit: cover;">
                </td>
                <td><?php echo $fila['nombre']; ?></td>
                <td>$<?php echo number_format($fila['precio'], 2); ?></td>
                <td><?php echo $fila['stock']; ?></td>
                <td><?php echo $fila['categoria']; ?></td>
                <td>
                    <a href="editar_producto.php?id=<?php echo $fila['id_producto']; ?>" class="btn btn-sm btn-primary mb-1">Editar</a>
                    <a href="eliminar_producto.php?id=<?php echo $fila['id_producto']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Seguro que deseas eliminar este producto?')">Eliminar</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<?php include '../includes/footer.php'; ?>

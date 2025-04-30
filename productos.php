<?php include 'header.php'; ?>
<?php include 'conexion.php'; ?>

<h1 class="text-center mb-4">Catálogo de Productos</h1>

<div class="row">
<?php
$sql = "SELECT * FROM productos";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        ?>
        <div class="col-md-4 mb-4">
            <div class="card h-100 shadow">
                <img src="<?php echo $fila['imagen_url']; ?>" class="card-img-top" alt="Producto" style="height: 250px; object-fit: cover;">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title"><?php echo $fila['nombre']; ?></h5>
                    <p class="card-text"><?php echo $fila['descripcion']; ?></p>
                    <p><strong>Precio:</strong> $<?php echo $fila['precio']; ?></p>
                    <p><strong>Stock:</strong> <?php echo $fila['stock']; ?> unidades</p>
                    <p class="text-muted">Categoría: <?php echo $fila['categoria']; ?></p>
                    <a href="#" class="btn btn-warning mt-auto">Agregar al carrito</a>
                </div>
            </div>
        </div>
        <?php
    }
} else {
    echo "<p>No hay productos disponibles.</p>";
}
?>
</div>

<?php include 'footer.php'; ?>

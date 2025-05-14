<?php $titulo = "Catálogo de Productos"; ?>
<?php include '../includes/header.php'; ?>
<?php include '../includes/conexion.php'; ?>

<h1 class="text-center mb-4 fade-in">Catálogo de Productos</h1>

<div class="row row-cols-1 row-cols-md-3 g-4 fade-in">
<?php
$sql = "SELECT * FROM productos";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        $imagenRuta = strpos($fila['imagen_url'], 'http') === 0 
                        ? $fila['imagen_url'] 
                        : "../assets/img/" . $fila['imagen_url'];
        ?>
        <div class="col fade-in">
            <div class="card h-100 shadow">
                <img src="<?php echo $imagenRuta; ?>" class="card-img-top producto-img" alt="Producto">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title"><?php echo $fila['nombre']; ?></h5>
                    <p class="card-text"><?php echo $fila['descripcion']; ?></p>
                    <p><strong>Precio:</strong> $<?php echo $fila['precio']; ?></p>
                    <p><strong>Stock:</strong> <?php echo $fila['stock']; ?> unidades</p>
                    <p class="text-muted">Categoría: <?php echo $fila['categoria']; ?></p>

                    <!-- Agregar al carrito -->
                    <form action="../carrito/agregar_carrito.php" method="POST" class="mt-auto">
                        <input type="hidden" name="id_producto" value="<?php echo $fila['id_producto']; ?>">
                        <input type="hidden" name="nombre" value="<?php echo $fila['nombre']; ?>">
                        <input type="hidden" name="precio" value="<?php echo $fila['precio']; ?>">
                        <input type="hidden" name="cantidad" value="1">
                        <input type="hidden" name="imagen_url" value="<?php echo $fila['imagen_url']; ?>">
                        <button type="submit" class="btn btn-warning w-100">Agregar al carrito</button>
                    </form>
                </div>
            </div>
        </div>
        <?php
    }
} else {
    echo "<p class='text-center fade-in'>No hay productos disponibles.</p>";
}
?>
</div>

<?php include '../includes/footer.php'; ?>

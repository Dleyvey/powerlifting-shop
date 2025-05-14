<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ../auth/login.php");
    exit;
}
include '../includes/header.php';

$carrito = $_SESSION['carrito'] ?? [];

if (isset($_GET['finalizado'])) {
    echo "<div class='alert alert-success text-center fade-in'>¡Compra realizada con éxito!</div>";
}
?>

<h2 class="text-center mb-4 fade-in">Tu Carrito de Compras</h2>

<?php if (empty($carrito)): ?>
    <p class="text-center fade-in">Tu carrito está vacío.</p>
<?php else: ?>
    <div class="container fade-in">
        <table class="table table-bordered text-center align-middle">
            <thead class="table-dark">
                <tr>
                    <th>Producto</th>
                    <th>Imagen</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php $total = 0; ?>
                <?php foreach ($carrito as $id => $item): ?>
                    <?php
                        $subtotal = $item['precio'] * $item['cantidad'];
                        $total += $subtotal;
                        $imagenRuta = (strpos($item['imagen'], 'http') === 0) ? $item['imagen'] : '../assets/img/' . $item['imagen'];
                    ?>
                    <tr>
                        <td><?php echo $item['nombre']; ?></td>
                        <td><img src="<?php echo $imagenRuta; ?>" width="80"></td>
                        <td>$<?php echo number_format($item['precio'], 2); ?></td>
                        <td>
                            <form action="../carrito/modificar_carrito.php" method="POST" class="d-flex justify-content-center">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <input type="number" name="cantidad" value="<?php echo $item['cantidad']; ?>" min="1" class="form-control w-50">
                                <button type="submit" class="btn btn-sm btn-primary ms-2">Actualizar</button>
                            </form>
                        </td>
                        <td>$<?php echo number_format($subtotal, 2); ?></td>
                        <td>
                            <a href="../carrito/eliminar_carrito.php?id=<?php echo $id; ?>" class="btn btn-sm btn-danger">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="text-end mt-4">
            <h4>Total: $<?php echo number_format($total, 2); ?></h4>
            <a href="../carrito/vaciar_carrito.php" class="btn btn-outline-danger">Vaciar carrito</a>
            <a href="../carrito/finalizar_compra.php" class="btn btn-success ms-2">Finalizar compra</a>
        </div>
    </div>
<?php endif; ?>

<?php include '../includes/footer.php'; ?>

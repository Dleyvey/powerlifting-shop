<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    header("Location: ../auth/login.php");
    exit;
}

include '../includes/header.php';
include '../includes/conexion.php';

$id_usuario = $_SESSION['id_usuario'];

$sql = "SELECT * FROM historial WHERE usuario_id = $id_usuario ORDER BY fecha DESC";
$resultado = $conexion->query($sql);
?>

<h2 class="text-center mb-4 fade-in">Historial de Compras</h2>

<div class="container fade-in">
<?php if ($resultado->num_rows > 0): ?>
    <table class="table table-striped">
        <thead class="table-dark text-center">
            <tr>
                <th>#</th>
                <th>Detalle</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            <?php $contador = 1; ?>
            <?php while ($fila = $resultado->fetch_assoc()): ?>
                <tr>
                    <td class="text-center"><?php echo $contador++; ?></td>
                    <td><pre><?php echo $fila['detalle']; ?></pre></td>
                    <td class="text-center"><?php echo $fila['fecha']; ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
<?php else: ?>
    <p class="text-center fade-in">Aún no has realizado ninguna compra.</p>
<?php endif; ?>
</div>

<?php include '../includes/footer.php'; ?>

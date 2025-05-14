<?php $titulo = "Accesorios para Powerlifting"; ?>
<?php include '../includes/header.php'; ?>

<div class="container my-5">
    <h2 class="text-center mb-4 fade-in">Accesorios Indispensables para Powerlifting</h2>

    <p class="text-justify fade-in">
        Los accesorios en el powerlifting no solo brindan soporte y protección, 
        también mejoran el rendimiento y la seguridad al levantar cargas máximas. 
        Aquí te presentamos tres combinaciones esenciales según el tipo de especialidad.
    </p>

    <!-- BUNDLE 1 -->
    <div class="bundle fade-in my-5">
        <div class="row align-items-center">
            <div class="col-md-5 text-center">
                <img src="../assets/img/bundle.jpg" alt="SBD Bundle" class="img-bundle">
            </div>
            <div class="col-md-7">
                <h4>SBD Bundle - Soporte Total</h4>
                <ul>
                    <li>Cinturón de palanca SBD</li>
                    <li>Rodilleras oficiales de competencia</li>
                    <li>Muñequeras de compresión</li>
                </ul>
                <p class="text-justify">Diseñado para quienes buscan estabilidad y presión articular en los levantamientos pesados.</p>
                <form action="../carrito/agregar_carrito.php" method="POST">
                    <input type="hidden" name="id_producto" value="101">
                    <input type="hidden" name="nombre" value="SBD Bundle">
                    <input type="hidden" name="precio" value="2599.00">
                    <input type="hidden" name="cantidad" value="1">
                    <input type="hidden" name="imagen_url" value="bundle.jpg">
                    <button type="submit" class="btn btn-warning">Agregar al carrito</button>
                </form>
            </div>
        </div>
    </div>

    <!-- BUNDLE 2 -->
    <div class="bundle fade-in my-5">
        <div class="row align-items-center flex-md-row-reverse">
            <div class="col-md-5 text-center">
                <img src="../assets/img/bundle.jpg" alt="Deadlift Bundle" class="img-bundle">
            </div>
            <div class="col-md-7">
                <h4>Deadlift Specialist Bundle</h4>
                <ul>
                    <li>Calcetas completas antiderrapantes</li>
                    <li>Straps (agarre cerrado)</li>
                    <li>Cinturón rígido sin palanca</li>
                    <li>Singlet aprobado por IPF</li>
                </ul>
                <p class="text-justify">Ideal para los entrenamientos de peso muerto más intensos.</p>
                <form action="../carrito/agregar_carrito.php" method="POST">
                    <input type="hidden" name="id_producto" value="102">
                    <input type="hidden" name="nombre" value="Deadlift Bundle">
                    <input type="hidden" name="precio" value="2899.00">
                    <input type="hidden" name="cantidad" value="1">
                    <input type="hidden" name="imagen_url" value="bundle.jpg">
                    <button type="submit" class="btn btn-warning">Agregar al carrito</button>
                </form>
            </div>
        </div>
    </div>

    <!-- BUNDLE 3 -->
    <div class="bundle fade-in my-5">
        <div class="row align-items-center">
            <div class="col-md-5 text-center">
                <img src="../assets/img/bundle.jpg" alt="Bench Press Bundle" class="img-bundle">
            </div>
            <div class="col-md-7">
                <h4>Bench Press Specialist Bundle</h4>
                <ul>
                    <li>Muñequeras reforzadas</li>
                    <li>Coderas de neopreno</li>
                    <li>Playera sin mangas</li>
                </ul>
                <p class="text-justify">Todo lo necesario para pulir tu técnica de press de banca.</p>
                <form action="../carrito/agregar_carrito.php" method="POST">
                    <input type="hidden" name="id_producto" value="103">
                    <input type="hidden" name="nombre" value="Bench Press Bundle">
                    <input type="hidden" name="precio" value="2199.00">
                    <input type="hidden" name="cantidad" value="1">
                    <input type="hidden" name="imagen_url" value="bundle.jpg">
                    <button type="submit" class="btn btn-warning">Agregar al carrito</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>

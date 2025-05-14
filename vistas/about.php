<?php $titulo = "Sobre Mí"; ?>
<?php include '../includes/header.php'; ?>

<div class="container my-5">
    <h2 class="text-center mb-4 fade-in">Sobre Mí</h2>

    <div class="fade-in text-center mb-4">
        <img src="../assets/img/yo.jpg" alt="Diego Leyvas" class="img-circular">
        <h5 class="mt-3">Diego Mario Veytia Leyvas</h5>
    </div>

    <div class="fade-in">
        <p class="text-justify">
            Soy un estudiante comprometido con el deporte y el desarrollo físico y mental. Desde que descubrí el powerlifting,
            encontré una forma de canalizar mi disciplina, esfuerzo y constancia diaria. Este proyecto refleja no solo mi pasión
            por la programación web, sino también por un estilo de vida basado en el entrenamiento intenso, la nutrición adecuada
            y la superación personal.
        </p>
    </div>

    <div class="fade-in mt-5">
        <h4 class="text-center mb-4">Mis Mejores Levantamientos</h4>

        <!-- Squat -->
        <div class="fade-in mb-4">
            <h5 class="mt-4 text-center">🏋️ Squat - 285 kg</h5>
            <div class="video-wrapper">
                <video src="../assets/img/squat.mp4" controls></video>
            </div>
        </div>

        <!-- Bench Press -->
        <div class="fade-in mb-4">
            <h5 class="mt-4 text-center">💪 Bench Press - 185 kg</h5>
            <div class="video-wrapper">
                <video src="../assets/img/bench.mp4" controls></video>
            </div>
        </div>

        <!-- Deadlift -->
        <div class="fade-in mb-4">
            <h5 class="mt-4 text-center">🦵 Deadlift - 260 kg</h5>
            <div class="video-wrapper">
                <video src="../assets/img/deadlift.mp4" controls></video>
            </div>
        </div>
    </div>
</div>

<?php include '../includes/footer.php'; ?>

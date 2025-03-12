<?php 
$file = '';
require_once('header.php'); 
?>

<!-- Formulario, envio de datos a MariaDB -->

<main>
    <div class="container w-100 mt-5">
        <div class="form_container mx-auto w-50 p-4">

            <form action="../logic/post.php" method="post" class="row g-3 mx-auto">

                <!-- Id -->
                <div class="col-md-6 form-floating">

                    <input type="text" class="form-control" name="id" id="floatingInput" placeholder="1234567...">
                    <label for="floatingInput" class="form-label">id</label>

                </div>

                <!-- Ciudad de partida -->

                <div class="col-md-6 form-floating">

                    <input type="text" class="form-control" id="floatingInput" name="ciudadPartida" placeholder="Bogota...">
                    <label for="floatingInput" class="form-label">Ciudad de partida</label>

                </div>

                <!-- Hora y fecha de partida -->

                <div class="col-md-6 form-floating">

                    <input type="datetime-local" id="floatingInput" class="form-control" name="horaFechaPartida">
                    <label for="floatingInput" class="form-label">Hora y fecha de partida</label>

                </div>

                <!-- Ciudad de llegada -->

                <div class="col-md-6 form-floating">

                    <input type="text" class="form-control" id="floatingInput" name="ciudadDestino" adLLegada" placeholder="Medellin...">
                    <label for="floatingInput" class="form-label">Ciudad de llegada</label>

                </div>

                <!-- Hora y fecha de llegada -->

                <div class="col-md-6 form-floating">
                    <input type="datetime-local" id="floatingInput" class="form-control" name="horaFechaDestino">
                    <label for="floatingInput" class="form-label">Hora y llega de llegada</label>
                </div>

                <!-- Estado de vuelo -->

                <div class="col-md-6 form-floating">
                    <input type="text" class="form-control" id="floatingInput" name="esatdoVuelo" placeholder="En abordaje...">
                    <label for="floatingInput" class="form-label">Estado de vuelo</label>
                </div>

                <!-- Novedades de vuelo -->

                <div class="col-md-6 form-floating">
                    <input type="text" class="form-control" id="floatingInput" name="novedadesVuelo" placeholder="Sin novedad...">
                    <label for="floatingInput" class="form-label">Novedades de vuelo</label>
                </div>

                <!-- Costo -->

                <div class="col-md-6 form-floating">
                    <input type="text" class="form-control" id="floatingInput" name="Costo" o" placeholder="9999999">
                    <label for="floatingInput" class="form-label">Costo</label>
                </div>

                <div class="col-md-6">
                    <input type="submit" class="btn btn-secondary" onclick="return add()" value="Agregar registro">
                </div>

                <div class="col-md-6 btn-p">
                    <a class="btn btn-secondary" href="../index.php">Inicio</a>
                </div>
            </form>

        </div>
    </div>

</main>

<script type="text/Javascript" src="../static/js/app.js"></script>

<?php require_once('footer.php'); ?>
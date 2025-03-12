<?php

include("../config/main.php");

$id = $_POST["id"];
$up = "SELECT*FROM vuelos WHERE id={$id}";
$update = mysqli_query($on, $up);
$out = mysqli_fetch_array($update);
$file = '';
require_once('header.php');

?>
<main class="container w-100 mt-5">
    <div class="mx-auto w-50 p-4 form_container">
        <form action="../logic/update.php" method="post" class="row g-3 mx-auto">

            <!-- Id -->
            <div class="col-md-6 form-floating">

                <input type="text" name="id" class="form-control" id="floatingInput" value="<?php echo $id ?>">
                <label for="floatingInput" class="form-label">id</label>

            </div>

            <!-- Ciudad de partida -->

            <div class="col-md-6 form-floating">

                <input type="text" name="ciudadPartida" id="floatingInput" class="form-control" id="floatingInput" value="<?php echo $out['ciudadPartida'] ?>">

                <label for="floatingInput" class="form-label">Ciudad de partida</label>
            </div>

            <div class="col-md-6 form-floating">

                <input type="datetime-local" name="horaFechaPartida" id="floatingInput" class="form-control" value="<?php echo $out['horaFechaPartida'] ?>">

                <label for="floatingInput" class="form-label">Hora y fecha de partida</label>
            </div>

            <div class="col-md-6 form-floating">
                <input type="text" name="ciudadDestino" id="floatingInput" class="form-control" value="<?php echo $out['ciudadDestino'] ?>">
                <label for="floatingInput" class="form-label">Ciudad destino</label>

            </div>

            <div class="col-md-6 form-floating">

                <input type="datetime-local" name="horaFechaDestino" id="floatingInput" class="form-control" value="<?php echo $out['horaFechaDestino'] ?>">
                <label for="floatingInput" class="form-label">Hora y fecha destino</label>

            </div>
            <div class="col-md-6 form-floating">

                <input type="text" name="estadoVuelo" id="floatingInput" class="form-control" value="<?php echo $out['estadoVuelo'] ?>">
                <label for="floatingInput" class="form-label">Estado de vuelo</label>

            </div>
            <div class="col-md-6 form-floating">

                <input type="text" name="novedadesVuelo" id="floatingInput" class="form-control" value="<?php echo $out['novedadesVuelo'] ?>">
                <label for="floatingInput" class="form-label">Novedades de vuelo</label>

            </div>
            <div class="col-md-6 form-floating">

                <input type="text" name="costo" id="floatingInput" class="form-control" value="<?php echo $out['costo'] ?>">

                <label for="floatingInput" class="form-label">Costo</label>
            </div>

            <div class="row px-4 mx-auto mt-2">
                <input type="submit" class="btn btn-secondary mt-2" onclick="update()" value="Actualizar" class="mod">
            </div>

        </form>
        <div class="row mt-3 d-flex justify-content-sm-around px-4">
            <form action="../logic/delete.php" method="post" class="col">
                <input type="text" name="id" class="form-control d-none" value="<?php echo $id ?>">
                <button type="submit" class="btn btn-secondary w-100" onclick="return deletee()">Eliminar</button>
            </form>
            <a class="btn btn-secondary col me-2" href="../index.php">Inicio</a>
        </div>
    </div>

</main>

<script type="text/Javascript" src="../static/js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>

<?php require_once('footer.php'); ?>
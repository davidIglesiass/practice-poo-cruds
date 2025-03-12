<?php
include("config/main.php");

$sel = "SELECT*FROM vuelos";
$data = mysqli_query($on, $sel);

require_once('assets/header.php');

?>

<!-- Barra de navegacion -->

<header class="encabezado my-4 p-3 w-50 mx-auto">
    <div class="p-3 w-50 mx-auto g-3">
        <a href="#" class="logo">
            <img src="static/img/plane.png" alt="Logo del aeroLogo-sena-negro">
            <h2 class="nombre">Aereofacil</h2>
        </a>

        <nav class="row mt- text-center">
            <a href="assets/form-view.php" class="col nav-link">Añadir registro</a>
        </nav>
    </div>
</header>

<!-- Contenido -->

<div class="container">
    <?php if (mysqli_num_rows($data) == 0) { ?>
        <div class="advice-container">
            <h3 class="advice-title"> ¡ No hay vuelos disponibles ! <h3>
        </div>
    <?php } else { ?>
        <table class="table bg-white rounded-2">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Ciudad de partida</th>
                    <th scope="col">Hora y fecha de partida</th>
                    <th scope="col">Ciudad de destino</th>
                    <th scope="col">Hora y fecha de llegada</th>
                    <th scope="col">Estado de vuelo</th>
                    <th scope="col">Novedades de vuelo</th>
                    <th scope="col">Costo</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php while ($row = mysqli_fetch_array($data)) : ?>
                    <tr>
                        <th scope="row">
                            <form action="assets/form-crud.php" method="post">
                                <input type="submit" name="id" class="bg-transparent border-0 text-info" value="<?php echo $row["id"]; ?>">
                            </form>
                        </th>

                        <td><?php echo $row["ciudadPartida"]; ?></td>
                        <td><?php echo $row["horaFechaPartida"]; ?></td>
                        <td><?php echo $row["ciudadDestino"]; ?></td>
                        <td><?php echo $row["horaFechaDestino"]; ?></td>
                        <td><?php echo $row["estadoVuelo"]; ?></td>
                        <td><?php echo $row["novedadesVuelo"]; ?></td>
                        <td><?php echo $row["costo"]; ?></td>
                        </td>
                    <tr>
                    <?php endwhile; ?>
            </tbody>
        </table>
    <?php } ?>

</div>


<?php require_once('assets/footer.php') ?>
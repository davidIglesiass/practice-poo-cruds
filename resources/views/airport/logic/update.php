<?php

    include("../config/main.php");

    $id=$_POST["id"];
    $ciudadPartida=($_POST['ciudadPartida']);
    $horaFechaPartida=($_POST['horaFechaPartida']);
    $ciudadDestino=($_POST['ciudadDestino']);
    $horaFechaDestino=($_POST['horaFechaDestino']);
    $estadoVuelo=($_POST['estadoVuelo']);
    $novedadesVuelo=($_POST['novedadesVuelo']);
    $costo=($_POST['costo']);

    #update

    $update=("UPDATE vuelos SET id={$id}, ciudadPartida='{$ciudadPartida}', horaFechaPartida='{$horaFechaPartida}', ciudadDestino='{$ciudadDestino}', horaFechaDestino='{$horaFechaDestino}', estadoVuelo='{$estadoVuelo}', novedadesVuelo='{$novedadesVuelo}', Costo={$costo} 
    WHERE id={$id}");

    mysqli_query($on, $update);

    if ($update) {
        header("location:../index.php");
    } else {
        echo "
            <script> 
                alert('El vuelo no ha sido actualizado');
                window.history.go(-1);
            </script>
                ";
    }

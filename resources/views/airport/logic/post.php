<?php

    include("../config/main.php");


    $id= ($_POST['id']);
    $ciudadPartida=($_POST['ciudadPartida']);
    $horaFechaPartida=($_POST['horaFechaPartida']);
    $ciudadDestino=($_POST['ciudadDestino']);
    $horaFechaDestino=($_POST['horaFechaDestino']);
    $estadoVuelo=($_POST['estadoVuelo']);
    $novedadesVuelo=($_POST['novedadesVuelo']);
    $costo=($_POST['Costo']);


    $insert="INSERT INTO vuelos (id, ciudadPartida, horaFechaPartida, ciudadDestino, horaFechaDestino, estadoVuelo, novedadesVuelo, Costo) 
    VALUES ({$id},'{$ciudadPartida}', '{$horaFechaPartida}', '{$ciudadDestino}', '{$horaFechaDestino}', '{$estadoVuelo}', '{$novedadesVuelo}', {$costo})";

    mysqli_query($on,$insert);

    if ($insert) {
        header("location:../index.php");
    } else {
        echo "<script> 
                alert('El vuelo no ha sido registrado');
                window.history.go(-1);
            </script>";
    }

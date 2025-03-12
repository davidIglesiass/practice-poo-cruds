<?php

    include("../config/main.php");

    $id=$_POST["id"];

    $delete="DELETE FROM vuelos WHERE id={$id}";

    mysqli_query($on,$delete);

    if ($delete) {
        header("location:../index.php");
    }else{
        echo"<script> 
                    alert('El vuelo no ha sido eliminado');
                    window.history.go(-1);
            </script>";
    }

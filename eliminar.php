<?php

include('conexion.php');

$id=$_POST['id'];

$query="DELETE FROM reservations WHERE id='$id'";

if (mysqli_query($conexion, $query)) {
    header("location: mostrar.php");
} else {
    echo "Hubo un error al actualizar los datos: " . mysqli_error($conexion);
}
?>

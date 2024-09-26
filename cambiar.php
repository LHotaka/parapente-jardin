<?php
include('conexion.php');

$id=$_POST['id'];
$cedula=$_POST['cedula'];
$nombre=$_POST['nombre'];
$correo=$_POST['correo'];
$cantidad=$_POST['cantidad'];
$fecha=$_POST['fecha'];

$query="UPDATE reservations SET cedula='$cedula', nombre='$nombre', correo='$correo', cantidad='$cantidad', fecha='$fecha' WHERE id='$id'";


if (mysqli_query($conexion, $query)) {
    header("location: mostrar.php");
} else {
    echo "Hubo un error al actualizar los datos: ".mysqli_error($conexion);
}
?>

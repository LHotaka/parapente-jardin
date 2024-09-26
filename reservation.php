<?php

    include("conexion.php");
    $cedula=$_POST["cedula"];
    $nombre=$_POST["nombre"];
    $correo=$_POST["correo"];
    $cantidad=$_POST["cantidad"];
    $fecha=$_POST["fecha"];

    mysqli_query($conexion, "INSERT INTO reservations(cedula, nombre, correo, cantidad, fecha) 
    VALUES($cedula, '$nombre', '$correo', '$cantidad','$fecha')") or die("problemas en el select".mysqli_error($conexion));

    header("location:index.php");
    

?>
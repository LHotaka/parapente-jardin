<?php

    include("conexion.php");
    $cedula = $_POST["cedula"];
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $pass= $_POST["contrasena"];

    $hash=hash("sha512",$pass);

    $rol_id=2;

    mysqli_query($conexion, "INSERT INTO usuarios(cedula, nombre, correo, contrasena, rol_id) 
    VALUES($cedula, '$nombre', '$correo', '$hash','$rol_id')") or die("problemas en el select".mysqli_error($conexion));

    header("location:index.php");

?>
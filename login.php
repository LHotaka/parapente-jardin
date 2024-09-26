<?php

include("conexion.php");

$user = $_POST["cedula"];
$pass = $_POST["contrasena"];
$pass = hash("sha512", $pass);

$query = "SELECT * FROM usuarios WHERE cedula='$user' AND contrasena='$pass'";
$result = mysqli_query($conexion, $query);

if (mysqli_num_rows($result) > 0) {
    $fila = mysqli_fetch_assoc($result);
    $name = $fila['nombre'];
    $rol_id = $fila['rol_id'];
    session_start();
    $_SESSION['nombre'] = $name;

    if ($rol_id == '1') {
        header("location: admin.php");
    } elseif ($rol_id == '2') {
        header("location: cliente.php");
    }

}else {
    header("location:login.html");
}

?>

<?php

include('conexion.php');
$id=$_GET['cod'];

$result=mysqli_query($conexion,"select * from reservations where id='$id'") or die("problemas en el select".mysqli_error($conexion));

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/stylem.css">
    <title>Document</title>
</head>
<body>
    <form method="post" action="cambiar.php">
        <?php

        while($row=mysqli_fetch_array($result)){
            echo "<input type='text' name='cedula' id='cedula' value='".$row['cedula']."'><br>";
            echo "<input type='text' name='nombre' id='nombre' value='".$row['nombre']."'><br>";
            echo "<input type='email' name='correo' id='correo' value='".$row['correo']."'><br>";
            echo "<input type='text' name='cantidad' id='cantidad' value='".$row['cantidad']."'><br>";
            echo "<input type='date' name='fecha' id='fecha' value='".$row['fecha']."'><br>";
        }
        ?>
        <input type='hidden' name='id' id='id' value='<?php echo $id;?>'>
        <input type="submit" value="actualizar">
<?php

    require_once('conexion.php');

    $result=mysqli_query($conexion,"select * from reservations;") or die ("problemas en el select".mysqli_error($conexion));

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/stylec.css">
    <title>Reservas realizadas</title>
</head>
<body>
    <h3>RESERVAS REALIZADAS</h3>
    <?php
    echo"<table border='1' width='80%' align='center'> \n";
    echo "<tr><td>ID</td><td>Cedula</td><td>Nombre</td><td>Correo</td><td>cantidad personas</td><td>Fecha asignada</td><td>modificar</td><td>Eliminar</td></tr> \n";
    while($row=mysqli_fetch_array($result)){
        echo"<tr><td>".$row['id']."</td><td>".$row['cedula']."</td><td>".$row['nombre']."</td><td>".$row['correo']."</td><td>".$row['cantidad']."</td><td>".$row['fecha']."</td><td><a href='modificar.php?cod=$row[id]'>modificar</a></td><td><a href='modificarel.php?cod=$row[id]'>cancelar</a></td></tr> \n";
    }
    echo"</table> \n";
    
    
    ?>
</body>
</html>
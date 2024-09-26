<?php

    require_once('conexion.php');

    $result=mysqli_query($conexion,"select * from paquetes;") or die ("problemas en el select".mysqli_error($conexion));

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paquetes</title>
</head>
<body>
    <?php
    echo"<table border='1' width='80%' align='center'> \n";
    echo "<tr><td>id</td><td>nombre</td><td>descripcion</td><td>precio</td><td>modificar</td><td>Eliminar</td></tr> \n";
    while($row=mysqli_fetch_array($result)){
        echo"<tr><td>".$row['id']."</td><td>".$row['nombre']."</td><td>".$row['descripcion']."</td><td>".$row['precio']."</td><td><a href='modificarp.php?cod=$row[id]'>modificar</a></td><td><a href='modificarp.php?cod=$row[id]'>eliminar</a></td></tr> \n";
    }
    echo"</table> \n";
    
    
    ?>
</body>
</html>
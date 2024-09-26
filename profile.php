<?php

include("conexion.php");
session_start();

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Perfil de Desarrollador</title>
    <link rel="stylesheet" href="assets/css/stylepro.css">
</head>
<body>
<form action="profileupdt.php" method="POST">
<div class="card">
    <div class="profile">
        <img src="assets/img/eje1.jpeg" alt="John Doe">
        <h2>John Doe</h2>
        <p>Bay Area, San Francisco, CA</p>
        <button>Follow</button>
    </div>
    <div class="links">
        <a href="#">Twitter</a>
        <a href="#">Instagram</a>
        <a href="#">Facebook</a>
    </div>
    <div class="info">
        <div><strong>Cedula</strong><p>250249955</p></div>
        <div><strong>Nombre</strong><p>Emmanuel loaiza ladino</p></div>
        <div><strong>Telefono</strong><p>(239) 816-9029</p></div>
        <div><strong>Correo</strong><p>(320) 380-4539</p></div>
        <div><strong>Address</strong><p>Bay Area, San Francisco, CA</p></div>
        <button>Edit</button>
    </div>
</div>
</form>

</body>
</html>
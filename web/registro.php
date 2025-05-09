<?php
require_once('autoloader.php');
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title>Cripta del Lore</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/x-icon" href="img/favicon.ico" />
</head>

<body>
    <br>
    <div class="container_registro">
        <div class="registro">
        <form action="" method='POST'>
            <label>Nombre:</label><br>
            <input type="text"><br><br>
            <label>Apellidos:</label><br>
            <input type="text"><br><br>
            <label>Apodo:</label><br>
            <input type="text"><br><br>
            <label>Fecha de nacimiento:</label><br>
            <input type="date" id="nac_registro"><br><br>
            <label>Correo:</label><br>
            <input type="email"><br><br>
            <label>Password:</label><br>
            <input type="password"><br><br>
            <div class="botones_registro">
            <a href="http://localhost:8080/PROYECTO/subir/web/"><button type="submit" id="envia_registro">Atrás</button></a>
            <a ><button type="submit" id="envia_registro">Enviar</button></a>
            </div>
        </form>
        </div>

        <div class="logo_registro"><img src="img/logo1.jpeg"></div>
    </div>
</body>


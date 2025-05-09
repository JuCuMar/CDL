<?php
require_once "autoloader.php";
if (count($_POST) > 0) {
    $lista = new Model();
	$lista->addUser($_POST);
	header("location: index.php");
}
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
        <div class="marco_registro">
            <div class="registro">
            <form action="" method='POST'>
                <label>Nombre:</label><br>
                <input type="text" id="nombre" style="width: 250px;"><br><br>
                <label>Apellidos:</label><br>
                <input type="text" id="apellidos" style="width: 250px;"><br><br>
                <label>Apodo:</label><br>
                <input type="text" id="apodo" style="width: 250px;"><br><br>
                <label>Fecha de nacimiento:</label><br>
                <input type="date" id="nac_registro" style="width: 250px;"><br><br>
                <label>Correo:</label><br>
                <input type="email" id="email" style="width: 250px;"><br><br>
                <label>Password:</label><br>
                <input type="password" id="password" style="width: 250px;"><br><br>
                <div class="botones_registro">
                    <div class="boton_inicio">
                        <a class="inicio" href='http://localhost:8080/PROYECTO/subir/web/'>Inicio</a>
                    </div>
                    <div class="boton_inicio">
                        <a class="envia_registro" href="">Enviar</a>
                    </div>
                </div>
            </form>
            </div>

            <div class="logo_registro"><img src="img/logo1.jpeg"></div>
        </div>
    </div>
</body>


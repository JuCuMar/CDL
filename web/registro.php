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

<body style="background: linear-gradient(#336665, #004443);">
    <br>
    <div class="container_registro">
        <div class="marco_registro">
            <div class="registro">
            <form action="" method="post">
                <label for="nombre">Nombre:</label><br>
                <input name="nombre" type="text" id="nombre" style="width: 250px;"><br><br>
                <label for="apellidos">Apellidos:</label><br>
                <input name="apellidos" type="text" id="apellidos" style="width: 250px;"><br><br>
                <label for="alias">Apodo:</label><br>
                <input name="alias" type="text" id="apodo" style="width: 250px;"><br><br>
                <label for="fecha_nac">Fecha de nacimiento:</label><br>
                <input name="fecha_nac" type="date" id="nac_registro" style="width: 250px;"><br><br>
                <label for="email">Correo:</label><br>
                <input name="email" type="email" id="email" style="width: 250px;"><br><br>
                <label for="contraseña">Password:</label><br>
                <input name="contraseña" type="password" id="password" style="width: 250px;"><br><br>
                <div class="botones_registro">
                    <div class="boton_inicio">
                        <a class="inicio" href='http://localhost:8080/PROYECTO/subir/web/'>Inicio</a>
                    </div>
                    <div class="boton_inicio">
                    <button class="envia_registro" href="" type="submit" name="submit">Enviar</button>
                    </div>
                    
                </div>
            </form>
            </div>

            <div class="logo_registro"><img src="img/logo1.jpeg"></div>
        </div>
    </div>
</body>


<?php
require_once "autoloader.php";
$user = new Usuario();
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
<header>
        <div id="logo">
            <a href="http://localhost:8080/PROYECTO/subir/web/"><img src="img/logo2.png"></a>
        </div>
        <div id="login">
            <a href="http://localhost:8080/PROYECTO/subir/web/registro.php"><img src="img/login.png"><p>Sing in</p></a>
        </div>
    </header>
    <nav>
        <a href="#perfil">PERFIL</a>
        <a href="#compras">COMPRAS</a>
        <a href="#deseados">DESEADOS</a>
        <a href="#opciones">OPCIONES</a>
    </nav>


    </body>

    <footer>
        <div class="footer-row">
            <div class="footer-links">
                <h4>Nosotros</h4>
                <ul>
                    <li><a href="#contacto">Contáctanos</a></li>
                    <li><a href="#about-us">Sobre nosotros</a></li>
                    <li><a href="#politica">Política de privacidad</a></li>
                </ul>
            </div>

            <div class="footer-links">
                <h4>Ayuda</h4>
                <ul>
                    <li><a href="#faq">Preguntas comunes</a></li>
                    <li><a href="#sugerencias">Sugerencias</a></li>
                </ul>
            </div>

            <div class="footer-img">
                <h4>Síguenos</h4>
                <a href="https://instagram.com"><img src="img/ig.png"></a>
                <a href="https://twitter.com"><img src="img/tw.png"></a>
                <a href="https://facebook.com"><img src="img/fb.png"></a>
            </div>

            <div class="footer-img">
                <img id="pato" src="img/pato.png" alt="Pato">
                <audio id="sound" src="pato.mp3" preload="none"></audio>
            </div>
        </div>
        <br>
        <h6>© 2025 CRIPTA-DEL-LORE</h6>
        </div>
    </footer>
<script>
    const pato = document.getElementById('pato');
    const sound = document.getElementById('sound');

    pato.addEventListener('click', () => {
        sound.play();
    });
    </script>
</body>

</html>
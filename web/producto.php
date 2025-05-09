<?php
require_once('autoloader.php');
$lista = new Model();
$id = $_GET['id'];
$ruta = $_GET['ruta'];
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
            <a href=""><img src="img/login.png"><p>Log in</p></a>
        </div>
    </header>

    <nav>
        <a href="http://localhost:8080/PROYECTO/subir/web/videojuegos.php">VIDEOJUEGOS</a>
        <a href="http://localhost:8080/PROYECTO/subir/web/juegos_mesa.php">JUEGOS DE MESA</a>
        <a href="http://localhost:8080/PROYECTO/subir/web/figuras.php">FIGURAS</a>
        <a href="http://localhost:8080/PROYECTO/subir/web/libros.php">LIBROS</a>

        <form action="#" method="post" id="busqueda">
            <input type="text" id="search" placeholder="Buscar...">
            <button type="submit">Buscar</button>
        </form>
    </nav>
    


    <?php  $lista->showProduct($id, $ruta)  ?>
    <!--<section id="section_descripcion">
        <div class="container_info">
            <div class="portada"><img src="img/videojuegos/vid1.jpg"></div>

            <div class="container_compras">
                <div class="titulo"><h2>The elder scrolls IV: Oblivion Remastered</h2></div>
                <div class="precio">Precio: 31'99€</div>
                <div class="stock">Stock disponible: 50 ud.</div>
                <div class="botones">
                <button type="submit" id="like"><img src="img/like.png"></button>
                <a href="">
                <button type="submit" id="comprar">Comprar</button>
                </a>
                </div>
            </div>
        </div>

        <div class="descripcion">
            <h2>DESCRIPCIÓN</h2>

            <p>Baldurs Gate 3 es un juego de rol (RPG) de fantasía desarrollado por Larian Studios. Es la tercera entrega principal de la aclamada serie Baldurs Gate y se basa en el sistema de reglas de la quinta edición de Dungeons & Dragons (D&D). 
            El juego te sumerge en un mundo rico y detallado, los Reinos Olvidados, donde tus decisiones moldean la historia y determinan tu legado.
            La aventura comienza con tu personaje siendo infectado por un parásito mental de los azotamentes. En tu búsqueda por librarte de esta amenaza, te cruzarás con otros supervivientes con destinos entrelazados. 
            Juntos, formaréis un grupo y os embarcaréis en un viaje épico lleno de compañerismo, traición, sacrificio y la tentación del poder absoluto.
            </p>

        </div>
    </section>-->
  
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
    </footer>

    <script>
        const pato = document.getElementById('pato');
        const sound = document.getElementById('sound');

        pato.addEventListener('click', () => {
            sound.play();
        });
    </script>
</html>
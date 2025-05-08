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

    <h1>VIDEOJUEGOS</h1>
    
    <section id="section_productos">
        <article class="container_producto">
            <div class="recuadro"><a href="http://localhost:8080/PROYECTO/subir/web/producto.php"><img class="miniatura" src="img/nov3.jpg"></div>
            <div class="pie_miniatura"><h3>BALDUR'S GATE</h3>Precio: 31'99€</a></div>
        </article>
        <article class="container_producto">
            <div class="recuadro"><a href="http://localhost:8080/PROYECTO/subir/web/producto.php"><img class="miniatura" src="img/nov3.jpg"></div>
            <div class="pie_miniatura"><h3>BALDUR'S GATE</h3>Precio: 31'99€</a></div>
        </article>
        <article class="container_producto">
            <div class="recuadro"><a href="http://localhost:8080/PROYECTO/subir/web/producto.php"><img class="miniatura" src="img/nov3.jpg"></div>
            <div class="pie_miniatura"><h3>BALDUR'S GATE</h3>Precio: 31'99€</a></div>
        </article>
        <article class="container_producto">
            <div class="recuadro"><a href="http://localhost:8080/PROYECTO/subir/web/producto.php"><img class="miniatura" src="img/nov3.jpg"></div>
            <div class="pie_miniatura"><h3>BALDUR'S GATE</h3>Precio: 31'99€</a></div>
        </article>
        <article class="container_producto">
            <div class="recuadro"><a href="http://localhost:8080/PROYECTO/subir/web/producto.php"><img class="miniatura" src="img/nov3.jpg"></div>
            <div class="pie_miniatura"><h3>BALDUR'S GATE</h3>Precio: 31'99€</a></div>
        </article>
        <article class="container_producto">
            <div class="recuadro"><a href="http://localhost:8080/PROYECTO/subir/web/producto.php"><img class="miniatura" src="img/nov3.jpg"></div>
            <div class="pie_miniatura"><h3>BALDUR'S GATE</h3>Precio: 31'99€</a></div>
        </article>
        <article class="container_producto">
            <div class="recuadro"><a href="http://localhost:8080/PROYECTO/subir/web/producto.php"><img class="miniatura" src="img/nov3.jpg"></div>
            <div class="pie_miniatura"><h3>BALDUR'S GATE</h3>Precio: 31'99€</a></div>
        </article>
        <article class="container_producto">
            <div class="recuadro"><a href="http://localhost:8080/PROYECTO/subir/web/producto.php"><img class="miniatura" src="img/nov3.jpg"></div>
            <div class="pie_miniatura"><h3>BALDUR'S GATE</h3>Precio: 31'99€</a></div>
        </article>
        <article class="container_producto">
            <div class="recuadro"><a href="http://localhost:8080/PROYECTO/subir/web/producto.php"><img class="miniatura" src="img/nov3.jpg"></div>
            <div class="pie_miniatura"><h3>BALDUR'S GATE</h3>Precio: 31'99€</a></div>
        </article>
        
    </section>
  
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
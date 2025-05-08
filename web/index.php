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

    <h1>NOVEDADES</h1>
    <section>
        
        <div class="container_inicio">
            <div class="recuadro"><img class="miniatura_fija" src="img/nov1.jpg"></div>
            <div class="texto_noticia"><p><h3>¡Ya disponible The Elder Scrolls IV: Oblivion™ Remastered!</h3><br>The Elder Scrolls IV: Oblivion™ Remastered moderniza el Juego del Año de 2006 con unos gráficos impresionantes y una jugabilidad mejorada. Explora el vasto paisaje de Cyrodiil como nunca e impide que las fuerzas de Oblivion usurpen el territorio en uno de los mejores RPG de la historia, desarrollado por los galardonados Bethesda Game Studios.</p></div>
        </div>
        <div class="container_inicio">
            <div class="recuadro"><img class="miniatura_fija" src="img/nov2.jpg"></div>
            <div class="texto_noticia"><p><h3>Nuevos personajes de Warhammer</h3><br>Desvelado un nuevo Caballero Imperial: el Defender. El modelo Defensor amplía el catálogo de Caballeros Questoris de los Caballeros Imperiales como gran novedad de su Codex de Décima Edicion.</p></div>
        </div>
        <div class="container_inicio">
            <div class="recuadro"><img class="miniatura_fija" src="img/nov3.jpg"></div>
            <div class="texto_noticia"><p><h3>Larian niega un DLC de Baldur's Gate 3</h3><br>¿Por qué Baldur's Gate 3 no ha tenido DLC? Larian responde con honestidad: 'Es aburrido'. Larian descartó hacer DLC para Baldur's Gate 3 por falta de motivacion creativa; el estudio prefiere concentrarse en nuevos proyectos ambiciosos que entusisasmen a su equipo.</p></div>
        </div>
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
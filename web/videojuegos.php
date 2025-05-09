<?php
require_once("autoloader.php");
$lista = new Model();

/*$productsPerPage = 9;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$totalProducts = $lista->countVideojuegos();
$totalPages = $totalProducts > 0 ? ceil($totalProducts / $productsPerPage) : 1;
$page = max(1, min($page, $totalPages));
$offset = ($page - 1) * $productsPerPage;
$products = $lista->getPaginatedVideojuegos($productsPerPage, $offset);

// Obtener el número de página actual
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;

// Calcular el índice inicial y final para la paginación
$startIndex = ($page - 1) * $productsPerPage;
$productsToShow = array_slice($products , $startIndex, $productsPerPage);*/
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
            <a href=""><img src="img/login.png"><p>Sing in</p></a>
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
    
    <?= $lista->showVideojuegos() ?>
    
        <!--
        
        <div class="paginacion">
        <?php if ($page > 1): ?>
            <a href="?page=1"><< &nbsp</a>
            <a href="?page=<?php echo $page - 1; ?>"><&nbsp</a>
        <?php endif; ?>
        <span>Página <?php echo $page; ?> de <?php echo $totalPages; ?></span>
        <?php if ($page < $totalPages): ?>
            <a href="?page=<?php echo $page + 1; ?>">&nbsp> &nbsp</a>
            <a href="?page=<?php echo $totalPages; ?>">>></a>
        <?php endif; ?> 
        
        -->
  
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
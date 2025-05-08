<?php

require_once "Connection.php";

class Model extends Connection {

    public function getVideojuegos() {
        $query = 'SELECT id, nombre, stock, precio FROM Producto WHERE id_categoria = 1';
        return $this->getConn()->query($query);
    }

    public function showVideojuegos() {
        $log = 1;
        $result = $this->getVideojuegos();
        if ($result->rowCount() > 0) {
            echo '<section id="section_productos">';
            while($value = $result->fetch(PDO::FETCH_ASSOC)){
                echo '<article class="container_producto">';
                echo '<div class="recuadro"><a href="http://localhost:8080/PROYECTO/subir/web/producto.php?id:'.$value['id'].'"><img class="miniatura" src="img/videojuegos/vid'.$log.'.jpg"></div>';
                echo '<div class="pie_miniatura"><h3>' . $value['nombre'] . '</h3></div><div class="precio_miniatura">Precio: ' . $value['precio'] . '€</a></div>';
                echo '</article>';
                $log++;
            }
            echo '</section>';
        } else {
            echo '0 results';
        }
    }

    public function getJuegosMesa() {
        $query = 'SELECT id, nombre, stock, precio FROM Producto WHERE id_categoria = 2';
        return $this->getConn()->query($query);
    }

    public function showJuegosMesa() {
        $log = 1;
        $result = $this->getJuegosMesa();
        if ($result->rowCount() > 0) {
            echo '<section id="section_productos">';
            while($value = $result->fetch(PDO::FETCH_ASSOC)){
                echo '<article class="container_producto">';
                echo '<div class="recuadro"><a href="http://localhost:8080/PROYECTO/subir/web/producto.php?id:'.$value['id'].'"><img class="miniatura" src="img/juegosmesa/mes'.$log.'.jpg"></div>';
                echo '<div class="pie_miniatura"><h3>' . $value['nombre'] . '</h3></div><div class="precio_miniatura">Precio: ' . $value['precio'] . '€</a></div>';
                echo '</article>';
                $log++;
            }
            echo '</section>';
        } else {
            echo '0 results';
        }
    }

    public function getFiguras() {
        $query = 'SELECT id, nombre, stock, precio FROM Producto WHERE id_categoria = 3';
        return $this->getConn()->query($query);
    }

    public function showFiguras() {
        $log = 1;
        $result = $this->getFiguras();
        if ($result->rowCount() > 0) {
            echo '<section id="section_productos">';
            while($value = $result->fetch(PDO::FETCH_ASSOC)){
                echo '<article class="container_producto">';
                echo '<div class="recuadro"><a href="http://localhost:8080/PROYECTO/subir/web/producto.php?id:'.$value['id'].'"><img class="miniatura" src="img/figuras/fig'.$log.'.jpg"></div>';
                echo '<div class="pie_miniatura"><h3>' . $value['nombre'] . '</h3></div><div class="precio_miniatura">Precio: ' . $value['precio'] . '€</a></div>';
                echo '</article>';
                $log++;
            }
            echo '</section>';
        } else {
            echo '0 results';
        }
    }

    public function getLibros() {
        $query = 'SELECT id, nombre, stock, precio FROM Producto WHERE id_categoria = 4';
        return $this->getConn()->query($query);
    }

    public function showLibros() {
        $log = 1;
        $result = $this->getLibros();
        if ($result->rowCount() > 0) {
            echo '<section id="section_productos">';
            while($value = $result->fetch(PDO::FETCH_ASSOC)){
                echo '<article class="container_producto">';
                echo '<div class="recuadro"><a href="http://localhost:8080/PROYECTO/subir/web/producto.php?id:'.$value['id'].'"><img class="miniatura" src="img/libros/lib'.$log.'.jpg"></div>';
                echo '<div class="pie_miniatura"><h3>' . $value['nombre'] . '</h3></div><div class="precio_miniatura">Precio: ' . $value['precio'] . '€</a></div>';
                echo '</article>';
                $log++;
            }
            echo '</section>';
        } else {
            echo '0 results';
        }
    }

}

?>
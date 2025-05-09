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
                $ruta="img/videojuegos/vid$log.jpg";
                echo '<article class="container_producto">';
                echo '<div class="recuadro"><a href="http://localhost:8080/PROYECTO/subir/web/producto.php?id='.$value['id'].'&ruta='.$ruta.'"><img class="miniatura" src="img/videojuegos/vid'.$log.'.jpg"></div>';
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
                $ruta="img/juegosmesa/mes$log.jpg";
                echo '<article class="container_producto">';
                echo '<div class="recuadro"><a href="http://localhost:8080/PROYECTO/subir/web/producto.php?id='.$value['id'].'&ruta='.$ruta.'"><img class="miniatura" src="img/juegosmesa/mes'.$log.'.jpg"></div>';
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
                $ruta="img/figuras/fig$log.jpg";
                echo '<article class="container_producto">';
                echo '<div class="recuadro"><a href="http://localhost:8080/PROYECTO/subir/web/producto.php?id='.$value['id'].'&ruta='.$ruta.'"><img class="miniatura" src="img/figuras/fig'.$log.'.jpg"></div>';
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
                $ruta="img/libros/lib$log.jpg";
                echo '<article class="container_producto">';
                echo '<div class="recuadro"><a href="http://localhost:8080/PROYECTO/subir/web/producto.php?id='.$value['id'].'&ruta='.$ruta.'"><img class="miniatura" src="img/libros/lib'.$log.'.jpg"></div>';
                echo '<div class="pie_miniatura"><h3>' . $value['nombre'] . '</h3></div><div class="precio_miniatura">Precio: ' . $value['precio'] . '€</a></div>';
                echo '</article>';
                $log++;
            }
            echo '</section>';
        } else {
            echo '0 results';
        }
    }
    public function countVideojuegos() {
        $sql = "SELECT COUNT(*) FROM Producto WHERE id_categoria = 1";
        $stmt = $this->conn ->query($sql);
        return $stmt;
        

    }
    public function getPaginatedVideojuegos($limit,$offset){
        $sql = "SELECT * FROM Producto WHERE id_categoria = 1 LIMIT $limit OFFSET $offset;";
        $stmt = $this->conn ->query($sql);
        return $stmt;
    }

    public function getProduct($id, $ruta) {
        $sql = 'SELECT id, nombre, stock, precio, descripcion FROM Producto WHERE id = '.$id.'';
        return $this->getConn()->query($sql);
    }

    public function showProduct($id, $ruta) {
        $log = 1;
        $result = $this->getProduct($id, $ruta);
        if ($result->rowCount() > 0) {
            echo '<section id="section_descripcion">';
            while($value = $result->fetch(PDO::FETCH_ASSOC)){
                echo '<div class="container_info">';
                echo '<div class="portada"><img src="'.$ruta.'"></div>';
                echo '<div class="container_compras">';
                echo '<div class="titulo"><h2>'.$value['nombre'].'</h2></div>';
                echo '<div class="precio">Precio: '.$value['precio'].'€</div>';
                echo '<div class="stock">Stock disponible: '.$value['stock'].' ud.</div>';
                echo '<div class="botones">';
                echo '<button type="submit" id="like"><img src="img/like.png"></button>';
                echo '<a href="">';
                echo '<button type="submit" id="comprar">Comprar</button>';
                echo '</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
                echo '<div class="descripcion">';
                echo '<h2>DESCRIPCIÓN</h2>';
                echo '<p>'.$value['descripcion'].'</p>';
                echo '</div>';
            }
            echo '</section>';
        } else {
            echo '0 results';
        }
    }

    public function addUser($request) {
        $email = $request["email"];
        $contraseña = $request["contraseña"];
        $alias = $request["alias"];
        $nombre = $request["nombre"];
        $apellidos = $request["apellidos"];
        $fecha_nac = $request["fecha_nac"];

        $stmt = $this->conn->prepare("INSERT INTO Usuario (email,contraseña,alias,nombre,apellidos,fecha_nac) VALUES (?,?,?,?,?,CURDATE())");
        
        if (!$stmt->execute([$email, $contraseña, $alias, $nombre, $apellidos, $fecha_nac])) {
            echo "Error: " . $this->conn->error . "<br>";
        }
    }
}

?>
<?php

    class Producto{

        private $ID;
        private $nombre;
        private $stock;
        private $precio

        private function __construct($id = "", $name = "", $stockage = "", $price = ""){
            $this->ID = $id;
            $this->nombre = $name;
            $this->stock = $stockage;
            $this->precio = $price;
        }

        public function getID(){
            return $this->ID;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getStock(){
            return $this->stock;
        }

        public function getPrecio(){
            return $this->precio;
        }

    }

?>
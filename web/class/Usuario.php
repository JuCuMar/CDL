<?php

    class Usuario {

        private $nombre;
        private $correo;
        private $contraseña;
        private $ID;
        private $fecha_nac;
        private $direccion;
        private $telefono;

        public function __construct($name = "", $email = "", $pw = "", $id = "", $date = "", $adress = "", $phone = ""){
            $this->nombre = $name;
            $this->correo = $email;
            $this->contraseña = $pw;
            $this->ID = $id;
            $this->fecha_nac = $date;
            $this->direccion = $adress;
            $this->telefono = $phone;
        }
    
        public function getNombre(){
            return $this->nombre;
        }

        public function getCorreo(){
            return $this->correo;
        }

        public function getContraseña(){
            return $this->contraseña;
        }

        public function getID(){
            return $this->ID;
        }

        public function getFechaNac(){
            return $this->fecha_nac;
        }

        public function getDireccion(){
            return $this->direccion;
        }

        public function getTelefono(){
            return $this->telefono;
        }
    }

?>
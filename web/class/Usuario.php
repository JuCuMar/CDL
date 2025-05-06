<?php

    class Usuario {

        private $ID;
        private $nombre;
        private $correo;
        private $contraseña;
        private $fecha_nac;
        private $direccion;
        private $telefono;

        public function __construct($name = "", $email = "", $pw = "", $id = "", $date = "", $adress = "", $phone = ""){
            $this->ID = $id;
            $this->nombre = $name;
            $this->correo = $email;
            $this->contraseña = $pw;
            $this->fecha_nac = $date;
            $this->direccion = $adress;
            $this->telefono = $phone;
        }
    
        public function getID(){
            return $this->ID;
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
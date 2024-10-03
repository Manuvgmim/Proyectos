<?php 
    class Persona{
        private $DNI;
        private $nombre;
        private $mail;

        public function __construct($d,$n,$m){
            $this->DNI = $d;
            $this->nombre = $n;
            $this->mail = $m;
        }

        public function getDNI(){
            return $this->DNI;
        }    
        public function getNombre(){
            return $this->nombre;
        }
        public function getMail(){
            return $this->mail;
        }

        public function setDNI($valor){
            $this->DNI = $valor;
        }
        
        public function setNombre($valor){
            $this->nombre = $valor;
        }

        public function setMail($valor){
            $this->mail = $valor;
        }

        public function Mostrar(){
            echo "DNI: $this->DNI <br> Nombre: $this->nombre <br> Mail: $this->mail <br>";
        }
    }
?>
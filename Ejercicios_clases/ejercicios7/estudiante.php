<?php 
    class Estudiante extends persona{
        private $numExpediente;

        public function  __construct($d,$n,$m,$ne){
            parent::__construct($d,$n,$m);
            $this->numExpediente=$ne;
        }
        public function getNumExpediente(){
            return $this->numExpediente;
        }
        public function setNumExpediente($valor){
            $this->numExpediente = $valor;
        }

        public function Mostrar(){
            echo parent::Mostrar(). " Num. Expediente: ".$this->numExpediente;
        }
    }


?>
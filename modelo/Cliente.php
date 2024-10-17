<?php
    class Cliente{
        private $nombre;

        public function __construct($nombre){
            $this->nombre = $nombre; //Modificando la propiedad de forma segura
        }

        public function getNombre(){
            return $this->nombre; //Metodo encapsulado 
        }
    }
?>
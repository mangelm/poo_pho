<?php

    include_once 'modelo/Producto.php';

    class ProductoFisico extends Producto {
        private $peso;

        public function __construct($nombre, $precio, $peso) {
            parent::__construct($nombre, $precio);
            $this->peso = $peso;
        }

        public function calculaPrecioFinal() {
            return $this->precio * ($this->peso * 0.1);
        }
    }
?>

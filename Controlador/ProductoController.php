<?php 
    class ProductoController{
        // private $servicio; 

        public function __construct(){
            //Aqui creamos la construccion del objeto servicio
        }

        public function listarProducto(){
            //usar el atributo servicio y traerse los datos de BBDD para mostrarlo en la pagina
        }

        public function ejecuta(){
            $productos = $this->listarProducto();

            //Cargar la vista y guardar los productos
            require_once('Vista/Main.php');
        }
    }
?>
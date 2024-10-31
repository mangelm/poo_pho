<?php

define('CONSTANTE_2', 'Constante 2');
const CONSTANTE_1 = 'Constante 1';

function transformar_dia($dia){
    $day = $_POST['day'];
    //Otro metodo
        switch ($day) {
            case '1':
                echo "Lunes";
                break;
            case '2':
                echo "Martes";
                break;
            case '3':
                echo "Miércoles";
                break;
            case '4':
                echo "Jueves";
                break;
            case '5':
                echo "Viernes";
                break;
            case '6':
                echo "Sábado";
                break;
            case '7':
                echo "Domingo";
                break;    
        }
    }

?>
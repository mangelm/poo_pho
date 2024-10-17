<?php
    require_once 'Cliente.php'; //para importar
    require_once 'ProductoFisico.php';
    require_once 'ProductoDigital.php';

    $c1 = new Cliente("Miguel Angel Moreno");
    $c2 = new Cliente("Rocio Gonzalez");

    $productofisico = new ProductoFisico('Telefono',1000,0.5);
    echo "Nombre: " . $productofisico->getNombre() . ", Precio: " . $productofisico->getPrecio() . ", Peso: " . $productofisico->calculaPrecioFinal() . "<br>";

    $productodigital = new ProductoDigital('Telefono',1000,0.5);
    echo "Nombre: " . $productodigital->getNombre() . ", Precio: " . $productodigital->getPrecio() . ", Peso: " . $productodigital->calculaPrecioFinal() . "<br>";
?>

<ol>
    <li><?= $c1->getNombre() ?></li>
    <li><?= $c2->getNombre() ?></li>
</ol>
<?php
    require_once 'Cliente.php'; //para importar
    $c1 = new Cliente("Miguel Angel Moreno");
    $c2 = new Cliente("Rocio Gonzalez");

?>

<ol>
    <li><?= $c1->getNombre() ?></li>
    <li><?= $c2->getNombre() ?></li>
</ol>
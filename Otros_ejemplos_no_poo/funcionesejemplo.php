<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="widthz=device-width, initial-scale=1.0">
    <title>Dia de la semana</title>
</head>
<body>
    <?php
        include_once('funciones.php');
        if (isset($_POST['day'])) {
            switch ($day) {
                case '1':
                    echo "<p style='color:red;'>Lunes</p>";
                    break;
            }

        }

        echo CONSTANTE_1;
        echo CONSTANTE_2;
    ?>
    <form action="" method="POST">
        <label for="day">Introduce un número del 1 al 7:</label>
        <input type="number" name="day" id="day">
        <input type="submit" value="Enviar">
    </form>
    <?php
        echo 'C1 -> '
    ?>
</body>
</html>
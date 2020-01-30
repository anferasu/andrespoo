<!DOCTYPE html>

<?php
require 'clases/Vehiculo.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
//        $ford = new Vehiculo('2133HGF', 'Rojo', false);
//        var_dump($ford);
//        $ford->apagar();
        $renault = new Vehiculo();
        $renault->encender();
        var_dump($renault);
        ?>
    </body>
</html>

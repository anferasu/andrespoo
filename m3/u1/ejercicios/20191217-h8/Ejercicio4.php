<!DOCTYPE html>
<?php
require 'clases/Coche.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $coche = new coche(); // Instaciamos la clase Coche
        $coche->color='Rojo'; // Llenamos algunas propiedades
        $coche->marca='Honda';
        $coche->numero_puertas='4';
        $coche->llenarTanque(10); // Utilizamos los metodos
        $coche->acelerar();
        $coche->acelerar();
        $coche->acelerar();
        var_dump($coche);        
        ?>
    </body>
</html>

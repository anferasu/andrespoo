
<!DOCTYPE html>

<?php
require 'clases/Vehiculo1.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $objeto = new Vehiculo1("2133HGF","red");
        echo "Maricula: " . $objeto->matricula ."<br>";
        echo "Color: " . $objeto->color;
        ?>
    </body>
</html>

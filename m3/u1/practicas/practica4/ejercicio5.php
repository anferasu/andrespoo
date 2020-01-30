<?php
session_start();

spl_autoload_register(function ($nombre_clase) {
    include $nombre_clase . '.php';
});

use clases\E5;

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
            if(isset($_GET["boton"])){
                $diaMes=$_GET['fecha'];
                var_dump($diaMes);
                $objeto=new E5($diaMes);
                echo "El dia de la semana es: " . $objeto->getDia() . "<br />";
            }
        ?>
        <form method="get">
            <div>
                <label for="ifecha">Introduce una fecha</label>
                <input type="date" name ="fecha" id="ifecha"> 
            </div>
            <button name="boton">Enviar</button>    
        </form>
        
        </body>
</html>

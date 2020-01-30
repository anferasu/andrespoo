<?php
session_start();

spl_autoload_register(function ($nombre_clase) {
    include $nombre_clase . '.php';
});

use clases\E6;

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
                $numero=$_GET['numero'];
                if (!$numero){
                    $numero = mt_rand(1,10);
                }
                $objeto=new E6($numero);
                //echo "La tabla de multiplicar de: " . $objeto->getTabla() . "<br />";
            }
        ?>
        <form method="get">
            <div>
                <label for="inumero">Introduce un numero</label>
                <input type="number" name ="numero" id="inumero"> 
            </div>
            <button name="boton">Enviar</button>    
        </form>
        
        </body>
</html>

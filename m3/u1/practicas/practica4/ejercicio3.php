<?php
session_start();

spl_autoload_register(function ($nombre_clase) {
    include $nombre_clase . '.php';
});

use clases\E3;
?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
            if(!isset($_GET["numero"])){
                $_SESSION["numeros"]=[];
            }else{
                $_SESSION["numeros"][]=$_GET["numero"];
            }
            if(count($_SESSION["numeros"])==3){
                $objeto=new E3($_SESSION["numeros"]);
            ?>
                        <div>
            Los numeros introducidos son : <?php var_dump($_SESSION["numeros"]); ?>
        </div>
        <?php
                echo "La media es: " . $objeto->getMedia() . "<br />";
                echo "La moda es: " . $objeto->getModa() . "<br />";
                echo "La mediana es: " . $objeto->getMediana() . "<br />";
                echo "La desviacion tipica es: " . $objeto->getDesviacionEstandar() . "<br />";
                $_SESSION["numeros"]=[];
            }
        ?>
        <form method="get">
            <div>
                <label for="inumero">Introduce un numero</label>
                <input type="text" name ="numero" id="inumero"> 
            </div>
            <button name="boton">Enviar</button>    
        </form>
        
        <div>
            Los numeros introducidos hasta ahora son : <?php var_dump($_SESSION["numeros"]); ?>
        </div>
        </body>
</html>

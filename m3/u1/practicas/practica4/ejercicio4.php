<?php
session_start();

spl_autoload_register(function ($nombre_clase) {
    include $nombre_clase . '.php';
});

use clases\E4;
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
                $objeto=new E4($_SESSION["numeros"]);
            ?>
            <div>
            Los numeros introducidos son : <?php var_dump($_SESSION["numeros"]); ?>
            </div>
        <?php
                echo "El area del triangulo es: " . $objeto->getAreaTriangulo() . "<br />";
                echo "El perimetro del triangulo es: " . $objeto->getPerimetro() . "<br />";
                
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

<?php
/**
 * Arranco la sesion para almacenar las variables por sesion
 */

session_start();

/**
 * Cargo las librerias
 */

require_once './datos.php';
require_once './libreria.php';
$mensaje="Jugando";
$terminar=0;

/** 
 * obtener la palabra en funcion del estado de la sesion
 */
if(!isset($_SESSION["palabra"])){
    // obtengo la palabra
    $palabra=obtenerPalabra($palabras); // variable que tiene la palabra
    $_SESSION["palabra"]=$palabra;
    $_SESSION["aciertos"]=[]; // aqui coloco las letra que vaya acertando
    $_SESSION["fallos"]=[]; // aqui coloco las letra que vaya fallando
}else{
    $palabra=$_SESSION["palabra"];
}

$cajas=dibujar($palabra); // me prepara las cajas 

if(isset($_GET["letra"])){
    $letra=$_GET["letra"];
    /**
     * cajas es un array enumerado
     * donde en la posicion 0 tengo los div a dibujar
     * y en la posicion 1 si ha encontrado la letra
     */
    $cajas=jugar($palabra, $letra,$_SESSION["aciertos"]);
    // compruebo si he acertado
    if($cajas[1]){
        for($c=0;$c<$cajas[1];$c++){
            $_SESSION["aciertos"][]=$letra;
        }
        if(count($_SESSION["aciertos"])==strlen($palabra)){
            $mensaje="Has ganado";
            $terminar=1;
        }
    }else{
        //compruebo si he fallado
        $_SESSION["fallos"][]=$letra;
        if(count($_SESSION["fallos"])==10){
            $mensaje="La has cagado";
            $terminar=1;
        }
        
    }
}

$fallos= dibujarFallos($_SESSION["fallos"]);    
$imagen=count($_SESSION["fallos"]) . ".png";
//var_dump($_SESSION);
//var_dump($palabra);
//var_dump($_GET["letra"]);


?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="estilos.css"/>
    </head>
    <body>
        <h2>
            <?= $mensaje ?>
        </h2>
        <?php
            if(!$terminar){
                include_once './formulario1.php';
            }else{
               include_once './formulario2.php';
            }
        ?>
        <div id="palabra">
        <?= $cajas[0] ?>
        </div>
        <div id="fallos">
        <?= $fallos ?>
        </div>
        <div class="dibujo">
            <img src="./imagenes/<?= $imagen ?>" alt="">
        </div>
        
        
    </body>
</html>
<?php
if($terminar){
    session_destroy();
}
?>
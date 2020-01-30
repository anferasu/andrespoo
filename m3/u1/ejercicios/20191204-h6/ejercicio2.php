<!DOCTYPE html>

<?php

if(!isset($_REQUEST['boton'])){
    $mal=true;
    $error = "Introducir los datos en el formulario";
}elseif (empty ($_REQUEST["numero"])){
    $mal=true;
    $error="El numero es obligatorio";
}elseif ($_REQUEST["numero"]<0){    
    $mal=true;
    $error="El numero introducido debe ser mayor que 0";
}else{
    $mal=false;
}
?>


<html>
    <head>
        <meta charset="UTF-8">
<!--    1 paso se carga el meta-->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<!--    2 paso se carga el css-->
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <style>
        .row > div {
           
           margin: 10px 0;
        };
        .uno {background: #9c9c9c;}
        </style>
        <title></title>
    </head>
    <body>
        <!--    4 paso se carga el clase container de bootstrap-->
        <div class="container">
            <div class="row center">
                <div class="col uno">
                    <h1>Ejercicio 2</h1>
                    <?php
                    if (!$mal){
                        var_dump($_REQUEST);
                    }else{
                        echo $error;
                    ?>
                  
                    <form name="f">
                        <input type="number" name="numero" value="" placeholder="Numero" />
                        <input type="submit" value="Enviar" name ="boton" />              
                    </form>
                    
                    <?php
                    }
                    ?>
               </div>
            </div>
        </div>
        <!--    3 paso se carga el jquery-->
        <script src="js/jquery-3.4.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <?php
        // put your code here
        ?>
    </body>
</html>

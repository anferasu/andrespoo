<!DOCTYPE html>
<?php
   function __autoload($nombre_clase){
       require 'clases\\' . $nombre_clase . '.php';
   }
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
         $padre = new Persona('Ramon', 'abramo', '35');
         $hijo=$padre;
         $hija=clone($padre);
         $hijo->setEdad(100);
         $hija->setEdad(50);
         var_dump($hija);
         var_dump($hijo); //ramon abramo , 100
         var_dump($padre); //ramon abramo , 35
         var_dump($hija); //ramon abramo , 50
         ?>
    </body>
</html>

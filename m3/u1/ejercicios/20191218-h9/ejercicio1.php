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
          $camion = new Camion();
          $camion->encender();
          $camion->cargar(10);
          $camion->verificar_encendido();
          $camion->matricula = 'MDU - 293';
          $camion->apagar();
          $autobus = new Autobus();
          $autobus->encender();
          $autobus->subir_pasajeros(5);
          $autobus->verificar_encendido();
          $autobus->matricula = 'EDF - 923';
          $autobus->apagar();
        ?>
    </body>
</html>

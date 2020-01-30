<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
           $suma=0;
           $numero=2;
           while($numero<=1000) {
               $suma=$suma+$numero;
               echo $numero . "+";
               $numero=$numero+2;              
            }
        echo "La suma de todos los numeros pares de 2 y 1000 es:" . $suma;   
        ?>
    </body>
</html>

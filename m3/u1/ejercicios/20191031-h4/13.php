<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $contador=1;
        $suma=0;
        while($contador<=100){
            echo"$contador";
                if ($contador < 100){
                    echo"+";
                }
            $suma=$suma+$contador;
            $contador++;
        }
          echo  '<br>' . "la suma total de los numeros del 1 al 100 es: " . $suma;
        ?>
    </body>
</html>

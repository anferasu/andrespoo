<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style type="text/css">
            <!--
            #layer1 {
                position: absolute;
                left: 62px;
                top: 38px;
                width: 264px;
                height: 170px;
                z-index: 1;
            }
            #layer2 {
                position: absolute;
                left: 535px;
                top: 38px;
                width: 264px;
                height: 170px;
                z-index: 1;
            }
            
            -->
            
            
            
        </style>
    </head>
    <body>
        <?php
         $numero1=10;
         $numero2=3;
        ?>
        <div id="layer1">
            <p>Los numeros utilizados son:</p>
            <p> <?php echo "$numero1"; ?> </p>
            <p> <?php echo "$numero2"; ?> </p>
        </div>    
            
        <div id="layer2">
            <table width="100%" height="137" border="0">
                <tr>
                    <td width="41%">Suma</td>
                    <td width="59%"><?php echo $numero1+$numero2; ?></td>
                </tr>
                <tr>
                    <td>Resta</td>
                    <td><?php echo $numero1-$numero2; ?></td>
                </tr>
                 <tr>
                    <td>Producto</td>
                    <td><?php echo $numero1*$numero2; ?></td>
                </tr>
                 <tr>
                    <td>Cociente</td>
                    <td><?php echo $numero1/$numero2; ?></td>
                </tr>
                 <tr>
                    <td height="24">Resto</td>
                    <td><?php echo $numero1%$numero2; ?></td>
                </tr>
            </table>
        </div>
    </body>
</html>

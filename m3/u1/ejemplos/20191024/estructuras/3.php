<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        // crear un array
        $numeros=[
            1,4,5,6,7
        ];
        //variable contador
        $contador=0;
                
        for($contador=0;$contador<count($numeros);$contador++){
        ?>
        <div> 
            <?= $numeros[$contador] ?> 
        </div>
        <?php
            }
            for($contador=0;$contador<count($numeros);$contador++){
                echo "<div>$numeros[$contador]</div>";
            }
        ?>
    </body>
</html>

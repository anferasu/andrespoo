<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $c=0; //contador
            $a=[1,5];
            
            do {
                echo $a[$c] . ",";
                $c++;
                }while ($c< count($a));
            
        
        ?>
    </body>
</html>

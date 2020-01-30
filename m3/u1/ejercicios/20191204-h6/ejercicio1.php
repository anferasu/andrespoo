<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
<!--    1 paso se carga el meta-->
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<!--    2 paso se carga el css-->
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
        <style>
        .row > div {
           background: #f2f2f2;
           margin: 10px 0;
        };
        </style>
        <title></title>
    </head>
    <body>
        <!--    4 paso se carga el clase container de bootstrap-->
        <div class="container">
            <div class="row">
                <div class="col">
                    <?php $url = "http://" . $_SERVER['HTTP_HOST']  . $_SERVER['PHP_SELF']; 
                          $posicion = strrpos($url, "/");
                          $path = substr($url, 0, $posicion);
                          echo ("Location: $path" . "/destino.php?error='Introduce los datos necesarios'");
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

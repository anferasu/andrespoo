<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="<?= $this->urlBase ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= $this->urlBase ?>/css/bootstrap-theme.min.css">
        <link href="<?= $this->urlBase ?>/css/home.css" rel="stylesheet" type="text/css"/>
        <script src="<?= $this->urlBase ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <?php 
            $menu=(new \clases\MenuBootstrap([
            "Listar Noticias"=>$this->crearRuta(["controlador"=>"noticias","accion"=>"index"]),
            "Listar Entradas"=>$this->crearRuta(["accion"=>"listar"]),
        ]));
            $menu->setClases("navbar-inverse");
            $menu->setEnlaceHome($this->crearRuta(["accion"=>"index"]));
            $menu->setHome('<span class="glyphicon glyphicon-home"></span> Inicio');
            echo $menu->setActivo($this->activo)->render();
        ?>
        <div class="container">
            
        <?php
            require_once("vistas/" . $this->vista. ".php");
        ?>
            
        
        <div class="row">
        <?php echo $this->pie; ?>
        </div>
        </div>
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?= $this->urlBase ?>/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="<?= $this->urlBase ?>/js/vendor/bootstrap.min.js"></script>

        <script src="<?= $this->urlBase ?>/js/main.js"></script>       
    </body>
</html>

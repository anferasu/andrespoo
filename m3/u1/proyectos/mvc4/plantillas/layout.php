<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet" />
        <link rel="stylesheet" href="<?= $this->urlBase ?>/css/jquery-ui.css">
        <link rel="stylesheet" href="<?= $this->urlBase ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= $this->urlBase ?>/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="<?= $this->urlBase ?>/css/animate.css">
        <link href="<?= $this->urlBase ?>/css/home.css" rel="stylesheet" type="text/css"/>
        <script src="<?= $this->urlBase ?>/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
        <?php 
            $menu=(new \clases\MenuBootstrap([
            "Noticias"=>$this->crearRuta(["controlador"=>"noticias","accion"=>"listarDesplegable"]),
            "Usuarios"=>$this->crearRuta(["controlador"=>"usuarios","accion"=>"index"])               
        ]));
            $menu->setClases("navbar-inverse");
            $menu->setEnlaceHome($this->crearRuta(["accion"=>"index"]));
            $menu->setHome('<i class="fa fa-home" aria-hidden="true"></i>');
            echo $menu->setActivo($this->activo)->render();
        ?>

        </div>
            
        <?php
            require_once("vistas/" . $this->vista. ".php");
        ?>
            
            
        </div>
        <br><br><br><br>
        
 <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?= $this->urlBase ?>/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="<?= $this->urlBase ?>/js/vendor/bootstrap.min.js"></script>
        <script src="<?= $this->urlBase ?>/js/vendor/jquery-ui.js"></script>
        <script src="<?= $this->urlBase ?>/js/vendor/scrollreveal.js"></script>
        <script src="<?= $this->urlBase ?>/js/vendor/jquery.aniview.js"></script>
        <script src="<?= $this->urlBase ?>/js/main.js"></script>       
        <script src="<?= $this->urlBase ?>/js/php.js"></script>       
    </body>
</html>

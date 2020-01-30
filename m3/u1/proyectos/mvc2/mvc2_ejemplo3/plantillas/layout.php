<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="<?= $this->urlBase ?>/css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="<?= $this->urlBase ?>/css/home.css" rel="stylesheet" type="text/css"/>
        
    </head>
    <body>
        <div class="menu">
        <?php 
            $menu=(new \clases\Menu([
            "Entradas"=>$this->crearRuta(["accion"=>"listar"]),
            "Noticias"=>$this->crearRuta(["controlador"=>"noticias","accion"=>"listar"]),                
            "Introducir Entrada"=>$this->crearRuta(["accion"=>"introducir"]),
            "Introducir Noticias"=>$this->crearRuta(["controlador"=>"noticias","accion"=>"introducir"]),
        ]));
            echo $menu->setActivo($this->activo)->html();
        ?>
        </div>
        <div class="contenido">
            <div>
        <?php
            require_once("vistas/" . $this->vista. ".php");
        ?>
            </div>
        </div>
        <div class="pie">
        <?php echo $this->pie; ?>
        </div>
    </body>
</html>

<!DOCTYPE html>
<?php
spl_autoload_register(function ($nombre_clase) {
    include $nombre_clase . '.php';
});
use clases\Circulo;
use clases\Cuadro_1;
use clases\Poligono;
use clases\Punto;

?>

<?php

 $color =[
    'Amararillo' => 'rgb(255, 255, 0)',
    'Naranja'=>'rgb(255, 128, 0)',
    'Azul' => 'rgb(0, 0, 255)',
    'Rojo' => 'rgb(255, 0, 0)',
    'Gris' => 'rgb(128, 128, 128)',
    'Verde' => 'rgb(0, 255, 128)',
];


?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css"/>
<!--        <link rel="stylesheet" href="css/1.css">-->
        <style>
		.example2 svg {
			display: block;
			margin: 10px auto;
			width:100%;
			max-height:200px;
			border-bottom: 3px solid #EEE;
			
		}
		
        </style>
        <title></title>
    </head>
    <body>
        <div class="jumbotron text-center">
                <h1>Ejemplo dibujar</h1>
                <p>Figuras circulo, cuadro y poligono con coordenadas</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                  <form method="post" action="index.php">
                   <section class="dibujo">
                    <h1>Circulo</h1>
                    <label name="ix">X</label>
                    <input id ="ix" type="number" name="x" placeholder="53">
                    <label name="iy">Y</label>
                    <input id ="iy" type="number" name="y" placeholder="53">
                    <?php 
                    if (!empty($_POST ["x"])){
                        $x= $_POST["x"];
                        $y= $_POST["y"];
                        $color1 =$_POST["listcolor"];
                        $objetoCirculo = new Circulo(new Punto($x, $y));
                        $objetoCirculo->setColor($color1);
                        echo $objetoCirculo->dibujar();
                    }
                    ?>
                    </div>
                    <div class="col-md-6">
                    <h1>Cuadro</h1>
                    <label name="icx">X1</label>
                    <input id ="icx" type="number" name="cx">
                    <label name="icy">Y1</label>
                    <input id ="icy" type="number" name="cy"><br>
                    <label name="icx1">X2</label>
                    <input id ="icx1" type="number" name="cx1">
                    <label name="icy1">Y2</label>
                    <input id ="icy1" type="number" name="cy1">
                    <?php
                    if (!empty($_POST ["cx"])){
                        $cx= $_POST["cx"];
                        $cy= $_POST["cy"];
                        $cx1= $_POST["cx1"];
                        $cy1= $_POST["cy1"];
                        $color2=$_POST["listcolor"];
                        $objetoCuadro = new Cuadro_1(new Punto($cx, $cy),new Punto($cx1, $cy1));
                        $objetoCuadro->setColor($color2);
                        echo $objetoCuadro->dibujarCuadro();
                    }
                    ?>
                    <div>
                        <input type="checkbox" id="ired" name="check" value="1">
                        <label for="ired">Redondear</label>
                                              
                    </div>
                    
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-6">
                        <select name="listcolor">
                        <?php
                            foreach ($color as $indice => $valor) {
                        ?>
                            <option value="<?= $valor ?>"><?= $indice ?></option>
                        <?php
                        }
                        ?>
                        </select>
                    </div>
                    <div class="col-md-6">
                    <h1>Poligono</h1>
                    <label name="icc">Cordenadas</label>
                    <input id ="icc" type="text" name="cor" placeholder="0,0 100,0 100,100 0,100">
                    <?php
                    if (!empty($_POST ["cor"])){
                        $cordenada= $_POST["cor"];
                        $objetoPuntos=[];
                        $objetoPuntos[]=$cordenada;
                        $cordenada= explode(" ", $cordenada);
                        foreach ($cordenada as $v){
                            $temporal= explode(",", $v);
                            $objetoPuntos[]=new Punto($temporal[0],$temporal[1]);
                        }
                        //var_dump($objetoPuntos);
                        $color3=$_POST["listcolor"];
                        $objetoPoligono = new Poligono($objetoPuntos);
                        $objetoPoligono->setColor($color3);
                        echo $objetoPoligono->dibujarPoligono();
                    }
                    ?>
                    </div>
                    <button>DIBUJAR</button>
                    </section>
                  </form>
                                   
                </div>
            </div>
        </div>
        <script src="js/jquery-3.4.1.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.masked-input.js"></script>

        
        <?php
        
        ?>
    </body>
</html>

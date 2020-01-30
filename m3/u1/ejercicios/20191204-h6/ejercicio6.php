<!DOCTYPE html>
<?php
if ($_REQUEST) {
    $mal = false;
} else {
    $mal = true;
}
$ciudades = [
    'SS' => 'Santander',
    'PA' => 'Palencia',
    'PO' => 'Potes',
    'Va' => 'Valencia'
];
?>
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
                    <h1>Ejercicio 6</h1>    
                    <?php
                    if ($mal) {
                        ?>
                        <form name="f">
                           
                                <?php
                                foreach ($ciudades as $indice => $valor) {
                                    ?>
                                     <input type="checkbox" value="<?= $indice ?>" name="ciudad[]" /><label><?= $valor ?></label><br/>        
                                    <?php
                                }
                                ?>
                            
                            <input type="submit" value="Enviar" name="boton" />
                        </form>
                        <?php
                            } else {
                            var_dump($_REQUEST ["ciudad"]);
                            echo "los elementos Seleccionados son: <br />";                                                        
                            foreach ($_REQUEST ["ciudad"] as $value) {
                                 echo "$value-$ciudades[$value] <br />";
                                 
                                }
                            }
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
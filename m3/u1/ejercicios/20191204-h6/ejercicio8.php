<!DOCTYPE html>
<?php
if ($_REQUEST) {
    $mal = false;
} else {
    $mal = true;
}


$continente = [
    'Asia' => [
        [
            'pais' =>'Delhi',
            'valor' =>'0',
        ],
        [
            'pais' =>'Hong Kong',
            'valor' =>'1',
        ],
        [
            'pais' =>'Mumbai',
            'valor' =>'2',
        ],
        [
            'pais' =>'Tokyo',
            'valor' =>'3',
        ],
    ],    
        
    'Europa' => [
        [
            'pais' =>'Amsterdam',
            'valor' =>'4',
        ],
        [
            'pais' =>'London',
            'valor' =>'5',
        ],
        [
            'pais' =>'Moscow',
            'valor' =>'6',
        ],
    ],        
    'North America' => [
        [    
            'pais' =>'Los Angeles',
            'valor' =>'7',
        ],
        [
            'pais' =>'New York',
            'valor' =>'8',
        ],
    ],    
    
    'South America' => [
        [
            'pais' =>'Buenos Aires',
            'valor' =>'9',
        ],
        [
            'pais' =>'Sao Paulo',
            'valor' =>'10',
        ],
    ],
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
                    <h1>Ejercicio 8</h1>    
                    <?php
                    if ($mal) {
                        ?>
                        <form name="f">
                             <select name="ciudad">
                                <?php
                                foreach($continente as $index=>$value){
                                ?>
                                  <optgroup label="<?= $index ?>"></optgroup>;
                                <?php
                                 
                                 $array = count($value);
                                  for($inc=0; $inc<$array; $inc++) {
                                    $pais = $value[$inc]['pais'];
                                    $valor = $value[$inc]['valor'];
                                ?>
                                  <option value="<?= $valor ?>"><?= $pais ?></option>'
                                    
                                <?php
                                    
                               }
                             }
                             ?>
                            </select>
                                       
                            
                            <input type="submit" value="Enviar" name="boton" />
                        </form>
                        <?php
                            } else {
                            var_dump($_REQUEST ["ciudad"]);
                            echo "La ciudad seleccionada es: <br />";    
                                                      
                                $continuar=1;    
                                foreach ($continente as $key) {
                                    if(!$continuar){
                                        break;
                                    }
                                        foreach ($key as $value) {
                                            if($_REQUEST['ciudad']==$value['valor']){
                                                echo $value['pais'];
                                                $continuar=0;
                                                break;
                                            }
                                        }
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
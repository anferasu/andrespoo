<!DOCTYPE html>
<?php
if ($_REQUEST) {
    $mal = false;
} else {
    $mal = true;
}


$continente = [
    'Asia' => [
        0 =>'Delhi',
        1 =>'Hong Kong',
        2 =>'Mumbai',
        3 =>'Tokyo',
        ],    
        
    'Europa' => [
        4 =>'Amsterdam',
        5 =>'London',
        6 =>'Moscow',
        ],        
    'North America' => [
        7 =>'Los Angeles',
        8 =>'New York',
        ],    
    
    'South America' => [
        9 =>'Buenos Aires',
        10 =>'Sao Paulo',
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
                    <form name="f" method="post">
                            <select name="ciudad[]" multiple>
                                <?php
                                foreach($continente as $index=>$value){
                                ?>
                                  <optgroup label="<?= $index ?>"></optgroup>;
                                <?php
                                 
                                foreach ($value as $key => $v) {
                                ?>    
                                  <option value="<?= $key ?>"><?= $v ?></option>'
                                                         
                                <?php
                                    
                               }
                             }
                             ?>
                            </select>
                                       
                            
                            <input type="submit" value="Enviar" name="boton" />
                        </form>
                        <?php
                            } else {
                           var_dump($_POST ["ciudad"]);
                            echo "los elementos Seleccionados son: <br />";                                                        
                             $continuar=1;    
                                foreach ($continente as $key) {
                                    if(!$continuar){
                                        break;
                                    }
                                        foreach ($key as $x =>$value) {
                                            foreach ($_POST ["ciudad"] as  $v) {
                                                if ($v==$x){
                                                    echo "$v-$value <br />";    
                                                }
                                                
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
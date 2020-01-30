<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <form method="get">
                <div><label>Ingrese valor 1</label><input name="num1" type="number"></div>
                <div><label>Ingrese valor 2</label><input name="num2" type="number"></div>
                <div><label>Ingrese valor 3</label><input name="num3" type="text"></div>
                <div><button>enviar</button></div>
            </form>
        </div>
        <?php
        /*$c=0;//contador
        $a=[1,55,6,7,8];
        $a[30]=23;
        /*for($c=0;$c< count($a);$c++){
            echo $a[$c] . ",";
        }
        
         for($c=count($a)-1;$c>=0;$c--){
            echo $a[$c] . ",";
        }*/
        
     /*foreach ($a as $indice => $valor) {
         echo "$indice: $valor ," ;
     }*/
     
    /* while ($c< count($a)){
         echo $a[$c] . ",";
         $c++;
     }
     
     do {
         echo $a[$c] . ",";
         $c++;
     } while ($c< count($a));*/
    if(isset($_REQUEST['num1'])){
        $op1=0;
        $op2=0;
        $x='';
        $r=0;
        $op1 = $_REQUEST['num1'];
        $op2 = $_REQUEST['num2'];
        $x = $_REQUEST['num3'];
        
        echo "<br>"."Los valores digitados son: valor1 = $op1  valor2 = $op2 y valor3 = $x";
        
        if ($op1>$op2){
            $op2=0;
        }else{
            $op1=0;
        }
        
        echo "<br>"."Decision simple - el valor1 es: $op1 y el valor2 es: $op2";

        while ($op1>$op2){

            echo "<br>". "valor $op2";

            echo "<br>". "Recorrido while $op2";

            $op2=$op2+1;
        }
        
        do {
        
            echo "<br>". "Recorrido do while $op2";
            $op1++;
            
        }while ($op1>$op2);
        
        for($i=1;$i<=10;$i++){
            $r=$i*5;
            echo "<br>". "el valor de r es: $r , el valor de i es: $i";
        }   
        
        switch ($x){
            case 1:
                $op1=0;
                echo "<br>". "el valor de op1 es: $op1";
                break;
            case 2:
                 $op2=0;
                echo "<br>". "el valor de op2 es: $op2";
                break;
            case 3:
                echo "<br>". "el valor de op1 es: $op1";
                break;
            default:
                echo "<br>". "el valor de op2 es: $op2";
                break;
            
            
        }
    }
        ?>
    </body>
</html>

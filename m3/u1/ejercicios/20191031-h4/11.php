<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <form method="post">
                <table border="0">
                    <div><tr><td><label>Introduzca el valor "A"</label></td><td> <input name="num1" type="number"></td></tr></div>
                    <div><tr><td><label>Introduzca el valor "B"</label></td><td> <input name="num2" type="number"></td></tr></div>
                    <div><tr><td><label>Introduzca el valor "C"</label></td><td> <input name="num3" type="number"></td></tr></div>
                    <div><tr><td><input type="submit" name="send" value="Enviar" /></td></tr></div>
                </table>
            </form>
        </div>
        <div>------------------------------------------------------------------------</div>
        <?php
        $a = 0;
        $b = 0;
        $c = 0;
        $d = 0;
        $x = 0;
        $x1=0;
        $x2=0;
        $k=0;
        $z=0;
        if (isset($_POST['send'])) {
            $a = $_REQUEST['num1'];
            $b = $_REQUEST['num2'];
            $c = $_REQUEST['num3'];
            $d = pow($b, 2) - (4 * $a * $c);
            if ($a!=0){
            if ($d == 0){
                $x = -$b/ (2*$a);
                echo 'Es un trinomio cuadrado perfecto y X = ' . $x;
                }else if ($d > 0) {
                $x1= (-$b - sqrt($d))/(2*$a); 
                $x2= (-$b + sqrt($d))/(2*$a);
                echo 'Tiene dos soluciones reales X1 = ' . $x1 .' y x2 = ' . $x2;
                }else{
                $k= -$b/(2*$a);
                $z= (sqrt(abs($d)))/(2*$a);
                echo 'Tiene dos soluciones complejas X1 = ' . $k .'+' . $z . 'i y X2 =' . $k . '-' . $z .'i';
            }
            }else{
            echo 'El valor A no puede ser un cero' ;
            }
        }
        ?>
    </body>
</html>

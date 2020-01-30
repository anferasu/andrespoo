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
            <form method="post">
                <table border="0">
                    <div><tr><td><label>Introduce base</label></td><td> <input name="num1" type="number"></td></tr></div>
                    <div><tr><td><label>Introduce altura</label></td><td> <input name="num2" type="number"></td></tr></div>
                    <div><tr><td><input type="submit" name="send" value="Enviar" /></td></tr></div>
                </table>
            </form>
        </div>
        <div>------------------------------------------------------------------------</div>
        
        <?php
        
         if (isset($_POST['send'])) {
             $base=0;
             $altura=0;
             $perimetro=0;
             $area=0;
             $base=$_REQUEST['num1'];
             $altura=$_REQUEST['num2'];
             
             $perimetro=(2*$base)+(2*$altura);
             $area=$base*$altura;
             
             echo "<br>". 'el perimetro es : '.$perimetro;
             echo "<br>". 'el area es:'. $area;
             
         }
        
        ?>
    </body>
</html>

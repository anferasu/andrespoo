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
                    <div><tr><td><label>Escribir tarifa</label></td><td> <input name="num1" type="number"></td></tr></div>
                    <div><tr><td><label>Escribir precio</label></td><td> <input name="num2" type="number"></td></tr></div>
                    <div><tr><td><input type="submit" name="send" value="Enviar" /></td></tr></div>
                </table>
            </form>
        </div>
        <div>------------------------------------------------------------------------</div>
        <?php
        
        if (isset($_POST['send'])){
            $tarifa=0;
            $precio=0;
            $Dto=0;
            $dto=0;
            
            $tarifa=$_REQUEST['num1'];
            $precio=$_REQUEST['num2'];
            
            $Dto=$tarifa-$precio;
            $dto=($Dto*100)/$tarifa;
            
            echo "porcentaje de descuento = $dto";
                        
        }
        
        ?>
    </body>
</html>

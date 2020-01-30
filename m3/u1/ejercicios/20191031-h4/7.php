<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Ejercicio 7 Hoja 4</h1>

        <div>
            <form method="post">
                <table border="0">
                    <div><tr><td><label>Ingrese Horas</label></td><td> <input name="num1" type="number"></td></tr></div>
                    <div><tr><td><label>Ingrese Precio Hora</label></td><td> <input name="num2" type="number"></td></tr></div>
                    <div><tr><td><label>Ingrese Nombre empleado</label></td><td> <input name="num3" type="text"></td></tr></div>
                    <div><tr><td><input type="submit" name="send" value="Enviar" /></td></tr></div>
        

        <?php
         if (isset($_POST['send'])) {
            $horas=0;
            $precioHora=0;
            $nombreempelado="";
            
            $horas = $_REQUEST['num1'];
            $precioHora=$_REQUEST['num2'];
            $nombreempelado=$_REQUEST['num3'];
            
            if ($horas<=40){
                
                $salario=$horas*$precioHora;
            }else{
                $salario= 40*$precioHora+1.5*$precioHora*($horas-40);
            }
            
            if(isset($_REQUEST["anterior"])){
                $salarioAnterior=$_REQUEST["anterior"] . ";$salario";
            }else{
                $salarioAnterior=$salario;
            }
        ?>
        <div>
                <tr>
                    <td><input type="hidden" name="anterior" value="<?= $salarioAnterior ?>"></td>
                </tr>
        </div>
        </table>
        </form>
        </div>
        <div>------------------------------------------------------------------------</div>
        
        <?php     
            echo "El salario mensual de " . $nombreempelado . "es: " . $salario;
            var_dump($salarioAnterior);
            var_dump(explode(";", $salarioAnterior));
        }else{
            
        ?>
        </table>
        </form>
        </div>
        <div>------------------------------------------------------------------------</div>
        <?php
            
        }
            
        ?>
        
        
    </body>
</html>

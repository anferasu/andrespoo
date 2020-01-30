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
                    <div><tr><td><label>Escribir numero 1</label></td><td> <input name="num1" type="number"></td></tr></div>
                    <div><tr><td><label>Escribir numero 2</label></td><td> <input name="num2" type="number"></td></tr></div>
                    <div><tr><td><input type="submit" name="send" value="Enviar" /></td></tr></div>
                </table>
            </form>
        </div>
        <div>------------------------------------------------------------------------</div>
        <?php
        
        if(isset($_POST['send'])){
            $numero1=0;  
            $numero2=0;  
            $numero1=$_REQUEST['num1'];
            $numero2=$_REQUEST['num2'];
            if ($numero1>$numero2){
                echo "el numero mayor es: $numero1";
            }elseif($numero2>$numero1){
                echo "el numero mayor es: $numero2";
            }else{
                echo "los numeros son iguales";
            }
            
        }
        
        ?>
    </body>
</html>

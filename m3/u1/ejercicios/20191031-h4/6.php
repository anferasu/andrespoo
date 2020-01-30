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
                    <div><tr><td><label>Introduzca un numero</label></td><td> <input name="num1" type="number"></td></tr></div>
                    <div><tr><td><input type="submit" name="send" value="Enviar" /></td></tr></div>
                </table>
            </form>
        </div>
        <div>------------------------------------------------------------------------</div>
        <?php
        if (isset($_POST['send'])) {
            $numero1 = 0;
            $var = 0;
            $numero1 = $_REQUEST['num1'];
            $var = $numero1 % 2;
            if ($numero1 == 0) {
                echo 'Introduzca numero diferente de cero "0"';
            } else {
                if ($var == 0) {
                    echo "el numero es par";
                } else {
                    echo "el numero es impar";
                }
            }
        }
        ?>
    </body>
</html>

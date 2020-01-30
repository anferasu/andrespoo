<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Ejercicio 8 Hoja 4</h1>

        <div>
            <form method="post">
                <table border="0">
                    <div><tr><td><label>Ingrese primer numero</label></td><td> <input name="num1" type="number"></td></tr></div>
                    <div><tr><td><label>Ingrese segundo numero</label></td><td> <input name="num2" type="number"></td></tr></div>
                    <div><tr><td><label>Ingrese tercer numero</label></td><td> <input name="num3" type="number"></td></tr></div>
                    <div><tr><td><input type="submit" name="send" value="Enviar" /></td></tr></div>
                </table>
            </form>
        </div>
        <div>------------------------------------------------------------------------</div>

        <?php
        if (isset($_POST['send'])) {

            $numero1 = 0;
            $numero2 = 0;
            $numero3 = 0;

            $numero1 = $_REQUEST['num1'];
            $numero2 = $_REQUEST['num2'];
            $numero3 = $_REQUEST['num3'];

            if ($numero1 + $numero2 == $numero3) {
                echo 'Iguales';
            } elseif ($numero1 + $numero3 == $numero2) {
                echo 'Iguales';
            } elseif ($numero2 + $numero3 == $numero1) {
                echo 'Iguales';
            } else {
                echo 'Distintas';
            }
        }
        ?>
    </body>
</html>

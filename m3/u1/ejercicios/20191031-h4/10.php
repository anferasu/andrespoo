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
        $numero = 0;
        $numeroOculto = rand(1, 100);
        if (isset($_POST['send'])) {

            $numero = $_REQUEST['num1'];
            $numero = intval($numero);
            var_dump($numero);
            var_dump($numeroOculto);
            if ($numero != $numeroOculto) {
                if ($numero > $numeroOculto) {
                    echo 'Te pasas';
                } else {
                    echo 'No llegas';
                }
            } else {
                echo 'Son iguales';
            }
        }
        ?>
    </body>
</html>

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
                    <div><tr><td><label>Escribir distancia en millas</label></td><td> <input name="num1" type="number"></td></tr></div>
                    <div><tr><td><input type="submit" name="send" value="Enviar" /></td></tr></div>
                </table>
            </form>
        </div>
        <div>------------------------------------------------------------------------</div>
        <?php
        if (isset($_POST['send'])) {
            $dmillas = 0;
            $dmetros = 0;
            $dmillas = $_REQUEST['num1'];
            $dmetros = $dmillas * 1852;
            echo "Distancia en metros es: $dmetros";
        }
        ?>
    </body>
</html>

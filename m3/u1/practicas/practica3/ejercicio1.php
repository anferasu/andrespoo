<?php
if ($_POST){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellidos'];
    $edad = $_POST['edad'];
    
    echo "Nombre Completo: " . strtoupper($nombre) . '<br />';
    echo "Apellidos: " . strtoupper($apellido) . '<br />';
    echo "Edad: " . strtoupper($edad) . '<br />';
}       
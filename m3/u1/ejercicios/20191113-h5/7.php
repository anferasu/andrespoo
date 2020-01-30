<?php

function numeros()
{
    global $numero1;
    global $numero2;
    $numero1=12;
    $numero2=22;
}

numeros();
echo "<pre>";
echo $numero1;
echo "</pre>";
echo "<pre>";
echo $numero2;
echo "</pre>";

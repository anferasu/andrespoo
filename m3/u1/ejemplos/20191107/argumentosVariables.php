<?php

function uno(...$argumentos) {
    foreach ($argumentos as $value) {
        echo $value;
    }
}

uno(1);
uno(1,2);
uno (1,2,3);
    
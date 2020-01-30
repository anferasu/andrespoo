<?php

function reverso (){
    
    global $a;
    
    return array_reverse($a);
    
    
}
$a = [1,2,3,4,5,6,7,8,9];
print_r(reverso($a));


<?php
$array = array(20, 20, 20, 30, 30, 30, 20, 50, 100, 10000, 1000000);

function mediana(array $array)
{
	sort($array);
    $count = count($array); //total numbers in array
    $middleval = floor(($count-1)/2); // find the middle value, or the lowest middle value
    if($count % 2) { // odd number, middle is the median
    	$median = $array[$middleval];
    } else { // even number, calculate avg of 2 medians
    	$low = $array[$middleval];
    	$high = $array[$middleval+1];
    	$median = (($low+$high)/2);
    }
    return $median;
}

echo mediana($array);

//devuelve 30ian($array);
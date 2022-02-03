<?php

for($i = 1000; $i < 10000; $i+= 2){
    $num = $i;
    $prevDig = $num % 10;
    $num = intdiv($num, 10);
    $flagLow = true;
    $flagHigh = true;
    while($num > 0){
        if($num % 10 >= $prevDig){
            $flagLow = false;
        }
        if($num % 10 <= $prevDig){
            $flagHigh = false;
        }
        $prevDig = $num % 10;
        $num = intdiv($num, 10);
    }
    if($flagHigh or $flagLow){
        echo $i . "\n";
    }
}
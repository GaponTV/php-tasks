<?php

function checkNum($num){
    $prevDig = $num % 10;
    $num = intdiv($num, 10);
    return (checkHigh($num, $prevDig) || checkLow($num, $prevDig));
}

function checkHigh($num, $prevDig){
    while($num > 0){
        if($num % 10 >= $prevDig){
            return false;
        }
        return checkHigh(intdiv($num, 10),$num % 10);
    }
    return  true;
}

function checkLow($num, $prevDig){
    while($num > 0){
        if($num % 10 <= $prevDig){
            return false;
        }
        return checkLow(intdiv($num, 10),$num % 10);
    }
    return  true;
}


for($i = 1000; $i < 10000; $i+= 2){
    if(checkNum($i)){
        echo $i . "\n";
    }
}
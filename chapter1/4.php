<?php

function checkNum($num){
    $prevDig = $num % 10;
    $num = intdiv($num, 10);
    if(checkHigh($num, $prevDig)){
        return true;
    }else{
        if(checkLow($num, $prevDig)){
            return true;
        }
    }
    return false;
}

function checkLow($num, $prevDig){
    while($num > 0){
        if($num % 10 >= $prevDig){
            return false;
        }
        $prevDig = $num % 10;
        $num = intdiv($num, 10);
    }
    return  true;
}

function checkHigh($num, $prevDig){
    while($num > 0){
        if($num % 10 <= $prevDig){
            return false;
        }
        $prevDig = $num % 10;
        $num = intdiv($num, 10);
    }
    return  true;
}


for($i = 1000; $i < 10000; $i+= 2){
    if(checkNum($i)){
        echo $i . "\n";
    }
}
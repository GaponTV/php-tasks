<?php
function checkNum($num): bool
{
    $uniqueDig = [];
    for($i = 0; $i < 4; $i++){
        for($j = 0; $j < count($uniqueDig); $j++){
            if($uniqueDig[$j] === $num % 10){
                return false;
            }
        }
        $uniqueDig[] = $num % 10;
        $num = intdiv($num, 10);
    }
    return true;
}


for($i = 1000; $i < 10000; $i++){
    if(checkNum($i)){
        echo $i . "\n";
    }
}
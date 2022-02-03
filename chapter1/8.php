<?php
function checkNum($num): bool
{
    $uniqueDig = 0;
    for($i = 0; $i < 4; $i++){
        $checkNum = $uniqueDig;
        for($j = $i; $j > 0; $j--){
            if($checkNum % 10 == $num % 10){
                return false;
            }
            $checkNum = intdiv($checkNum, 10);
        }
        $uniqueDig += ($num % 10) * 10 ** $i;
        $num = intdiv($num, 10);
    }
    return true;
}


for($i = 1000; $i < 10000; $i++){
    if(checkNum($i)){
        echo $i . "\n";
    }
}
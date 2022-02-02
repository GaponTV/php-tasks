<?php
$N = 1000000;
for($i = 0; $i < $N; $i++){
    if(checkNum($i)){
        if(checkNum($i ** 2)){
            echo "num " . $i . " sqr " . ($i ** 2) . "\n";
        }

    }
}

function checkNum($num): bool
{
    $lengthNum = 0;
    for($lengthNum; intdiv($num, 10 ** $lengthNum) > 9; $lengthNum++);
    for($i = 0; $num > 9 or ($lengthNum - $i*2) > 0; $i++){
        if(intdiv($num, 10 ** ($lengthNum - $i*2)) != $num % 10){
            return false;
        }
        $num = $num % 10 ** ($lengthNum - $i*2);
        $num = intdiv($num, 10);

    }
    return true;
}
<?php
$numbers = [18, 22, 24, 100, 123, 24, 1, 13, 999, 9999, 100096002];
for($i = 0; $i < count($numbers); $i++){
    if(!($numbers[$i] % sumDigits($numbers[$i]))){
        echo $numbers[$i] . "\n";
    }
}


function sumDigits($num): int
{
    $sum = 0;
    while($num > 0){
        $sum += $num % 10;
        $num = intdiv($num, 10);
    }
    return $sum;
}
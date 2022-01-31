<?php
$n = 18;
$count = 0;
for($i = 1000; $i < 10000; $i++){
    $sum = 0;
    $checkNum = $i;
    while($checkNum > 0){
        $sum += $checkNum % 10;
        $checkNum = intdiv($checkNum, 10);
    }
    if($sum == $n){
        $count++;
    }
}
echo $count;
<?php
$N = 12340987;
$uniqueDig = 0;
$lengthNum = 0;
$identicalFlag = false;
for($lengthNum; intdiv($N, 10 ** $lengthNum) > 9; $lengthNum++);
for($i = 0; $i <= $lengthNum; $i++){
    $checkNum = $uniqueDig;
    while($checkNum > 0){
        if($checkNum % 10 == $N % 10){
            $identicalFlag = true;
        }
        $checkNum = intdiv($checkNum, 10);
    }
    $uniqueDig += ($N % 10) * 10 ** $i;
    $N = intdiv($N, 10);
}
if($identicalFlag){
    echo "number contains two identical digits";
}else{
    echo "number does not contain two identical digits";
}
<?php
$N = 22;
$sqrN = $N ** 2;
$lengthNum = 0;
$automorfFlag = true;
for($lengthNum; intdiv($N, 10 ** $lengthNum) > 10; $lengthNum++);
for($i = 0; $i <= $lengthNum; $i++){
    if($sqrN % 10 != $N % 10){
        $automorfFlag = false;
    }
    $N = intdiv($N, 10);
    $sqrN = intdiv($sqrN, 10);
}
if($automorfFlag){
    echo "number is automorf";
}else{
    echo "number is not automorf";
}
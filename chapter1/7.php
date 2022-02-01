<?php
$N = 66120453;
$uniqueDig = [];
$lengthNum = 0;
$identicalFlag = false;
for($lengthNum; intdiv($N, 10 ** $lengthNum) > 10; $lengthNum++);
for($i = 0; $i <= $lengthNum; $i++){
    for($j = 0; $j < count($uniqueDig); $j++){
        if($uniqueDig[$j] === $N % 10){
            $identicalFlag = true;
        }
    }
    $uniqueDig[] = $N % 10;
    $N = intdiv($N, 10);
}
if($identicalFlag){
    echo "number contains two identical digits";
}else{
    echo "number does not contain two identical digits";
}
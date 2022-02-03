<?php
$N = 23;
$flag = true;
if($N % 2){
    for($i = 3; $i < $N / 2; $i += 2){
        if(!($N % $i)){
            $flag = false;
            break;
        }
    }
}else{
    $flag = false;
}
if($flag){
    echo "число простое";
}else{
    echo "число не простое";
}
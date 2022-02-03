<?php
for($i = 1000; $i < 10000; $i++){
    $digits = 7320;
    $flagСontain = true;
    while($digits > 0 and $flagСontain) {
        $num = $i;
        while ($num > 0) {
            if($num % 10 == $digits % 10){
                $digits = intdiv($digits, 10);
                $flagСontain = true;
                break;
            }else{
                $flagСontain = false;
                $num = intdiv($num, 10);
            }
        }
    }
    if($flagСontain){
        echo $i . "\n";
    }
}
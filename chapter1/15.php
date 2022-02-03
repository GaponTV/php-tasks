<?php
$n = 128;
$divCount = 2; // число всегда делится на 1 и на себя
for($i = 2; $i <= $n / 2; $i++){
    if($n % $i == 0){
        $divCount++;
    }
}

echo $divCount;
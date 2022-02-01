<?php
$digits = [0, 2, 3, 7];
for($i = 0; $i < count($digits); $i ++){
    $degree = count($digits) - 1;
    if($digits[$i] != 0) {
        $result = $digits[$i]* (10 ** $degree);
        $remDigits = $digits;
        unset($remDigits[$i]);
        $remDigits = array_values($remDigits);
        rec($remDigits, $result, $degree);
    }
}

function rec($digits, $result, $degree){
    if(count($digits) == 0){
        echo $result . "\n";
    }else{
        $degree--;
        for($i = 0; $i < count($digits); $i++){
            $remDigits = $digits;
            $nextResult = $result + $digits[$i] * (10 ** $degree);
            unset($remDigits[$i]);
            $remDigits = array_values($remDigits);
            rec($remDigits, $nextResult, $degree);
        }
    }

}
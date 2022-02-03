<?php
$prevSimpleNum = 2;
$pairCount = 0;
for($i = 3; $pairCount != 10; $i++) {
    if(checkSimple($i) and $i - $prevSimpleNum == 2){
        echo $prevSimpleNum . " " . $i . "\n";
        $prevSimpleNum = $i;
        $pairCount++;
    }else{
        if(checkSimple($i)) {
            $prevSimpleNum = $i;
        }
    }
}

function checkSimple($num): bool
{
    if ($num % 2) {
        for ($i = 3; $i < $num / 2; $i += 2) {
            if (!($num % $i)) {
                return false;
            }
        }
    } else {
        return false;
    }
    return true;
}
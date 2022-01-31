<?php
$N = 1511111;
$count = 0;
while($N > 0){
    if($N % 10 < 5){
        $count += 1;
    }
    $N = intdiv($N, 10);
}
echo $count;
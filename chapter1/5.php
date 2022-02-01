<?php
$N = 987654321;
$M = 0;
$multiplier = 10;
$degree = 0;
for($degree; intdiv($N, 10 ** $degree) > 10; $degree++);
while($N > 0){
    $M += ($N %10) * $multiplier ** $degree;
    $N = intdiv($N, 10);
    $degree -= 1;
}

echo $M;
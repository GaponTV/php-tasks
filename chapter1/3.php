<?php
$N = 12634569;
$prevNum = 10;
$result = true;
while($N > 0){

    if($N % 10 >= $prevNum){
        $result = false;
        break;
    }
    $prevNum = $N % 10;
    $N = intdiv($N, 10);
}
if($result){
    echo "Является";
}else{
    echo "Не является";
}
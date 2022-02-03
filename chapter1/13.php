<?php
$num = 123453123453;
$message = "число является симметричныи";
$lengthNum = 0;
for($lengthNum; intdiv($num, 10 ** $lengthNum) > 9; $lengthNum++);
$lengthNum++;
if(($lengthNum) % 2 == 0){
    $leftHalf = intdiv($num, 10 ** ($lengthNum / 2));
    $rightHalf = $num % 10 ** ($lengthNum / 2);
    while($leftHalf > 0){
        if($leftHalf % 10 == $rightHalf % 10){
            $leftHalf = intdiv($leftHalf, 10);
            $rightHalf = intdiv($rightHalf, 10);
        }else{
            $message = "левая и правая часть неодинаковы";
            break;
        }
    }
}else{
    $message = "В числе нечетное кол-во цифрю";
}
echo $message;
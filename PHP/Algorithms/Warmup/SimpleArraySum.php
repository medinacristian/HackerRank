<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
array_walk($arr,'intval');
$sum=0;
foreach($arr as $num){
    $sum+=$num;
}

echo $sum;

?>
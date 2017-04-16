<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
array_walk($arr,'intval');

$sum = 0;
for($i=0; $i<$n; $i++){
    $sum+=$arr[$i];
}

echo $sum;

?>
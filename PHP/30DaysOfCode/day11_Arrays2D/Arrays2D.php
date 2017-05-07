<?php

$handle = fopen ("php://stdin","r");
$arr = array();
for($i=0; $i<6; $i++) {
    $arr[] = explode(" ", fgets($handle));
    array_walk($arr[$i],'intval');
}

$max=-99999999;
for($i=0; $i<4; $i++){
    for($j=0; $j<4; $j++){
        $tmp = 0;
        $tmp = $tmp + $arr[$i][$j] + $arr[$i][$j+1] + $arr[$i][$j+2];
        $tmp = $tmp + $arr[$i+1][$j+1];
        $tmp = $tmp + $arr[$i+2][$j] + $arr[$i+2][$j+1] + $arr[$i+2][$j+2];
        $max = ($tmp>$max) ? $tmp : $max;
    }
}

echo $max."\n";


?>
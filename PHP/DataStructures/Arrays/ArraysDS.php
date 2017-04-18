<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
array_walk($arr,'intval');

for($i=count($arr)-1; $i>=0; $i--){
    echo $arr[$i]." ";
}

?>
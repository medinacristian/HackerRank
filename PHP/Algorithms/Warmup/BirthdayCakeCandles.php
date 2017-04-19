<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$height_temp = fgets($handle);
$height = explode(" ",$height_temp);
array_walk($height,'intval');

$high=0;
$cont=1;
for($i=0; $i<$n; $i++){
    if($height[$i]>$high){
        $high=$height[$i];
        $cont=1;
    } else if($height[$i] == $high){
        $cont++;
    }
}
echo $cont;

?>
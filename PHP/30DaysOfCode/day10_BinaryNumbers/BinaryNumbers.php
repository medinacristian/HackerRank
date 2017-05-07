<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);

$binary = explode("0",decbin($n));
$max = 0;
foreach($binary as $dato){
    $max = (strlen($dato)>$max) ? strlen($dato) : $max; 
}

echo $max."\n";


?>
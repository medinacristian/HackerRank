<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);

$blank=$n-1;
for($i=0; $i<$n; $i++){
    for($cont=$blank; $cont>0; $cont--){
        echo " ";
    }
    for($j=0; $j<$n-$blank; $j++){
        echo "#";
    }
    $blank--;
    echo "\n";
}

?>
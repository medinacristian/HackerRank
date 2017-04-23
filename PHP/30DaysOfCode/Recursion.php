<?php
$handle = fopen("php://stdin", "r");
fscanf($handle,"%d",$n);

function factorial($n){
    while($n != 1){
        return $n * factorial($n - 1);
    }
    return 1;
}

echo factorial($n);


?>
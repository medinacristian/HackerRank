<?php
$handle=fopen("php://stdin", "r");
$numbers=fgets($handle);
$numbers=explode(" ", $numbers);
sort($numbers);
$min=0; $max=0;
for($i=0; $i<count($numbers)-1; $i++){
    $min+=$numbers[$i];
    $max+=$numbers[$i+1];
}
echo "$min $max";
?>
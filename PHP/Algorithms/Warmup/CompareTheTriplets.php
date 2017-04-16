<?php

$handle = fopen ("php://stdin", "r");
fscanf($handle,"%d %d %d",$a0,$a1,$a2);
fscanf($handle,"%d %d %d",$b0,$b1,$b2);
// Write Your Code Here
$alice = 0;
$bob = 0;

for($i=0;$i<3;$i++){
    if(${'a'.$i}>${'b'.$i}){
        $alice+=1;
    } elseif(${'a'.$i}<${'b'.$i}){
        $bob+=1;
    }
}

echo $alice." ".$bob;


?>


<?php

/*
$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$a = array();
for($a_i = 0; $a_i < $n; $a_i++) {
   $a_temp = fgets($handle);
   $a[] = explode(" ",$a_temp);
   array_walk($a[$a_i],'intval');
}

//print_r($a);
$pri=0;
$sec=0;
$cont=$n-1;

for($i=0; $i<$n; $i++){
    for($j=0; $j<$n; $j++){
        if($i==$j){
            $pri+=$a[$i][$j];
        }
        if($j==$cont){
            $sec+=$a[$i][$j];
            $cont--;
        }
    }
}

echo abs($pri-$sec);
*/


$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$a = array();
for($a_i = 0; $a_i < $n; $a_i++) {
   $a_temp = fgets($handle);
   $a[] = explode(" ",$a_temp);
   array_walk($a[$a_i],'intval');
}

$pri=0;
$sec=0;

for($i=0, $k=$n-1; $i<$n; $i++, $k--){
    for($j=0; $j<$n; $j++){
        if($i==$j){
            $pri+=$a[$i][$j];
        }
    }
    $sec+=$a[$i][$k];
}

echo abs($pri-$sec);


?>
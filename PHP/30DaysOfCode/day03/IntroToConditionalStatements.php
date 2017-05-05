<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);

if($n%2==1){
    $ans = "Weird";
} else {
    if($n>=2 && $n<=5){
        $ans="Not Weird";
    }else if($n>=6 && $n<=20){
        $ans="Weird";
    }else{
        $ans="Not Weird";
    }
}


echo $ans;

?>
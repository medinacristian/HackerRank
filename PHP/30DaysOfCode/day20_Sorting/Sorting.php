<?php

$handle = fopen ("php://stdin", "r");
fscanf($handle, "%d",$n);
$array = fgets($handle);
$array = explode(" ",$array);
$array = array_map('intval', $array);

bubbleSort($array);

function bubbleSort($array){
    $numSwaps = 0;
    for($i=0; $i<count($array); $i++){
        for($j=0; $j<count($array)-1; $j++){
            if($array[$j] > $array[$j+1]){
                $temp = $array[$j];
                $array[$j] = $array[$j+1];
                $array[$j+1] = $temp;
                $numSwaps++;
            }
        }
        if($numSwaps == 0){
            break;
        }
    }
    
    echo "Array is sorted in ".$numSwaps." swaps.\n";
    echo "First Element: ".$array[0]."\n";
    echo "Last Element: ".$array[count($array)-1]."\n";
    
}



?>
<?php
    
    $handle = fopen ("php://stdin","r");
    $mealCost = fgets($handle);
    $tipPercent = (fgets($handle)/100)*$mealCost;
    $taxPercent = (fgets($handle)/100)*$mealCost;

    $total = round($mealCost + $tipPercent + $taxPercent);
    echo "The total meal cost is ".$total." dollars.";
?>
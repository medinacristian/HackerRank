<?php
$handle = fopen("php://stdin", "r");
fscanf($handle,"%d",$total_cases);
for($i=0; $i<$total_cases; $i++){
    $arr_char = str_split(str_replace("\n","",fgets($handle)));
    $even=""; $odd="";
    for($j=0; $j<count($arr_char); $j++){
        if($j%2==0)
            $even=$even.$arr_char[$j];
        else 
            $odd=$odd.$arr_char[$j];
    }
    echo $even." ".$odd."\n";
}

?>
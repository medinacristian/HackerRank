<?php
$handle = fopen("php://stdin", "r");
$n = fgets($handle);

for($i=0; $i<$n; $i++){
    $data = explode(" ",fgets($handle));
    $name = trim($data[0]);
    $phone = trim($data[1]);
    $phoneBook[$name]=$phone;
}

while(!feof($handle)){
    $search = trim(fgets($handle));
    echo (array_key_exists($search, $phoneBook))?$search."=".$phoneBook[$search]."\n":"Not found\n";
}

?>
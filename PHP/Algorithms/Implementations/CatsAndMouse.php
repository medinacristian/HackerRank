<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$querys);
for($i=0; $i<$querys; $i++){
    fscanf($handle,"%d %d %d",$catA,$catB,$mouse);
    $contA=0; $contB=0;
    while($catA!=$mouse){
        $catA = ($catA<$mouse)?$catA+1:$catA-1;
        $contA++;
    }
    while($catB!=$mouse){
        $catB = ($catB<$mouse)?$catB+1:$catB-1;
        $contB++;
    }
    if($contA<$contB)
        echo "Cat A\n";
    else if($contA==$contB)
        echo "Mouse C\n";
    else
        echo "Cat B\n";
}

?>
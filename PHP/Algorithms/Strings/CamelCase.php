<?php

//$text = fgets(STDIN);
$text = "saveChangesInTheEditor";
$parts = preg_split("/(?=[A-Z])/", $text);

echo count($parts);

?>
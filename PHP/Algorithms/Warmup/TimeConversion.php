<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%s",$time);
$hr=substr($time,0,2);
if(substr($time, -2) == "PM"){
    $hr+=12;
    $str_hr = ($hr==24)?"12":strval($hr);
} else {
    $str_hr = ($hr==12)?"00":strval($hr);
}
echo $str_hr.substr($time, 2, 6);

?>
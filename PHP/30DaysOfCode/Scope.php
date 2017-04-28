<?php
class Difference{
    private $elements=array();
    public $maximumDifference;
    
    function __construct($elements){
        $this->elements = $elements;
    }

    function computeDifference(){
        $value = 0;
        $this->maximumDifference = 0;
        for($i=0; $i<count($this->elements)-1; $i++){
            for($j=0; $j<count($this->elements); $j++){
                if($i==$j)
                    continue;
                
                $value = abs($this->elements[$i]-$this->elements[$j]);
                if($value > $this->maximumDifference)
                    $this->maximumDifference = $value;
                
            }
        }
 
    }
    
}

$N=intval(fgets(STDIN));
$a =array_map('intval', explode(' ', fgets(STDIN)));
$d=new Difference($a);
$d->ComputeDifference();
print ($d->maximumDifference);


?>
<?php
class Person{
    public $age;
    public function __construct($initialAge){
        if($initialAge<0){
            echo "Age is not valid, setting age to 0.\n";
            $this->age = 0;
        } else {
            $this->age = $initialAge;
        }
    }
    public  function amIOld(){
        if($this->age<13){
            $msg="You are young.";
        } else if($this->age<18){
            $msg="You are a teenager.";
        } else {
            $msg="You are old.";
        }
        echo $msg."\n";
    }
    public  function yearPasses(){
        $this->age++;
    }
   
      
}

$T = intval(fgets(STDIN));
for($i=0;$i<$T;$i++){
    $age=intval(fgets(STDIN));
    $p=new Person($age);
    $p->amIOld();
    for($j=0;$j<3;$j++){
        $p->yearPasses();
    }
    $p->amIOld();
    echo "\n";
}

?>
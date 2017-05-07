<?php
interface AdvancedArithmetic{
    public function divisorSum($n);
}

//Write your code here
class Calculator implements AdvancedArithmetic{
    private $acum;
    public function divisorSum($n){
        for($i=1; $i<=$n; $i++){
            if($n%$i == 0)
                $acum += $i;
        }
        return $acum;
    }
}

$n=intval(fgets(STDIN));
$myCalculator=new Calculator();
if($myCalculator instanceof AdvancedArithmetic)//checking if Calculator has implemented AdvancedArithemtic
{
    $sum=$myCalculator->divisorSum($n);
    echo "I implemented: AdvancedArithmetic\n".$sum;
}
else
{
    echo "Wrong answer";// You will get this output if you dont implement
}
?>
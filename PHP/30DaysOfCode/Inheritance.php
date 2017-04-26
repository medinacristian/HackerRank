<?php

class person {
    protected $firstName, $lastName, $id;
    
    public function __construct($first_name, $last_name, $identification) {
        $this->firstName = $first_name;
        $this->lastName = $last_name;
        $this->id = $identification;
    }
    
    function printPerson() {
        print("Name: {$this->lastName}, {$this->firstName}\n");
        print("ID: {$this->id}\n");
    }
}

class Student extends person {
    private $testScores;
  
    /*	
    *   Class Constructor
    *   
    *   Parameters:
    *   firstName - A string denoting the Person's first name.
    *   lastName - A string denoting the Person's last name.
    *   id - An integer denoting the Person's ID number.
    *   scores - An array of integers denoting the Person's test scores.
    */
    public function __construct($firstName, $lastName, $id, $scores){
        parent::__construct($firstName, $lastName, $id);
        $this->testScores = $scores;
    }
    

    /*	
    *   Function Name: calculate
    *   Return: A character denoting the grade.
    */
    public function calculate(){
        $avg=0;
        foreach($this->testScores as $s){
            $avg+=$s;
        }
        $avg = $avg/count($this->testScores);

        $grade='';
        if($avg>=90 && $avg<=100)
            $grade='O';
        if($avg>=80 && $avg<90)
            $grade='E';
        if($avg>=70 && $avg<80)
            $grade='A';
        if($avg>=55 && $avg<70)
            $grade='P';
        if($avg>=40 && $avg<55)
            $grade='D';
        if($avg<40)
            $grade='T';
        
        return $grade;
        
    }
  
}

$file = fopen("php://stdin", "r");

$name_id = explode(' ', fgets($file));

$first_name = $name_id[0];
$last_name = $name_id[1];
$id = (int)$name_id[2];

fgets($file);

$scores = array_map(intval, explode(' ', fgets($file)));

$student = new Student($first_name, $last_name, $id, $scores);

$student->printPerson();

print("Grade: {$student->calculate()}");
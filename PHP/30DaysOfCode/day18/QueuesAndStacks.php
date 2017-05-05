<?php

class Solution {
    // Write your code here
    protected $pila = array();
    protected $cola = array();
    
    //Pushes character onto a stack.
    public function pushCharacter($ch){
        if($ch !="\n") {
            array_push($this->pila, $ch);
        }
    }
    
    //Enqueues a character in the queue instance variable
    public function enqueueCharacter($ch){
        if($ch != "\n"){
            array_push($this->cola, $ch);
        }
    }
    
    //Pops and returns the character at the top of the stack instance variable 
    public function popCharacter(){
        return array_shift($this->pila);
    }
    
    //Dequeues and returns the first character in the queue instance variable.
    public function dequeueCharacter(){
        return array_pop($this->cola);
    }
}

// read the string s
$s = fgets(STDIN);

// create the Solution class object p
$obj = new Solution();

$len = strlen($s);
$isPalindrome = true;

// push/enqueue all the characters of string s to stack
for ($i = 0; $i < $len; $i++) {
    $obj->pushCharacter($s{$i});
    $obj->enqueueCharacter($s{$i});
}

/*
pop the top character from stack
dequeue the first character from queue
compare both the characters
*/
for ($i = 0; $i < $len / 2; $i++) {
    if($obj->popCharacter() != $obj->dequeueCharacter()){
        $isPalindrome = false;
    	
        break;
    }
}

//finally print whether string s is palindrome or not.
if ($isPalindrome)
    echo "The word, ".$s.", is a palindrome.";
else
    echo "The word, ".$s.", is not a palindrome.";
?>
package daysOfCode30; 

import java.util.*;
import java.util.LinkedList;


public class QueuesAndStacks {
    // Write your code here.
    Stack pila = new Stack();
    LinkedList cola = new LinkedList();
    
    //Pushes character onto a stack.
    public void pushCharacter(char ch){
        pila.push(ch);
    }
    
    //Enqueues a character in the queue instance variable
    public void enqueueCharacter(char ch){
    	cola.addLast(ch);
    }
    
    //Pops and returns the character at the top of the stack instance variable    
    public char popCharacter(){
    	return (char)pila.pop();
    }
    
    //Dequeues and returns the first character in the queue instance variable.
    public char dequeueCharacter(){
    	return (char)cola.removeFirst();
    }
    
    
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);
        String input = scan.nextLine();
        scan.close();

        // Convert input String to an array of characters:
        char[] s = input.toCharArray();

        // Create a Solution object:
        QueuesAndStacks p = new QueuesAndStacks();

        // Enqueue/Push all chars to their respective data structures:
        for (char c : s) {
            p.pushCharacter(c);
            p.enqueueCharacter(c);
        }

        // Pop/Dequeue the chars at the head of both data structures and compare them:
        boolean isPalindrome = true;
        for (int i = 0; i < s.length/2; i++) {
            if (p.popCharacter() != p.dequeueCharacter()) {
                isPalindrome = false;                
                break;
            }
        }

        //Finally, print whether string s is palindrome or not.
        System.out.println( "The word, " + input + ", is " 
                           + ( (!isPalindrome) ? "not a palindrome." : "a palindrome." ) );
    }
    
    
}

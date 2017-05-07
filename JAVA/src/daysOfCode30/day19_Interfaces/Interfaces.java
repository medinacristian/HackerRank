package daysOfCode30.day19_Interfaces;

import java.util.Scanner;

interface AdvancedArithmetic{
   int divisorSum(int n);
}

//Write your code here
class Calculator implements AdvancedArithmetic{
	private int acum;
	public int divisorSum(int n){
		for(int i=1; i<=n; i++){
			if(n%i == 0)
				acum += i;
		}
		return acum;
	}
}


public class Interfaces {
		
    public static void main(String[] args) {
        Scanner scan = new Scanner(System.in);
        int n = scan.nextInt();
        scan.close();
        
      	AdvancedArithmetic myCalculator = new Calculator(); 
        int sum = myCalculator.divisorSum(n);
        System.out.println("I implemented: " + myCalculator.getClass().getInterfaces()[0].getName() );
        System.out.println(sum);
    }
}

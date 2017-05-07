package daysOfCode30.day14_Scope;

import java.util.*;

/**
 *
 * @author Cristian
 */
class Difference {
  	private int[] elements;
  	public int maximumDifference;
  	
  	
	// Add your code here
    Difference(int elements[]){
        this.elements = elements;
    }
    
    void computeDifference(){
    	//maximumDifference = 0;
    	int value = 0;
    	for(int i=0; i<elements.length-1; i++){
    		for(int j=0; j<elements.length; j++){
    			if(i==j)
    				continue;
    			
    			value = Math.abs(elements[i]-elements[j]);
    			if(value > maximumDifference){
    				maximumDifference = value;
    			}
    		}
    	}
    }
}




public class Scope {
    
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        int n = sc.nextInt();
        int[] a = new int[n];
        for (int i = 0; i < n; i++) {
            a[i] = sc.nextInt();
        }
        sc.close();

        Difference difference = new Difference(a);

        difference.computeDifference();

        System.out.print(difference.maximumDifference);
    }
    
}

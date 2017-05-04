package daysOfCode30.day20;

import java.util.*;

public class Sorting {
	private static int[] array;
	private static int n;
	private static int numSwaps = 0;
	
	public static void bubleSort(){
        for(int i=0; i<n; i++){
        	for(int j=0; j<n-1; j++){
        		if(array[j]>array[j+1]){
	        		int temp = array[j];
	        		array[j] = array[j+1];
	        		array[j+1] = temp;
	        		numSwaps++;
        		}
        	}
        	if(numSwaps == 0){
        		break;
        	}
        }
	}
	
	
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        n = in.nextInt();
        array = new int[n];
        for(int i=0; i < n; i++){
            array[i] = in.nextInt();
        }

        bubleSort();
        
        System.out.println("Array is sorted in " + numSwaps + " swaps.");
        System.out.println("First Element: " + array[0]);
        System.out.println("Last Element: " + array[n-1]);
        
    }
	
	
}

package daysOfCode30; 

import java.util.Scanner;

/**
 *
 * @author Cristian
 */
public class Recursion {
    public static int factorial(int n){
        while(n!=1){
            return n * factorial(n-1);
        }
        return 1;
    }

    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        int n = in.nextInt();
        System.out.println(factorial(n));
    }
}

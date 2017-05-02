package daysOfCode30; 

import java.util.Scanner;

/**
 *
 * @author Cristian
 */
public class BinaryNumbers {
    
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        String binary = Integer.toBinaryString(in.nextInt());
        String bin_arr[] = binary.split("0");
        int max = 0;
        for(String dato : bin_arr){
            max = (dato.length()>max) ? dato.length() : max;
        }
        System.out.println(max);
    }
    
}

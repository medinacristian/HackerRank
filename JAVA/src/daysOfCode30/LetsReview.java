package daysOfCode30;

import java.util.Scanner;

/**
 *
 * @author Cristian
 */
public class LetsReview {
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        int total_cases = Integer.parseInt(in.nextLine());
        String even="", odd="";
        for(int i=0; i<total_cases; i++){
            char[] arr_char = in.nextLine().toCharArray();
            even=""; odd="";
            for(int j=0; j<arr_char.length; j++){
                if(j%2==0)
                    even=even+String.valueOf(arr_char[j]);
                else
                    odd=odd+String.valueOf(arr_char[j]);
            }
            System.out.println(even + " " + odd);
        }
    }
}

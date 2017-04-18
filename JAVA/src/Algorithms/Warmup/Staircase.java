package Algorithms.Warmup;

import java.util.Scanner;

/**
 *
 * @author Cristian
 */
public class Staircase {
    
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        int n = in.nextInt();
        int blank=n-1;
        for(int i=0; i<n; i++){
            for(int cont=blank; cont>0; cont--){
                System.out.print(" ");
            }
            for(int j=0; j<n-blank; j++){
                System.out.print("#");
            }
            blank--;
            System.out.println();
        }
    }
    
}

package Algorithms.Implementation;

import java.util.Scanner;

/**
 *
 * @author Cristian
 */
public class CatsAndAMouse {
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        int querys = in.nextInt();
        for(int i=0; i<querys; i++){
            int catA = in.nextInt();
            int catB = in.nextInt();
            int mouse = in.nextInt();
            int contA=0, contB=0;
            while(catA!=mouse){
                catA = (catA<mouse)?catA+1:catA-1;
                contA++;
            }
            while(catB!=mouse){
                catB = (catB<mouse)?catB+1:catB-1;
                contB++;
            }
            String winner = (contA<contB)?"Cat A":(contA==contB)?"Mouse C":"Cat B";
            System.out.println(winner);
        }
    }    
}

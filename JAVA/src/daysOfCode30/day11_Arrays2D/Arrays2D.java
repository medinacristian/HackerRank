package daysOfCode30.day11_Arrays2D;

import java.util.*;

/**
 *
 * @author Cristian
 */
public class Arrays2D {
    
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        int arr[][] = new int[6][6];
        for(int i=0; i<6; i++){
            for(int j=0; j<6; j++){
                arr[i][j] = in.nextInt();
            }
        }
        
        int max=-99999999, tmp=0;
        for(int i=0; i<4; i++){
            for(int j=0; j<4; j++){
                tmp = 0;
                tmp = tmp + arr[i][j] + arr[i][j+1] + arr[i][j+2];
                tmp = tmp + arr[i+1][j+1];
                tmp = tmp + arr[i+2][j] + arr[i+2][j+1] + arr[i+2][j+2];
                max = (tmp>max) ? tmp : max;
            }
        }
        System.out.println(max);
    }
    
    
}

package Algorithms.Warmup;

import java.util.*;

/**
 *
 * @author Cristian
 */
public class BirthdayCakeCandles {
    
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        int n = in.nextInt();
        int height[] = new int[n];
        for(int height_i=0; height_i < n; height_i++){
            height[height_i] = in.nextInt();
        }
        
        int high=0, cont=1;
        for(int i=0; i<n; i++){
            if(height[i]>high){
                high=height[i];
                cont=1;
            } else if(height[i]==high){
                cont++;
            }                
        }
        
        System.out.println(cont);
        
    }
    
}

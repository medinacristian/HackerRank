package algorithms.warmup;

import java.util.*;

/**
 *
 * @author Cristian
 */
public class DiagonalDifference {
    
    /*
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        int n = in.nextInt();
        int a[][] = new int[n][n];
                
        for(int a_i=0; a_i < n; a_i++){
            for(int a_j=0; a_j < n; a_j++){
                a[a_i][a_j] = in.nextInt();
            }
        }
        
        int pri=0, sec=0, cont=n-1;
        for(int i=0; i<n; i++){
            for(int j=0; j<n; j++){
                if(i==j){
                    pri+=a[i][j];
                }
                if(j==cont){
                    sec+=a[i][j];
                    cont--;
                }
            }
        }
        
        System.out.println(Math.abs(pri-sec));
        
    }*/
    
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        int n = in.nextInt();
        int a[][] = new int[n][n];
                
        for(int a_i=0; a_i < n; a_i++){
            for(int a_j=0; a_j < n; a_j++){
                a[a_i][a_j] = in.nextInt();
            }
        }
        
        int pri=0, sec=0;
        for(int i=0, k=n-1; i<n; i++, k--){
            for(int j=0; j<n; j++){
                if(i==j){
                    pri+=a[i][j];
                }
            }
            sec+=a[i][k];
        }
        System.out.println(Math.abs(pri-sec));
    }
    
    
}

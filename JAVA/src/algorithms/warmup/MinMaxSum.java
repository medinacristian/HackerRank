package algorithms.warmup;

import java.util.*;

/**
 *
 * @author Cristian
 */
public class MinMaxSum {
    
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        long a = in.nextLong();
        long b = in.nextLong();
        long c = in.nextLong();
        long d = in.nextLong();
        long e = in.nextLong();
        
        long numbers[] = {a,b,c,d,e};
        Arrays.sort(numbers);
        long min=0, max=0;
        for(int i=0; i<numbers.length-1; i++){
            min+=numbers[i];
            max+=numbers[i+1];
        }
        System.out.print(min+" "+max);
    }
    
    
}

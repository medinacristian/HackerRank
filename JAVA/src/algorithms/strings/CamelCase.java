package algorithms.strings;

import java.util.*;

public class CamelCase {

    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        String str = in.next();
        
        String [] arr_str = str.split("[A-Z]");
        
        System.out.println(arr_str.length);
        
    }

}
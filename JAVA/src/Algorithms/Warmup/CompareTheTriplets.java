/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Algorithms.Warmup;

import java.util.Scanner;

/**
 *
 * @author Cristian
 */
public class CompareTheTriplets {
 
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        int a0 = in.nextInt();
        int a1 = in.nextInt();
        int a2 = in.nextInt();
        int b0 = in.nextInt();
        int b1 = in.nextInt();
        int b2 = in.nextInt();
        
        int alice = ((a0>b0)?1:0)+((a1>b1)?1:0)+((a2>b2)?1:0);
        int bob = ((a0<b0)?1:0)+((a1<b1)?1:0)+((a2<b2)?1:0);

        System.out.println(alice + " " + bob);
  
    }
    
    
}

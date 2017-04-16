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
public class AVeryBigSum {
    
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        int n = in.nextInt();
        int arr[] = new int[n];
        for(int arr_i=0; arr_i < n; arr_i++){
            arr[arr_i] = in.nextInt();
        }
        
        long sum = 0L;
        
        for(int i=0; i<arr.length; i++){
            sum += arr[i];
        }
        
        System.out.println(sum);
        
    }
    
}

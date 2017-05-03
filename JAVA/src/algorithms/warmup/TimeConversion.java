package algorithms.warmup;

import java.util.*;

/**
 *
 * @author Cristian
 */
public class TimeConversion {
    
    public static void main(String[] args) {
        Scanner in = new Scanner(System.in);
        String time = in.next();
        int hr=Integer.parseInt(time.substring(0,2));
        String str_hr="";
        if(time.substring(time.length()-2,time.length()).equals("PM")){
            hr+=12;
            str_hr = (hr==24)?"12":(hr<10)?"0"+String.valueOf(hr):String.valueOf(hr);
        } else {
            str_hr = (hr==12)?"00":(hr<10)?"0"+String.valueOf(hr):String.valueOf(hr);
        }
        System.out.println(str_hr+time.substring(2,time.length()-2));
    }
    
    
}

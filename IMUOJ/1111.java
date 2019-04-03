import java.util.Scanner;
 
public class Main {
    public static void main(String[] args){
        //main
        Scanner cin=new Scanner(System.in);
        String s;
        while(cin.hasNext()){
            s=cin.nextLine();
            String regex="(2[5][0-5]|2[0-4]\\d|1\\d{2}|\\d{1,2})\\.(25[0-5]|2[0-4]\\d|1\\d{2}|\\d{1,2})\\.(25[0-5]|2[0-4]\\d|1\\d{2}|\\d{1,2})\\.(25[0-5]|2[0-4]\\d|1\\d{2}|\\d{1,2})";
            if(s.matches(regex)){
                System.out.println("Y");
            }else{
                System.out.println("N");
            }
        }
    }
}
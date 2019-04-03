import java.util.Scanner;

/**
 * Created by likole on 10/22/18.
 */
public class Main {

    public static void main(String[] args) {
        Scanner cin = new Scanner(System.in);
        String target, s;
        target = cin.nextLine();
        s = cin.nextLine();
        target = target.toLowerCase();
        s = s.toLowerCase();
        target=" "+target+" ";
        s=" "+s+" ";
        if(!s.contains(target)){
            System.out.println(-1);
        }else{
            int cnt=1;
            int pos=s.indexOf(target);
            int first=pos;
            while ((pos=s.indexOf(target,pos+1))!=-1){
                cnt++;
            }
            System.out.println(cnt+" "+first);
        }

    }
}


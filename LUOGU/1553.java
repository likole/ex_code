import java.util.Scanner;

/**
 * Created by likole on 10/22/18.
 */
public class Main {

    public static long getNumber(String s) {
        StringBuilder stringBuilder = new StringBuilder(s);
        stringBuilder.reverse();
        return Long.valueOf(stringBuilder.toString());
    }

    public static void main(String[] args) {
        Scanner cin = new Scanner(System.in);
        String s;
        s = cin.nextLine();
        if (s.contains(".")) {
            int index = s.indexOf(".");
            long b = getNumber(s.substring(index + 1));
            while (b % 10 == 0) {
                if (b == 0) {
                    break;
                }
                b /= 10;
            }
            System.out.println(getNumber(s.substring(0, index)) + "." + b);
        } else if (s.contains("/")) {
            int index = s.indexOf("/");
            System.out.println(getNumber(s.substring(0, index)) + "/" + getNumber(s.substring(index + 1)));
        } else if (s.contains("%")) {
            int index = s.indexOf("%");
            System.out.println(getNumber(s.substring(0, index)) + "%");
        } else {
            System.out.println(getNumber(s));
        }

    }
}


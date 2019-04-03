import java.math.BigInteger;
import java.util.Scanner;

class Main{
    public static void main(String[] args) {
        Scanner cin=new Scanner(System.in);
        int n=cin.nextInt();
        BigInteger t=BigInteger.ONE,ans=BigInteger.ZERO;
        for(int i=1;i<=n;i++)
        {
            t=t.multiply(new BigInteger(String.valueOf(i)));
            ans=ans.add(t);
        }
        System.out.println(ans.toString());
    }
}

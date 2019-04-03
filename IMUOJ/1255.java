import java.math.BigInteger;
import java.util.Scanner;

public class Main{
	public static void main(String[] args){
		Scanner cin=new Scanner(System.in);
		String aString;
		String bString;
		while(cin.hasNext())
		{
			aString=cin.next();
			bString=cin.next();
			BigInteger aBigInteger=new BigInteger(aString);
			BigInteger bBigInteger=new BigInteger(bString);
			System.out.println(aBigInteger.mod(bBigInteger));
		}

	}
}
import java.math.BigInteger;
import java.util.Scanner;

public class Main {
	public static void main(String[] args) {
		Scanner cin = new Scanner(System.in);
		BigInteger mbBigInteger;
		BigInteger nBigInteger = new BigInteger("17");
		while (cin.hasNext()) {
			mbBigInteger = cin.nextBigInteger();
			if (mbBigInteger.equals(BigInteger.ZERO)) {
				break;
			}
			if (mbBigInteger.mod(nBigInteger).equals(BigInteger.ZERO)) {
				System.out.println("1");
			} else {
				System.out.println("0");
			}
		}
	}
}

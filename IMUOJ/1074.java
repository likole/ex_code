import java.math.BigInteger;
import java.util.Scanner;
import java.util.Stack;


public class Main {

	/**
	 * @param args
	 */
	public static void main(String[] args) {
		Scanner cin=new Scanner(System.in);
		BigInteger bBigInteger=new BigInteger("2");
		while(cin.hasNext()){
			BigInteger aBigInteger=cin.nextBigInteger();
			Stack aStack=new Stack();
			while(!aBigInteger.equals(BigInteger.ZERO)){
				aStack.push(aBigInteger.mod(bBigInteger));
				aBigInteger=aBigInteger.divide(bBigInteger);
			}
			while(!aStack.empty())
			{
				BigInteger aInteger=(BigInteger) aStack.pop();
				System.out.print(aInteger);
			}
			System.out.print("\n");
		}
	}
}


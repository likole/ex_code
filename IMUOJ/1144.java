import java.math.BigInteger;

public class Main{
	public static void main(String[] args){
		 BigInteger ans=new BigInteger("1");
		 BigInteger tmp;
		for (int i = 2; i <=1977; i++) {
			tmp=BigInteger.valueOf(i);
			ans=ans.multiply(tmp);
		}
		System.out.println(ans.toString());
	}
}
import java.text.SimpleDateFormat;
import java.util.Calendar;
import java.util.Scanner;

public class Main {
	public static void main(String[] args){
		//main
		Scanner cin=new Scanner(System.in);
		int y,m,d;
		Calendar calendar=Calendar.getInstance();
		SimpleDateFormat df=new SimpleDateFormat("yyyy-M-d");
		while( cin.hasNext()){
			y=cin.nextInt();
			m=cin.nextInt();
			d=cin.nextInt();
			calendar.set(y, m-1, d);
			calendar.add(5, 10000);
			System.out.println(df.format(calendar.getTime()));
		}
	}
}

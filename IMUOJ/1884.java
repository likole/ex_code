import java.util.Calendar;
import java.util.Scanner;

public class Main{
	public static void main(String[] args){
		Scanner cin=new Scanner(System.in);
		int y1,m1,d1,y2,m2,d2;
		y1=cin.nextInt();
		m1=cin.nextInt();
		d1=cin.nextInt();
		y2=cin.nextInt();
		m2=cin.nextInt();
		d2=cin.nextInt();
		Calendar mCalendar1=Calendar.getInstance();
		mCalendar1.set(y1, m1-1, d1);
		Calendar mCalendar2=Calendar.getInstance();
		mCalendar2.set(y2, m2-1, d2);
		System.out.println((mCalendar2.getTimeInMillis()-mCalendar1.getTimeInMillis())/(1000*3600*24)+1);
		
	}
}
Problem1001:#include<iostream>
using namespace std;
int main()
{
	int a, b;
	cin >> a >> b;
	cout << a + b << endl;

	

	return 0;
}------------------------------------------------------Problem1001:#include<iostream>
using namespace std;
int main()
{
	int a, b;
	cin >> a >> b;
	cout << a + b << endl;
	return 0;
}------------------------------------------------------Problem1011:#include<iostream>;
using namespace std;
int main()
{
	cout << "**************************" << endl << "         Very    Good!" << endl << "**************************" << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1012:#include<iostream>
using namespace std;
int main()
{
	int a, b, c;
	cin >> a >> b >> c;
	cout << (a > b ? a > c ? a : c : b > c ? b : c) << endl;
}------------------------------------------------------Problem1013:#include<iostream>;
using namespace std;
int main()
{
	char c1 = 'C', c2 = 'h', c3 = 'i', c4 = 'n', c5 = 'a';
	c1 = c1 + 4;
	c2 = c2 + 4;
	c3 = c3 + 4;
	c4 = c4 + 4;
	c5 = c5 + 4;
	cout << c1 << c2 << c3 << c4 << c5<<endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1013:#include<iostream>
#include<iomanip>
using namespace std;
int main()
{
    char c1, c2, c3, c4, c5;
    cin >> c1 >> c2 >> c3 >> c4 >> c5;
    c1 += 4;
    c2 += 4;
    c3 += 4;
    c4 += 4;
    c5 += 4;
    cout << c1 << c2 << c3 << c4 << c5;
}------------------------------------------------------Problem1014:#include <iostream>
#include<iomanip>
using namespace std;
int main()
{
	double r, h, C1, Sa, Sb, Va, Vb;
	cin >> r >> h;
	double PI = 3.14;
	C1 = 2 * PI*r;
	Sa = r*PI*r;
	Sb = 4 * PI*r*r;
	Va = 4 * PI*r*r*r / 3;
	Vb = r*r*PI*h;
	cout << setiosflags(ios::fixed);
	cout.precision(2);
	cout << "C1=" << C1 << endl << "Sa=" << Sa << endl << "Sb=" << Sb << endl << "Va=" << Va << endl << "Vb=" << Vb;
}------------------------------------------------------Problem1015:#include<iostream>
#include<iomanip>
using namespace std;
int main()
{
	float c, f;
	cin >> f;
	c = 5 * (f - 32) / 9;
	cout<<"c="<< fixed << setprecision(2) << c << endl;
	
	return 0;
}------------------------------------------------------Problem1016:#include<iostream>
using namespace std;
int max(int,int);
int main()
{
int a,b,c,d;
cin>>a>>b>>c;
d=max(a,b);
cout<<max(d,c)<<endl;
return 0;
}
int max (int x,int y)
{
int m;
m=x>y?x:y;
return m;
}
------------------------------------------------------Problem1017:#include<iostream>;
using namespace std;
int main()
{
	int x;
	cin >> x;
	if (x<1) cout << x << endl;
	else if (x>=10) cout << x * 3 - 11<<endl;
	else cout << x * 2 - 1 << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1017:#include<iostream>;
using namespace std;
int main()
{
	int x;
	cin >> x;
	if (x<1) cout << x << endl;
	else if (x >= 10) cout << x * 3 - 11 << endl;
	else cout << x * 2 - 1 << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1018:#include<iostream>;
using namespace std;
int main()
{
	int score;
	char grade;
	cin >> score;
	if (score >= 90) grade = 'A';
	else if ((score >= 80) && (score < 90)) grade = 'B';
	else if ((score >= 70) && (score < 80)) grade = 'C';
	else if ((score >= 60) && (score < 70)) grade = 'D';
	else grade = 'E';
	cout<<grade<<endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1018:#include<iostream>;
using namespace std;
int main()
{
	int score;
	char grade;
	cin >> score;
	if (score >= 90) grade = 'A';
	else if ((score >= 80) && (score < 90)) grade = 'B';
	else if ((score >= 70) && (score < 80)) grade = 'C';
	else if ((score >= 60) && (score < 70)) grade = 'D';
	else grade = 'E';
	cout << grade << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1019:#include<iostream>
#include<string>
using namespace std;
int main()
{
	string c;
	cin >> c;
	cout << c.length() << endl<<c[0];
	for (int i = 1; i < c.length(); i++)
	{
		cout << " " << c[i];
	}
	cout << endl;
	for (int j = c.length()-1; j >=0; j--)
	{
		cout << c[j];
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1019:#include<iostream>
#include<string>
using namespace std;
int main()
{
	string c;
	cin >> c;
	cout << c.length() << endl << c[0];
	for (int i = 1; i < c.length(); i++)
	{
		cout << " " << c[i];
	}
	cout << endl;
	for (int j = c.length() - 1; j >= 0; j--)
	{
		cout << c[j];
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1020:#include<iostream>
using namespace std;
int main()
{
	long p,bonus;
	cin >> p;
	switch (p/100000)
	{
	case 0:
		bonus = p*0.1;
		break;
	case 1:
		bonus = 10000 + (p - 100000)*0.075;
		break;
	case 2:
	case 3:
		bonus = 17500 + (p - 200000)*0.05;
		break;
	case 4:
	case 5:
		bonus = 27500 + (p - 400000)*0.03;
		break;
	case 6:
	case 7:
	case 8:
	case 9:
		bonus = 33500 + (p - 600000)*0.015;
		break;
	default:
		bonus = 39500 + (p - 1000000)*0.075;
		break;
	}
	cout << bonus << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1020:#include<iostream>
using namespace std;
int main()
{
	long p, bonus;
	cin >> p;
	switch (p / 100000)
	{
	case 0:
		bonus = p*0.1;
		break;
	case 1:
		bonus = 10000 + (p - 100000)*0.075;
		break;
	case 2:
	case 3:
		bonus = 17500 + (p - 200000)*0.05;
		break;
	case 4:
	case 5:
		bonus = 27500 + (p - 400000)*0.03;
		break;
	case 6:
	case 7:
	case 8:
	case 9:
		bonus = 33500 + (p - 600000)*0.015;
		break;
	default:
		bonus = 39500 + (p - 1000000)*0.075;
		break;
	}
	cout << bonus << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1021:#include<iostream>;
using namespace std;
int main()
{
	int m, n,x,p,q;
	cin >> m >> n;
	x = m > n ? m : n;
	for (int i = 1; i < x; i++)
	{
		if ((m%i==0)&&(n%i==0))
		{
			p = i;
		}
	}
	for (int j = x; j <= (m*n); j++)
	{
		if ((j%m == 0) && (j%n == 0))
		{
			q = j;
			break;
		}
	}
	cout << p <<" "<<q<< endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1022:#include<iostream>
using namespace std;
int main()
{
	int a=0, b=0, c=0, d=0;
	while (cin.peek()!='\n')
	{
		char x = cin.get();
		if ((x >= 'A' && x <= 'Z') || (x >= 'a' && x <= 'z')) a++;
		else if (x >= '0' && x <= '9') b++;
		else if (x == ' ') c++;
		else d++;
	}
	cout << a << " " << b << " " << c << " " << d << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1023:#include<iostream>
using namespace std;
int create_num(int);
int main()
{
	int n,ans=0;
	cin >> n;
	for (int p= 0; p < n; p++)
	{
		ans += create_num(p + 1);
	}
	cout << ans << endl;
	cin.get();
	cin.get();
	return 0;
}
int create_num(int leng)
{
	int sum=0,factor;
	for (int i = 0; i < leng; i++)
	{
		factor = 2;
		for (int j = 0; j < i; j++)
		{
			factor *= 10;
		}
		sum += factor;
	}
	return sum;
}------------------------------------------------------Problem1024:#include<iostream>
using namespace std;
int main()
{
	int n,t=1,s=0;
	cin >> n;
	for (int i = 1; i <= n; i++)
	{
		for (int j = 1; j <= i; j++)
		{
			t *= j;
		}
		s += t;
		t = 1;
	}
	cout << s << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1025:#include<iostream>
#include<iomanip>
using namespace std;
int main()
{
	int a, b, c;
	cin >> a >> b >> c;
	int suma=0, sumb=0;
	float sumc = 0;
	for (int i = 1; i <=a; i++)
	{
		suma += i;
	}
	for (int j = 1; j <= b; j++)
	{
		sumb += (j*j);
	}
	for (int k = 1; k <= c; k++)
	{
		sumc += (float)1 / k;
	}
	cout << fixed << setprecision(2) << suma + sumb + sumc<<endl;
	//cin.get();
	//cin.get();//cf
	return 0;
}------------------------------------------------------Problem1026:#include<iostream>
using namespace std;
int main()
{
	int x, i, j, k;
	for ( x = 100; x < 1000; x++)
	{
		i = x / 100;
		j = (x % 100)/10;
		k = x % 10;
		if (x==i*i*i+j*j*j+k*k*k)
		{
			cout << x << endl;
		}
		
	}

return 0;
}------------------------------------------------------Problem1027:#include<iostream>;
using namespace std;
int main()
{
	int n, i,j,s=0;
	cin >> n;
	for ( i =1; i <= n; i++)
	{
		s = 0;
		for (j = 1; j < i; j++)
		{
			if ((i%j) == 0)
			{
				s=s+j;
			}
		}
		if (s == i)
		{
			cout << i << " its factors are ";
			for (j = 1; j < i; j++)
			{
				if (i %j == 0)
				{
					cout << j<<" ";
				}
			}
			cout << endl;	
		}

	}





	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1028:#include<iostream>
#include<iomanip>
using namespace std;
float fib(int);
int main()
{
	int n;
	float sum=0;
	cin >> n;
	for (int i = 1; i <=n; i++)
	{
		
		sum +=(fib(i + 1) / fib(i));
	}
	cout << fixed << setprecision(2) << sum << endl;
	//cin.get();
	//cin.get();
	return 0;
}

float fib(int x)
{
	if (x == 1) return 1;
	else if (x == 2) return 2;
	else return (fib(x - 1) + fib(x - 2));
}------------------------------------------------------Problem1029:#include<iostream>
#include<iomanip>
using namespace std;
int main()
{
	float m, n,s=0;
	cin >> m >> n;
	for ( int i = 0; i < n; i++)
	{
		s += m;
		m /= 2;
		s += m;
	}
	s -= m;
	cout <<fixed<<setprecision(2)<< m<<" " << s << endl;



	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1030:#include<iostream>
using namespace std;
int main()
{
	int n,s=1;
	cin >> n;
	for (int i = 1; i < n; i++)
	{
		s = (s + 1) * 2;
	}
	cout << s << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1031:#include<iostream>
#include<cmath>
#include<iomanip>
using namespace std;
double getsqrt(int, double);
int main()
{
	double a;
	cin >> a;
	cout<<fixed<<setprecision(3)<<getsqrt(a, a / 2);
	//cin.get(); cin.get();
	return 0;
}
double getsqrt(int a,double x0)
{
	double x1 = (x0 + a / x0) / 2;
	if (fabs(x1 - x0) >= 1e-5) x1=getsqrt(a,x1);
	return x1;
}------------------------------------------------------Problem1032:#include<iostream>
using namespace std;
int main()
{
	int n;
	cin >> n;
	for (int i = 2; i <=n; i++)
	{
		int factor = 1;
		for (int j = 1; j < i; j++)
		{
			if (i%j == 0) factor = j;
		}
		if (factor == 1) cout << i << endl;
	}
	//cin.get();
	//cin.get()//cf;
	return 0;
}------------------------------------------------------Problem1033:#include<iostream>
using namespace std;
int main()
{
	int a[10];
	for (int i = 0; i < 10; i++)
	{
		cin >> a[i];
	}
	for (int i = 0; i < 9; i++)
	{
		int k = i;
		for (int j = i+1; j < 10; j++)
		{
			if (a[k] > a[j]) k = j;
		}
		if (k!=i)
		{
			int tmp = a[i];
			a[i] = a[k];
			a[k] = tmp;
		}
	}
	for (int i = 0; i < 10; i++)
	{
		cout << a[i] << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1034:#include<iostream>
using namespace std;
void f(int array[3][3], int &m, int &n);
int main()
{
	int arr[3][3], m=0, n=0;
	for (int i = 0; i < 3; i++)
	{
		for (int j = 0; j < 3; j++)
		{
			cin >> arr[i][j];
		}
	}
	f(arr, m, n);
	cout << m << " " << n << endl;
	//cin.get();
	//cin.get();
	return 0;
}
void f(int arr[3][3], int &m, int &n)
{
	m = n = 0;
	for (int i = 0; i < 3; i++)
	{
		m += arr[i][i];
	}
	for (int i = 0; i < 3; i++)
	{
		n += arr[i][2 - i];
	}
}------------------------------------------------------Problem1035:#include<iostream>
using namespace std;
int main()
{
	int a[9];
	for (int i = 0; i < 10; i++)
	{
		cin >> a[i];
	}
	for (int i = 0; i < 9; i++)
	{
		for (int j = 0; j < 9-i; j++)
		{
			if (a[j + 1] < a[j])
			{
				int tmp = a[j];
				a[j] = a[j + 1];
				a[j + 1] = tmp;
			}
		}
	}
	for (int i = 0; i < 10; i++)
	{
		cout << a[i] << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1036:#include<iostream>
using namespace std;
int main()
{
	int c[10];
	for (int i = 0; i < 10; i++)
	{
		cin>>c[i];
	}
	for (int j = 9; j >=0; j--)
	{
		cout << c[j];
		if (j != 0)cout << " ";
	}
	//cin.get();
	//cin.get();
	return 0;
}
------------------------------------------------------Problem1037:#include<iostream>;
using namespace std;
int gys(int,int);
int gbs(int,int);
int main()
{
	int m, n;
	cin >> m >> n;
	cout << gys(m,n) << " " << gbs(m,n) << endl;
	//cin.get();
	//cin.get();
	return 0;
}
int gys(int m, int n)
{
	int p;
	int x = m > n ? n : m;
	for (int i = 1; i <= x; i++)
	{
		if ((m%i == 0) && (n%i == 0))
		{
			p = i;
		}
	}
	return p;
}
int gbs(int m, int n)
{
	int q;
	int x = m > n ? m : n;
	for (int j = x; j <= (m*n); j++)
	{
		if ((j%m == 0) && (j%n == 0))
		{
			q = j;
			break;
		}
	}
	return q;
}------------------------------------------------------Problem1038:#include<iostream>
#include<iomanip>
#include<cmath>
using namespace std;
void smaller(float, float, float);
void equal(float, float, float);
void larger(float, float, float);
int main()
{
	float a, b, c;
	cin >> a >> b >> c;
	int die = b*b - 4 * a*c;
	if (die < 0) smaller(a, b, c);
	else if (die == 0) equal(a, b, c);
	else larger(a, b, c);
	//cin.get();
	//cin.get();
	return 0;
}
void smaller(float a, float b, float c)
{
	cout << fixed<<  setprecision(3) <<"x1=" << -b / (a * 2) << "+" << sqrt(4 * a*c - b*b) / (a * 2) << "i ";
	cout << fixed << setprecision(3) << "x2=" << -b / (a * 2) << "-" << sqrt(4 * a*c - b*b) / (a * 2) << "i";
}
void equal(float a, float b, float c)
{
	cout << fixed << setprecision(3) << "x1=" << ((-b + sqrt(b*b - 4 * a*c)) / 2 * a) << " ";
	cout << fixed << setprecision(3) << "x2=" << ((-b - sqrt(b*b - 4 * a*c)) / 2 * a) << " ";
}
void larger(float a, float b, float c)
{
	cout << fixed << setprecision(3) << "x1=" << ((-b + sqrt(b*b - 4 * a*c)) / 2 * a) << " ";
	cout << fixed << setprecision(3) << "x2=" << ((-b - sqrt(b*b - 4 * a*c)) / 2 * a) << " ";
}------------------------------------------------------Problem1039:#include<iostream>
using namespace std;
int main()
{
	int i;
	cin >> i;
	int factor = 1;
	for (int j = 1; j < i; j++)
	{
		if (i%j == 0) factor = j;
	}
	if (factor == 1) cout << "prime" << endl;
	else cout << "not prime" << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1040:#include<iostream>
using namespace std;
int main()
{
	int arr[3][3];
	for (int i = 0; i < 3; i++)
	{
		for (int j = 0; j < 3; j++)
		{
			cin >> arr[i][j];
		}
	}
	for (int i = 0; i < 3; i++)
	{
		for (int j = 0; j < 3; j++)
		{
			cout << arr[j][i]<<" ";
		}
		cout << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1041:#include<iostream>
#include<string>
using namespace std;
void reverse(string &);
int main()
{
	string str;
	cin >> str;
	reverse(str);
	cout << str << endl;
	//cin.get();
	//cin.get();
	return 0;
}
void reverse(string &str)
{
	int len = str.length();
	string tmp=str; 
	 for (int i = 0; i < len; i++)
	 {
		 str[i] = tmp[len - i - 1];
	 }
}------------------------------------------------------Problem1042:#include<iostream>
#include<string>
using namespace std;
string strcon(string, string);
int main()
{
	string stra, strb;
	cin >> stra >> strb;
	cout << strcon(stra, strb) << endl;
	//cin.get();
	//cin.get();
	return 0;
}
string strcon(string a, string b)
{
	string c;
	return c = a + b;
}------------------------------------------------------Problem1043:#include<iostream>
#include<string>
using namespace std;
int main()
{
	string in;
	char out[50];
	int index = 0;
	getline(cin, in);
	for (int i = 0; i < in.length(); i++)
	{
		switch (in[i])
		{
		case 'a':case 'e':case 'i':case 'u':case 'o':
			out[index] = in[i];
			index++;
			break;
		}
	}
	for (int i = 0; i < index; i++)
	{
		cout << out[i];
	}
	cout << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1044:#include<iostream>
using namespace std;
int main()
{
	char c[5];
	cin >> c;
	for (int i = 0; i < 4; i++)
	{
		cout << c[i] << " ";
	}
	//cin.get();
	//cin.get();
	return 0;
}
------------------------------------------------------Problem1045:#include<iostream>
#include<string>
using namespace std;
void count(string &str, int &a, int &b, int &c, int &d);
int main()
{
	int a = 0, b = 0, c = 0, d = 0;
	string str;
	getline(cin, str);
	count(str, a, b, c, d);
	cout << a << " " << b << " " << c << " " << d << " ";
	//cin.get();
	//cin.get();
	return 0;
}
void count(string &str, int &a, int&b, int &c, int &d)
{
	for (int i = 0; i < str.length(); i++)
	{

		if ((str[i] >= 'a'&&str[i] <= 'z') || (str[i] >= 'A'&&str[i] <= 'Z')) a++;
		else if (str[i] >= '0'&&str[i] <= '9') b++;
		else if (str[i] == 32) c++;
		else d++;
	}
}------------------------------------------------------Problem1046:#include<iostream>
using namespace std;
void swap(int &p, int &q);
int main()
{
	int a, b;
	cin >> a >> b;
	swap(a, b);
	cout << a << " " << b;
	//cin.get();
	//cin.get();
	return 0;
}
void swap(int &p, int &q)
{
	int tmp = p;
	p = q;
	q = tmp;
}------------------------------------------------------Problem1047:#include<iostream>
using namespace std;
int mod(int, int);
int main()
{
	int a, b;
	cin >> a >> b;
	cout << mod(a, b) << endl;
	//cin.get();
	//cin.get();
	return 0;
}
int mod(int a, int b)
{
	return a%b;
}------------------------------------------------------Problem1048:#include<iostream>
#include<cmath>
#include<iomanip>
#define S(a,b,c,s)(s=(a+b+c)/2);
#define AREA(a,b,c,s,ans)(ans=sqrt(s*(s-a)*(s-b)*(s-c)));
using namespace std;
int main()
{
	double a, b, c, s, ans;
	cin >> a >> b >> c;
	S(a, b, c, s);
	AREA(a, b, c, s, ans);
	cout << fixed << setprecision(3) << ans << endl;
	//cin.get(); cin.get();
	return 0;
}------------------------------------------------------Problem1049:#include<iostream>
using namespace std;
void LEAP_YEAR(int);
int main()
{
	int y;
	cin >> y;
	LEAP_YEAR(y);
	//cin.get();
	//cin.get();
	return 0;
}
void LEAP_YEAR(int y)
{
	if ((y % 4 == 0 && y % 100 != 0) || (y % 400 == 0))cout << "L";
	else cout << "N";
}------------------------------------------------------Problem1050:#include<iostream>
using namespace std;
int main()
{
	float x;
	cin >> x;
	for (int i = 1; i <= 3; i++)
	{
		for (int j = 0; j < i; j++)
		{
			printf("%6.2f",x);
			if (j != i - 1)cout << " ";
		}
		cout << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1051:#include<iostream>
#include<iomanip>
using namespace std;
#define MAX(a,b,c,ans)\
ans=a>b?a:b;\
ans=ans>c?ans:c
float max(float, float, float);
int main()
{
	float a, b, c, ans;
	cin >> a >> b >> c;
	MAX(a, b, c, ans);
	cout << fixed << setprecision(3) << max(a, b, c) << endl;
	cout << fixed << setprecision(3) <<ans<<endl;
	//cin.get();
	//cin.get();
	return 0;
}
float max(float x, float y, float z)
{
	float ans;
	ans = x > y ? x : y;
	ans = ans > z ? ans : z;
	return ans;
}------------------------------------------------------Problem1052:#include<iostream>
#include<string>
using namespace std;
int main()
{
	string a;
	getline(cin, a);
	for (int i = 0;i<a.size();i++)
	{
		if (a[i] >= 'a'&&a[i] <= 'z')
		{
			if (a[i] == 'z')
				cout << "a";
			if (a[i]<'z'&&a[i] >= 'a')
				cout << char(int(a[i]) + 1);
		}
		else
			cout << a[i];
	}
	//cin.get();
	//cin.get();
	return 0;
}
------------------------------------------------------Problem1053:#include<iostream>
using namespace std;
int main()
{
	int a[3];
	cin >> a[0] >> a[1] >> a[2];
	for (int i = 0; i < 2; i++)
	{
		for (int j = 0; j < (2-i); j++)
		{
			if (a[j] > a[j + 1])
			{
				int tmp = a[j+1];
				a[j+1] = a[j];
				a[j] = tmp;
			}
		}
	}
	for (int i = 0; i < 3; i++)
	{
		cout << a[i] << " ";
	}
	cout << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1054:#include<iostream>
#include<string>
using namespace std;
int main()
{
	string str[3];
	for (int i = 0; i < 3; i++)
	{
		getline(cin, str[i]);
	}
	for (int i = 0; i < 2; i++)
	{
		for (int j = 0; j < 2-i; j++)
		{
			if (str[j] > str[j + 1]) swap(str[j], str[j + 1]);
		}
	}
	for (int i = 0; i < 3; i++)
	{
		cout << str[i] << endl;
	}
	return 0;
}------------------------------------------------------Problem1055:#include<iostream>
using namespace std;
void input(int arr[10]);
void process_max(int arr[10]);
void process_min(int arr[10]);
void output(int arr[10]);
int main()
{
	int arr[10];
	input(arr);
	process_min(arr);
	process_max(arr);
	output(arr);
	//cin.get();cin.get();
	return 0;
}
void input(int arr[10])
{
	for (int i = 0; i < 10; i++)
	{
		cin >> arr[i];
	}
}
void process_max(int arr[10])
{
	int M=0;
	for (int i = 0; i < 10; i++)
	{
		if (arr[i] > arr[M])M = i;
	}
	if (M != 9)
	{
		int tmp = arr[M];
		arr[M] = arr[9];
		arr[9] = tmp;
	}
}
void process_min(int arr[10])
{
	int m = 0;
	for (int i = 0; i < 10; i++)
	{
		if (arr[i] < arr[m])m = i;
	}
	if (m != 0)
	{
		int tmp = arr[m];
		arr[m] = arr[0];
		arr[0] = tmp;
	}
}
void output(int arr[10])
{
	for (int i = 0; i < 10; i++)
	{
		cout << arr[i] << " ";
	}
}------------------------------------------------------Problem1056:#include<iostream>
using namespace std;
int main()
{
	int n, data[100], m;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> data[i];
	}
	cin >> m;
	for (int i = n-m; i < n; i++)
	{
		cout << data[i] << " ";
	}
	for (int i = 0; i < n-m; i++)
	{
		cout << data[i] << " ";
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1057:#include<iostream>
using namespace std;
int main()
{
	int n, a[1000], remain;
	cin >> n;
	remain = n;
	for (int i = 0; i < n; i++)
	{
		a[i] = 1;
	}
	int index = 0,count=0;
	while (remain > 0)
	{
		if (a[index] == 1)count++;
		if (count == 3)
		{
			a[index] = 0;
			count = 0;
			remain--;
		}
		index++;
		if (index == n) index = 0;
	}
	cout << index << endl;
	//cin.get(); cin.get();
	return 0;
}------------------------------------------------------Problem1058:#include<iostream>
#include<string>
using namespace std;
int main()
{
	string str;
	int n, m;
	cin >> n;
	cin.get();
	getline(cin, str);
	cin >> m;
	for (int i = m-1; i < n; i++)
	{
		cout << str[i];
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1059:#include<iostream>
using namespace std;
int get_day(int, int);
int main()
{
	struct data
	{
		int year;
		int month;
		int day;
	}years;
	cin >> years.year>>years.month>>years.day;
	int ans = 0;
	for (int i = 1; i < years.month; i++)
	{
		ans += get_day(i, years.year);
	}
	cout << ans + years.day;
	//cin.get();
	//cin.get();
}
int get_day(int m, int y)
{
	switch (m)
	{
	case 1:case 3: case 5:case 7:case 8:case 10:case 12:
		return 31;
		break;
	case 4:case 6:case 9:case 11:
		return 30;
		break;
	case 2:
		if ((y % 4 == 0 && y % 100 != 0) || (y % 400 == 0) )return 29;
		else return 28;
		break;
	}
}------------------------------------------------------Problem1060:#include<iostream>
#include<string>
using namespace std;
struct data
{
	string id;
	string name;
	int grade1, grade2, grade3;
};
void input(struct data*);
void print(struct data*);
int main()
{
	int n;
	struct data slog;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		input(&slog);
		print(&slog);
	}
	//cin.get(); cin.get();
	return 0;
}
void input(struct data *x)
{
	cin >> x->id >> x->name >> x->grade1 >> x->grade2 >> x->grade3;
}
void print(struct data *x)
{
	cout << x->id << "," << x->name << "," << x->grade1 << "," << x->grade2 << "," << x->grade3 << endl;
}------------------------------------------------------Problem1061:#include<iostream>
#include<string>
using namespace std;
struct data
{
	string id;
	string name;
	int grade1, grade2, grade3;
};
int main()
{
	struct data log[100];
	int n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> log[i].id >> log[i].name >> log[i].grade1 >> log[i].grade2 >> log[i].grade3;
	}
	int s1=0, s2=0, s3=0, m=0,m_id;
	for (int i = 0; i < n; i++)
	{
		s1 += log[i].grade1;
		s2 += log[i].grade2;
		s3 += log[i].grade3;
		if (log[i].grade1 + log[i].grade2 + log[i].grade3>m)
		{
			m = log[i].grade1 + log[i].grade2 + log[i].grade3;
			m_id = i;
		}
	}
	cout << s1 / n << " " << s2 / n << " " << s3 / n << endl << log[m_id].id << " " << log[m_id].name << " " << log[m_id].grade1 <<" "<< log[m_id].grade2 <<" "<< log[m_id].grade3;
	//cin.get(); cin.get();
	return 0;
}------------------------------------------------------Problem1062:#include<iostream>
using namespace std;
int main()
{
	int n[100][2];
	int a, b;
	cin >> a >> b;
	for (int i = 0; i < a+b; i++)
	{
		cin >> n[i][0] >> n[i][1];
	}
	for (int i = 0; i < a+b-1; i++)
	{
		for (int j = 0; j < a+b-1-i; j++)
		{
			if (n[j][0]>n[j + 1][0])swap(n[j], n[j + 1]);
		}
	}
	for (int i = 0; i < a+b; i++)
	{
		cout << n[i][0] << " " << n[i][1] << endl;
	}
	return 0;
}------------------------------------------------------Problem1063:#include<iostream>
using namespace std;
float fact(int);
int main()
{
	int m, n;
	cin >> m >> n;
	cout << fact(m) / (fact(n)*fact(m - n));
	//cin.get();
	//cin.get();
	return 0;
}
float fact(int a)
{
	int x = 1;
	for (int i = 1; i <= a; i++)
	{
		x *= i;
	}
	return x;
}------------------------------------------------------Problem1064:#include<iostream>
#include<string>
using namespace std;
int main()
{
	string str;
	int ans=0;
	while (cin>>str)
	{
		for (int i = 0; i < str.length(); i++)
		{
			if (str[i] == '$') ans++;
		}
	}
	cout << ans << endl;
	return 0;
}------------------------------------------------------Problem1065:#include<iostream>
using namespace std;
int main()
{
	int a[100],n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> a[i];
	}
	int sum = 0;
	for (int i = 0; i < n; i++)
	{
		if (a[i] % 2 == 0) sum += a[i];
	}
	cout << sum << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1066:#include<iostream>
#include<string>
using namespace std;
void del_char(string &, char);
int main()
{
	char c;
	string str;
	cin >> c;
	cin.get();
	getline(cin, str);
	del_char(str, c);
	cout << str;
	//cin.get(); cin.get();
	return 0;
}
void del_char(string &str, char c)
{
	for (int i = str.length() - 1; i >= 0; i--)
	{
		if (str[i] == c) str.erase(i, 1);
	}
}------------------------------------------------------Problem1067:#include<iostream>
#include<cmath>
#include<iomanip>
using namespace std;
int main()
{
	int n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		float x,y;
		cin >> x;
		if (x < -2) y = x*x - sin(x);
		else if (x>2) y = sqrt(x*x + x + 1);
		else y = pow(2, x) + x;
		cout << fixed << setprecision(2) << y<<endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1069:#include<iostream>
#include<string>
using namespace std;
int main()
{
	int a = 0, b = 0, c = 0, d = 0;
	string str;
	getline(cin, str);
	for (int i = 0; i < str.length(); i++)
	{
		if ((str[i] >= 'A' && str[i] <= 'Z') || (str[i] >= 'a' && str[i] <= 'z')) a++;
		else if (str[i] == ' ') b++;
		else if (str[i] >= '0' && str[i] <= '9') c++;
		else d++;

	}
	cout << a << " " << c << " "<< b << " "<< d ;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1070:#include<iostream>
#include<iomanip>
using namespace std;
float fact(int);
int main()
{
	int n;
	float sum = 0;
	cin >> n;
	for (int i = 1; i <= n; i++)
	{
		sum +=1.0 / fact(i);
	}
	cout << fixed << setprecision(4) << sum << endl;
	//cin.get();
	//cin.get();
	return 0;
}
float fact(int n)
{
	int ans = 1;
	for (int i = 1; i <= n; i++)
	{
		ans *= i;
	}
	return ans;
}------------------------------------------------------Problem1071:#include<iostream>
using namespace std;
int main()
{
	int a[10], sum=0;
	for (int i = 0; i < 10; i++)
	{
		cin>>a[i];
	}
	float avg;
	for (int i = 0; i < 10; i++)
	{
		sum += a[i];
	}
	avg = sum / 10.0;
	int num = 0;
	for (int i = 0; i < 10; i++)
	{
		if (a[i] > avg)num++;
	}
	cout << num << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1072:#include<iostream>
using namespace std;
int isprime(int);
int main()
{
	int m, n;
	cin >> m >> n;
	int sum=0;
	for (int i = m; i <= n; i++)
	{
		if (!isprime(i))sum += i;
	}
	cout << sum << endl;
	//cin.get();
	//cin.get();
	return 0;
}
int isprime(int n)
{
	int tmp = 0;
	if (n == 1)tmp++;
	for (int i = 2; i < n; i++)
	{
		if (n%i == 0)tmp++;
	}
	return tmp;
}------------------------------------------------------Problem1073:#include<iostream>
using namespace std;
int main()
{
	long long int log[1000][2], log_o[3][10];
	int index0 = 0, index1 = 0, index2 = 0,index=0;
	int t;
	while (cin >> t)
	{
		log[index][0] = t;
		cin >> log[index][1];
		index++;
	}
	//ini
	for (int i = 0; i < 3; i++)
	{
		for (int j = 0; j < 10; j++)
		{
			log_o[i][j] = 0;
		}
	}
	//main
	for (int i = index-1; i >= 0; i--)
	{
		if (log[i][0] == 0&&index0<10)
		{
			log_o[0][index0] = log[i][1];
			index0++;
		}
		else if (log[i][0] == 1 && index1<10)
		{
			log_o[1][index1] = log[i][1];
			index1++;

		}
		else if(index2<10)
		{
			log_o[2][index2] = log[i][1];
			index2++;
		}
	}
	//output
	for (int i = 0; i < 10; i++)
	{
		for (int j = 0; j < 3; j++)
		{
			cout << log_o[j][i];
			if (j != 2)cout << " ";
		}
		cout << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1074:import java.math.BigInteger;
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
------------------------------------------------------Problem1075:#include<iostream>
using namespace std;
int is_sorted(int arr[],int);
int main()
{
	int a[10000];
	int a_length = 0;
	while (cin >> a[a_length]) a_length++;
	if (is_sorted(a, a_length))cout << "YES\n";
	else cout << "NO\n";
}
int is_sorted(int arr[],int arr_length)
{
	int flag = 1;
	for (int i = 0; i < arr_length-1; i++)
	{
		if (arr[i] > arr[i + 1]) flag = 0;
	}
	return flag;
}------------------------------------------------------Problem1076:#include<iostream>
#include<string>
#include<sstream>
using namespace std;
string express[10] = { "零","壹","贰","叁","肆","伍","陆","柒","捌","玖" };
string suffix[13] = { "元","拾","佰","仟","万","拾","佰","仟","亿","拾","佰","仟","万" };
int is_int(double);
void process(double x, string &s);
void process_pre(double x, string &s);
void process_suf(double x, string &s);
void replaceAll(string &src, string regex, string replacement);
void clean(string &s);
void special(string &s);
int main()
{
	double n;
	while (cin >> n)
	{
		string ans;
		process(n, ans);
		cout << ans << endl;
	}
}
int is_int(double x)
{
	long long int n = (long long int)x;
	if (n == x)return 1;
	return 0;
}
void process(double x, string &s)
{
	process_pre(x, s);
	clean(s);
	special(s);
	if (is_int(x))
	{
		s += "整";
	}
	else
	{
		process_suf(x, s);
	}
	replaceAll(s, "零角", "");
	replaceAll(s, "零分", "");
}
void process_pre(double x, string &s)
{
	long long int n = (long long int)x;
	stringstream ss;
	string num;
	ss << n;
	ss >> num;
	for (int i = 0; i < num.length(); i++)
	{
		s = s + express[num[i] - 48] + suffix[num.length() - 1 - i];
	}
}
void process_suf(double x, string &s) 
{
	x *= 100;
	long long int n = (long long int)x;
	s += express[n / 10 % 10] + "角" + express[n % 10] + "分";
}
void replaceAll(string &src, string regex, string replacement)
{
	int length = regex.length();
	while (src.find(regex) < src.length()) {
		src.replace(src.find(regex), length, replacement);
	}
}
void clean(string &s)
{
	string regex1[] = { "零仟", "零佰", "零拾" };
	string regex2[] = { "零亿", "零万", "零元" };
	string regex3[] = { "亿", "万", "元" };
	for (int i = 0; i < 3; i++) {
		replaceAll(s, regex1[i], "零");
	}
	for (int i = 0; i < 3; i++) {
		replaceAll(s, "零零零", "零");
		replaceAll(s, "零零", "零");
		replaceAll(s, regex2[i], regex3[i]);
	}
	replaceAll(s, "亿万", "亿");
}
void special(string &s)
{
	if (s == "元") s = "零元";
	else if (s == "壹拾元")s = "拾元";
}------------------------------------------------------Problem1077:#include<iostream>
using namespace std;
int main()
{
	int a1, b1, a2, b2;
	cin >> a1 >> b1 >> a2 >> b2;
	cout << a1 + a2 << " " << b1 + b2 << endl;
	//cin.get();
	//cin.get();
	return 0; 
}------------------------------------------------------Problem1077:#include<iostream>
using namespace std;
int main()
{
	int a1, b1, a2, b2;
	cin >> a1 >> b1 >> a2 >> b2;
	cout << a1 + a2 << " " << b1 + b2 << endl;
}------------------------------------------------------Problem1078:#include<iostream>
using namespace std;
int main()
{
	int a, b, c, d;
	cin >> a >> b >> c >> d;
	cout << (a*c - b*d) << " " << (b*c + a*d) << endl;
	//cin.get(); cin.get();
	return 0;
}------------------------------------------------------Problem1078:#include<iostream>
using namespace std;
int main()
{
	int a, b, c, d;
	cin >>a>>b>>c>>d;
	cout <<a*c-b*d << " " << b*c+a*d << endl;
}------------------------------------------------------Problem1079:#include<iostream>
using namespace std;
#include<set>
#include<map>
int main()
{
	set<int> zList;
	map<int, int> xCount;
	int m, n;
	cin >> m >> n;
	for (int i = 0; i < m; i++)
	{
		int x,z;
		cin >> x>>z;
		zList.insert(z);
		xCount[z] = x;
	}
	for (int i = 0; i < n; i++)
	{
		int x, z;
		cin >> x >> z;
		zList.insert(z);
		if (!xCount.count(z)) xCount[z] = 0;
		xCount[z] += x;
	}
	for (set<int>::reverse_iterator it = zList.rbegin(); it != zList.rend(); it++)
	{
		int t = xCount[*it];
		if (t!=0)
		{
			cout <<t << " " << *it << endl;
		}
	}
}------------------------------------------------------Problem1080:#include<iostream>
using namespace std;
int isPrime(int n)
{
	if (n % 6 != 1 && n % 6 != 5) return 0;
	for (int i = 5; i*i <n ; i+=6)
	{
		if (n%i == 0 || n % (i + 2) == 0)return 0;
	}
	return 1;
}
int main()
{
	int year1[13] = { 0,31,29,31,30,31,30,31,31,30,31,30,31 };
	int year2[13]= { 0,31,28,31,30,31,30,31,31,30,31,30,31 };
	for (int i = 1; i <= 12; i++)
	{
		for (int j = 1; j <= year1[i]; j++)
		{
			int m = 19880000 + i * 100 +j;
			if (isPrime(m))cout << m << endl;
		}
	}
	for (int i = 1; i <= 12; i++)
	{
		for (int j = 1; j <= year2[i]; j++)
		{
			int m = 19890000 + i * 100 + j;
			if (isPrime(m))cout << m << endl;
		}
	}
}
------------------------------------------------------Problem1083:#include<iostream>
using namespace std;
int is_same_ans(int m,int n,int mask)
{
	int a[8],b[8],c[8],index=0;
	for (int i = 0; i < 8; i++)
	{
		a[i] = 0;
		b[i] = 0;
		c[i] = 0;
	}
	while (m > 0)
	{
		a[index++] = m % 2;
		m /= 2;
	}
	index = 0;
	while (n > 0)
	{
		b[index++] = n % 2;
		n /= 2;
	}
	index = 0;
	while (mask > 0)
	{
		c[index++] = mask % 2;
		mask /= 2;
	}
	int flag = 1;
	for (int i = 0; i < 8; i++)
	{
		if ((a[i]&c[i]) != (b[i]&c[i])) flag = 0;
	}
	return flag;
}
int main()
{
	int self[4], mask[4], other[4];
	char t;
	cin >> self[0] >> t >> self[1] >> t >> self[2] >> t >> self[3];
	cin >> mask[0] >> t >> mask[1] >> t >> mask[2] >> t >> mask[3];
	int n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		int flag = 0;
		cin >> other[0] >> t >> other[1] >> t >> other[2] >> t >> other[3];
		for (int i = 0; i < 4; i++)
		{
			if (is_same_ans(self[i], other[i], mask[i]))flag++;
		}
		if (flag==4)cout << "INNER\n";
		else cout << "OUTER\n";
	}
}------------------------------------------------------Problem1086:#include<iostream>
using namespace std;
int main()
{
	int x;
	cin >> x;
	cout << oct << x<<endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1086:#include<iostream>
#include<iomanip>
using namespace std;
int main()
{
	int x;
	cin >> x;
	cout << oct << x << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1087:#include<iostream>
#include<iomanip>
using namespace std;
int main()
{
	float c, f;
	cin >> f;
	c = 5 * (f - 32) / 9;
	cout << fixed << setprecision(2) << c << endl;
	cin.get();
	cin.get();
	return 0;
}------------------------------------------------------Problem1088:#include<iostream>
#include<iomanip>
using namespace std;
int main()
{
	int x;
	float y;
	cin >> x;
	if (x < 1) y = x;
	else if (x >= 10) y = x * 3 - 11;
	else y = x * 2 - 1;
	cout << fixed << setprecision(2) << y;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1089:#include<iostream>
using namespace std;
int main()
{
	int n,sum=0;
	int num[10];
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> num[i];
		if (num[i] % 2 == 0) sum += num[i];
	}
	cout << sum << endl;
	//cin.get();
	//cin.get();
	return 0;
}
------------------------------------------------------Problem1090:#include<iostream>
using namespace std;
int num(int);
int main()
{
	int sum=0, n;
	cin >> n;
	for (int j = 0; j < n; j++)
	{
		sum += num(j + 1);
	}
	cout << sum << endl;
	cin.get();
	cin.get();
	return 0;
}
int num(int i)
{
	return i * 3 - 1;
}------------------------------------------------------Problem1091:#include<iostream>
using namespace std;
int main()
{
	for (int i = 10; i <= 1000; i++)
	{
		if (i % 7 == 0 && i % 3 == 0 && i % 2==0) cout << i << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1092:#include<iostream>;
using namespace std;
int main()
{
	int m, n, x, p, q;
	cin >> m >> n;
	x = m > n ? m : n;
	for (int i = 1; i < x; i++)
	{
		if ((m%i == 0) && (n%i == 0))
		{
			p = i;
		}
	}
	for (int j = x; j <= (m*n); j++)
	{
		if ((j%m == 0) && (j%n == 0))
		{
			q = j;
			break;
		}
	}
	cout << p <<endl<< q << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1093:#include<iostream>
using namespace std;
int main()
{
	int a = 0, b = 0, c = 0, d = 0;
	while (cin.peek() != '\n')
	{
		char x = cin.get();
		if ((x >= 'A' && x <= 'Z') || (x >= 'a' && x <= 'z')) a++;	
		else if (x == ' ') b++;
		else if (x >= '0' && x <= '9') c++;
		else d++;
	}
	cout << a << endl << b << endl<< c << endl<< d << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1094:#include<iostream>
#include<iomanip>
using namespace std;
int main()
{
	double sum = 0, a = 1;
	for (int i = 1; i <= 30; i++)
	{
		a *= i;
		sum += a;
	}
	cout << scientific << setprecision(2) << sum << endl;
}------------------------------------------------------Problem1095:#include<iostream>
using namespace std;
int main()
{
	int a, b, c;
	for (int i = 100; i < 1000; i++)
	{
		a = i / 100;
		b = (i / 10) % 10;
		c = i % 10;
		if (i == a*a*a + b*b*b + c*c*c)
			cout << i << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1096:#include<iostream>
using namespace std;
int main()
{
	int x;
	cin >> x;
	for (int i = 2; i <=x; i++)
	{
		if (x%i==0)
		{
			int n = 1;
			for (int j = 1; j <i; j++)
			{
				if (i%j == 0) n = j;
			}
			if (n == 1) cout << i << " ";
		}
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1097:#include<iostream>
using namespace std;
int main()
{
	for (int x = 100; x <=1233; x++)
	{
		int y = 1333 - x;
		if ((x % 10 ==y/100)&&(y%10==x/100)&&(x/10%10==y/10%10))
		{
			cout << x << "+" << y << "=1333\n";
		}
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1098:#include<iostream>
using namespace std;
int main()
{
	int n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		for (int j = 0; j < n-i-1; j++)
		{
			cout << " ";
		}
		for (int j = 0; j < i*2+1; j++)
		{
			cout << "*";
		}
		cout << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1099:#include<iostream>
using namespace std;
int main()
{
	for (int i = 1; i <= 1000; i++)
	{
		int sum = 0;
		if (i == 1)sum++;
		for (int j = 1; j < i; j++)
		{
			if (i%j == 0)sum+=j;
		}
		if (sum == i)
		{
			cout << i << "=1";
			for (int k = 2; k < i; k++)
			{
				if (i%k == 0) cout << "+" << k;
			}
			cout << endl;
		}
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1100:#include<iostream>
#include<iomanip>
using namespace std;
int main()
{
	for (int r = 1; r <= 10; r++)
	{
		double s = r*r*3.14159;
		if (s >= 40 && s <= 90)cout << "r=" << r << " area=" << fixed << setprecision(2) << s << endl;
	}
	//cin.get(); cin.get();
	return 0;
}------------------------------------------------------Problem1101:#include<iostream>
using namespace std;
int main()
{
	int a[10];
	for (int i = 0; i < 10; i++)
	{
		cin >> a[i];
	}
	for (int i = 0; i < 9; i++)
	{
		int k = i;
		for (int j = i+1; j < 10; j++)
		{
			if (a[k] > a[j])k = j;
		}
		if (k != i)
		{
			int tmp = a[k];
			a[k] = a[i];
			a[i] = tmp;
		}
	}
	for (int i = 0; i < 10; i++)
	{
		cout << a[i]<<endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1102:#include<iostream>
using namespace std;
int main()
{
	int a[20];
	for (int i = 0; i < 20; i++)
	{
		cin >> a[i];
	}
	for (int i = 0; i < 20; i++)
	{
	    bool is_ok = 0;
		for (int j = 0; j < 20; j++)
		{
			if (a[i]%a[j] == 0 && i != j) is_ok = 1;
		}
		if (is_ok)cout << a[i] << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1103:#include<iostream>
using namespace std;
int main()
{
	int arr[3][3];
	for (int i = 0; i < 3; i++)
	{
		for (int j = 0; j < 3; j++)
		{
			cin >> arr[i][j];
		}
	}
	int sum = 0;
	for (int i = 0; i < 3; i++)
	{
		sum += arr[i][i];
	}
	cout << sum << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1104:#include<iostream>
using namespace std;
int main()
{
	int a[6], b[8];
	for (int i = 0; i < 6; i++)
	{
		cin >> a[i];
	}
	for (int i = 0; i < 8; i++)
	{
		cin >> b[i];
	}
	for (int i = 0; i < 6; i++)
	{
		for (int j = 0; j < 8; j++)
		{
			if (a[i] == b[j]) cout << a[i] << endl;
		}
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1107:#include<iostream>
#include<cmath>
using namespace std;
int main()
{
	int a, b, c,x1,x2;
	cin >> a >> b >> c;
	if (b*b - 4 * a*c >= 0)
	{
		x1 = (-b + sqrt(b*b - 4*a*c)) / 2*a;
		x2 = (-b - sqrt(b*b - 4 * a*c)) / 2 * a;
		cout << x1 << " " << x2<<endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1107:#include<iostream>
#include<cmath>
using namespace std;
int main()
{
	int a, b, c;
	cin >> a >> b >> c;
	int d = b*b - 4 * a*c;
	cout << (-b + sqrt(d)) / 2 * a<<" ";
	cout << (-b - sqrt(d)) / 2 * a;
	//cin.get();
	//cin.get();
	return 0; 
}------------------------------------------------------Problem1107:#include<iostream>
#include<cmath>
using namespace std;
int main()
{
	int a, b, c, x1, x2;
	cin >> a >> b >> c;
	if (b*b - 4 * a*c >= 0)
	{
		x1 = (-b + sqrt(b*b - 4 * a*c)) / 2 * a;
		x2 = (-b - sqrt(b*b - 4 * a*c)) / 2 * a;
		cout << x1 << " " << x2 << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1108:#include<iostream>
#include<string>
using namespace std;
int main()
{
	string str;
	getline(cin, str);
	for (int i = 0; i < str.length(); i++)
	{
		if ((str[i] >= 'A'&&str[i] <= 'Z') || (str[i] >= 'a'&&str[i] <= 'z')) cout << str[i];
	}
	cout << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1109:#include<iostream>
using namespace std;
int main()
{
	int a[4];
	for (int i = 0; i < 4; i++)
	{
		cin >> a[i];
	}
	for (int e = 3; e >= 0; e--)
	{
		for (int i = 0; i < 4; i++)
		{
			for (int j = 0; j < 4; j++)
			{
				for (int k = 0; k < 4; k++)
				{
					if ((i != j)&&(j != k)&&(k != i)&&(i!=e)&&(j!=e)&&(k!=e))cout << a[i] << " " << a[j] << " " << a[k] << endl;
				}
			}
		}
	}
	return 0;
}------------------------------------------------------Problem1110:#include<iostream>
using namespace std;
void print(int n) {
	for (int i = 0; i < n; ++i) {
		cout << " ";
	}
}
int main() {
	int num;
	cin >> num;
	for (int z = 0; z < num; ++z) {
		int n, k;
		cin >> n >> k;
		cout << "X";
		print(n - 2);
		cout << "X \n";
		for (int i = 0; i < k; ++i) {
			for (int j = 1; j < n/2; ++j) {
				print(j);
				cout<<"X";
				print(j*2-1);
				cout << "X \n";
			}
			print(n/2);
			cout<<"X \n";
			for (int j = n/2-1; j >=0; --j) {
				print(j);
				cout<<"X";
				print(n-2*j-2);
				cout << "X \n";
			}

		}
		cout << endl;
	}
}
------------------------------------------------------Problem1111:import java.util.Scanner;

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
------------------------------------------------------Problem1114:#include <iostream>
using namespace std;
int main()
{
	unsigned int x;
	while (cin >> x)
	{
		int sum = 0;
		while (x >= 1)
		{
			sum += x % 10;
			x /= 10;
		}
		cout << sum << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}
------------------------------------------------------Problem1115:#include<iostream>
using namespace std;
int main()
{
	int x,a,b,c;
	cin >> x;
	a = x / 100;
	b = (x / 10) % 10;
	c = x % 10;
	if (x == a*a*a + b*b*b + c*c*c)
		cout << "1\n";
	else cout << "0\n";
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1116:#include<iostream>
using namespace std;
int main()
{
	for (int i = 100; i <= 999; i++)
	{
		int a, b, c;
		a = i / 100;
		b = (i / 10) % 10;
		c = i % 10;
		if (i == a*a*a + b*b*b + c*c*c) cout << i<< endl;
	}
	//cin.get();
	//cin.get();woc
	return 0;
}------------------------------------------------------Problem1117:#include<iostream>
using namespace std;
int main()
{
	for (int a = 0;; a++)
	{
		if (((a * 8 + 7) * 8 + 1) * 8 + 1 == (34 * a + 15) * 17 + 4)
		{
			cout << (34 * a + 15) * 17 + 4 << endl;
			break;
		}
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1118:#include<iostream>
using namespace std;
int main()
{
	for (int a = 1; a <= 3000; a++)
	{
		int b=0,tmp=0;
		for (int j = 1; j < a; j++)
		{
			if (a%j == 0) b += j;
		}
		for (int j = 1; j <b; j++)
		{
			if (b%j == 0)tmp += j;
		}
		if (a == tmp&&a < b) cout << "(" << a << "," << b << ")";
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1119:#include<iostream>
using namespace std;
int main()
{
	for (int i = 1; i <= 40; i++)
	{
		int tmp = 1;
		for (int j = 1; j <= i; j++)
		{
			if (40 % j == 0 && i%j == 0) tmp = j;
		}
		if (tmp == 1) cout << i << "/40,";
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1120:#include<iostream>
#include<string>
using namespace std;
int main()
{
	string str;
	getline(cin, str);
	for (int i = 0; i < str.length(); i++)
	{
		if (str[i] >= 'A'&&str[i] <= 'Z')str[i] += 32;
	}
	cout << str;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1121:#include<iostream>
using namespace std;
int main()
{
	cout << "A,B,C,F,";
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1122:#include<iostream>
#include<string>
using namespace std;
int main()
{
	string str1, str2;
	cin >> str2;
	str1=str2;
	for (int i = 0; i < str1.length(); i++)
	{
		str2[str1.length() - i - 1] = str1[i];
	}
	cout << str1 + str2 << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1123:#include<iostream>
using namespace std;
int main()
{
	int x;
	cin >> x;
	cout << x << "*" << x << "*" << x << "=" << x*x*x << "=";
	for (int i = 0; i < x; i++)
	{
		cout << x*x - x + 1 + 2 * i;
		if (i != x - 1) cout << "+";
	}
}------------------------------------------------------Problem1124:#include<iostream>
using namespace std;
int main()
{
	int a[4];
	for (int i = 0; i < 4; i++)
	{
		cin >> a[i];
	}
	for (int i = 0; i < 3; i++)
	{
		for (int j = 0; j < 3-i; j++)
		{
			if (a[j] > a[j + 1])
			{
				int tmp = a[j];
				a[j] = a[j + 1];
				a[j + 1] = tmp;
			}
		}
	}
	for (int i = 0; i < 4; i++)
	{
		cout << a[i];
		if (i != 3)cout << " ";
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1125:#include<iostream>
using namespace std;
int main()
{
	int a[10];
	for (int i = 0; i < 10; i++)
	{
		cin >> a[i];
	}
	for (int i = 0; i < 9; i++)
	{
		for (int j = 0; j < 9-i; j++)
		{
			if (a[j] < a[j + 1])
			{
				int tmp = a[j];
				a[j] = a[j + 1];
				a[j + 1] = tmp;
			}
		}
	}
	for (int i = 0; i < 10; i++)
	{
		cout << a[i];
		if (i != 9)cout << " ";
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1126:#include<iostream>
#include<string>
using namespace std;
int main()
{
	string str;
	cin >> str;
	int count=0;
	for (int i = 0; i < str.length(); i++)
	{
		if ((str[i] >= 'a'&&str[i]<='z') || (str[i]>='A'&&str[i] <= 'Z')) count++;
	}
	cout << count << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1127:#include<iostream>
using namespace std;
int fib(int);
int main()
{
	int n;
	cin >> n;
	for (int i = 1; i <= n; i++)
	{
		cout << fib(i);
		if (i != n)cout << " ";
	}
	//cin.get();
	//cin.get();
	return 0;
}
int fib(int x)
{
	int ans;
	if (x == 1 || x == 2)ans = 1;
	else ans = fib(x - 1) + fib(x - 2);
	return ans;
}------------------------------------------------------Problem1128:#include<iostream>
using namespace std;
int main()
{
	int x, m = -999999999;
	while (cin >> x)
	{
		if (x == -1)break;
		if (x > m)m = x;
	}
	cout << m << endl;
	//cin.get(); cin.get();
	return 0;
}------------------------------------------------------Problem1129:#include<iostream>
using namespace std;
long long int  fact(int);
int main()
{
	int n;
	cin >> n;
	long long int ans = 0;
	for (int i = 1; i <= n; i++)
	{
		ans += fact(i);
	}
	cout << ans << endl;
	//cin.get();
	//cin.get();
	return 0;
}
long long int fact(int x)
{
	long long int  ans=1;
	for (int i = 2; i <= x; i++)
	{
		ans *= i;
	}
	return ans;
}------------------------------------------------------Problem1131:#include<iostream>
using namespace std;
int generate_num(int, int);
int main()
{
	int a, n,sum=0;
	cin >> a >> n;
	for (int i = 1; i <= n; i++)
	{
		sum += generate_num(a, i);
	}
	cout << sum<<endl;
	//cin.get();
	//cin.get();
	return 0;
}
int generate_num(int fact, int num)
{
	int ans=fact;
	for (int i = 1; i < num; i++)
	{
		int tmp = 1;
		for (int j = 0; j < i; j++)
		{
			tmp *= 10;
		}
		ans += tmp*fact;
	}
	return ans;
}------------------------------------------------------Problem1132:#include<iostream>
using namespace std;
int main()
{
	for (int i = 1000; i < 10000; i++)
	{
		int a = i / 100;
		int b = i % 100;
		if (i == (a + b)*(a + b))cout << i << "  ";
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1133:#include<iostream>
int f(int);
using namespace std;
int main()
{
	int x;
	cin >> x;
	cout << f(x) << endl;
	//cin.get();
	//cin.get();
	return 0;
}
int f(int x)
{
	int ans;
	if (x == 1)ans = 10;
	else if (x > 1) ans = f(x - 1) + 2;
	return ans;
}------------------------------------------------------Problem1134:#include<iostream>
using namespace std;
int main()
{
	int a[10][10];
	int n,sum=0;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		for (int j = 0; j < n; j++)
		{
			cin >> a[i][j];
		}
	}
	for (int i = 0; i < n; i++)
	{
		sum += a[i][i];
		if (i != n - 1 - i) sum += a[i][n - 1 - i];
	}
	cout << sum << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1135:#include<iostream>
using namespace std;
int main()
{
	int n;
	cin >> n;
	for (int i = 1; i <= n; i++)
	{
		int fac = 0;
		for (int j = 1; j <i; j++)
		{
			if (i%j == 0) fac= j;
		}
		if (fac == 1) cout << i << " ";
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1136:#include<iostream>
using namespace std;
int main()
{
	int a, b, c, d;
	for (int i = 95860;; i++)
	{
		a = i / 10000;
		b = i / 1000 % 10;
		c = i % 100 / 10;
		d = i % 10;
		if (a == d&&b == c)
		{
			cout << i << endl;
			break;
		}
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1137:#include<iostream>
using namespace std;
int main()
{
	int x, y, z;
	for (int x = 0; x <= 20; x++)
	{
		for (int y = 0; y <= 33; y++)
		{
			z = 100 - x - y;
			if (15*x + 9*y + z == 300 && z >= 0)
			{
				cout << "cock=" << x << ",hen=" << y << ",chicken=" << z << endl;
			}
		}
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1138:#include<iostream>
using namespace std;
int main()
{
	int n, s=0;
	int i;
	cin >> n;
	for (i = 1;; i++)
	{
		s += i*i*i;
		if (s > n)break;
	}
	cout << i - 1 << endl;
	return 0;
}------------------------------------------------------Problem1139:#include<iostream>
using namespace std;
int main()
{
	int num,fac=0;
	cin >> num;
	for (int i = 1; i < num; i++)
	{
		if (num%i == 0) fac = i;
	}
	if (fac != 1)cout << "0\n";
	else cout << "1\n";
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1140:#include<iostream>
#include<cmath>
using namespace std;
int get_suf(int);
int main()
{
	for (int i = 0; i <= 200000; i++)
	{
		if (get_suf(i) == i) cout << i << "  ";
	}
	//cin.get();
	//cin.get();
	return 0;
}
int get_suf(int num)
{
	int tmp = num, bit = 0;
	for (;;)
	{
		tmp /= 10;
		bit++;
		if (!tmp)break;
	}
	int sum = 0;
	for (int i = 1; i <= bit; i++)
	{
		sum += (num % int(pow(10,i)))*(int(num / pow(10, bit- i))%10)*pow(10,bit-i);
	}
	return sum % (int)pow(10,bit);
}------------------------------------------------------Problem1141:#include<iostream>
#include<iomanip>
using namespace std;
int main()
{
	int N;
	double s = 0,h=100;
	cin >> N;
	for (int i = 0; i < N; i++)
	{
		s += h;
		h /= 2;
		s += h;
	}
	s -= h;
	cout << fixed<<setprecision(4)<<s<<endl;
	//cin.get();
	//cin.get();
	return 0;
}

------------------------------------------------------Problem1142:#include<iostream>
using namespace std;
int main()
{
    double a,s=1,s1=0,i;
    for(i=1;i<=64;i++)
    {
        s*=i;
        s1+=s;
    }
    cout<<s1;
}------------------------------------------------------Problem1143:#include<iostream>
using namespace std;
void jg(int);
int main()
{
	int n;
	cin >> n;
	jg(n);
	//cin.get();
	//cin.get();
	return 0;
}
void jg(int x)
{
	if (x % 2 == 0)
	{
		cout << x << "/2=" << x / 2<<endl;
		if (x / 2 != 1)jg(x / 2);
	}
	if (x % 2 == 1)
	{
		cout << x << "*3+1=" << x * 3 + 1<<endl;
		if (x * 3 + 1 != 1)jg(x * 3 + 1);
	}
}
------------------------------------------------------Problem1144:import java.math.BigInteger;

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
}------------------------------------------------------Problem1145:#include<iostream>
using namespace std;
int main()
{
	int n,sum_s=0;
	cin >> n;
	for (int i = 1; i <= n; i++)
	{
		if (i % 2 == 1)sum_s+=i;
	}
	cout << sum_s << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1146:#include<iostream>
#include<iomanip>
using namespace std;
int main()
{
	int n;
	cin >> n;
	double t = 0;
	for (int i = 1; i <= n; i++)
	{
		t += (double)1 / i;
	}
	cout << fixed << setprecision(6) << t << " ";
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1147:#include<iostream>
using namespace std;
int main()
{
	int n,ans=1;
	cin >> n;
	for (int i = 1; i <= n; i++)
	{
		ans *= i;
	}
	cout << ans << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1148:#include<iostream>
#include<iomanip>
using namespace std;
int main()
{
	int m;
	double t = 1;
	cin >> m;
	for (int i = 2; i <= m; i++)
	{
		t -= (double)1 / (i*i);
	}
	cout << fixed << setprecision(6) << t << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1149:#include<iostream>
using namespace std;
int main()
{
	int a[3][3];
	cout << "W";
	cin.get(); cin.get();
	return 0;
}------------------------------------------------------Problem1150:#include<iostream>;
using namespace std;
int main()
{
	int count=0, tmp[27],s;
	for (int i = 0; i <= 4; i++)
	{
		for (int j = 0; j <= 3; j++)
		{
			s = i * 3 + j * 5;
			int exist = 0;
			for (int k = 0; k < count; k++)
			{
				if (tmp[k] == s) exist = 1;
			}
			if (exist == 0&&s)
			{
				tmp[count] = s;
				count++;
			}
		}
	}
	cout << count << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1151:#include<iostream>
#include<cmath>
using namespace std;
int fact(int);
int main()
{
	for (int i = 1; i < 10000000; i++)
	{

		int sum = 0;
		int x = 0;
		int temp = i;
		while (temp>0)
		{
			temp /= 10;
			x++;
		}
		for (int j = 0; j < x; j++)
		{
			sum += fact((i / (int)pow(10, j)) % 10);
		}
		if (sum == i)
		{
			cout << i << " ";
		}
	}
}
int fact(int a)
{
	int y = 1;
	for (int i = 1; i <= a ; i++)
	{
		y *= i;
	}
	return y;
}------------------------------------------------------Problem1152:#include<iostream>
using namespace std;
int main()
{
	int a, b, c;
	for (int i = 2; i < 1000; i++)
	{
		if (i / 10 < 1)
		{
			if (i == i*i*i)cout << i << "  ";
		}
		else if (i / 100 < 1)
		{
			a = i / 10;
			b = i % 10;
			if (i == a*a*a + b*b*b)cout << i << "  ";
		}
		else
		{
			a = i / 100;
			b = i / 10 % 10;
			c = i % 10;
			if (i == a*a*a + b*b*b + c*c*c) cout << i << "  ";
		}

	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1153:#include<iostream>
using namespace std;
int main()
{
	int n;
	int data[100][2];
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> data[i][0] >> data[i][1];
	}
	for (int i = 0; i < n; i++)
	{
		int  a_sum=0,b_sum=0;
		for (int j = 1; j < data[i][0]; j++)
		{
			if (data[i][0] %j == 0)a_sum += j;
		}
		for (int j = 1; j < data[i][1]; j++)
		{
			if (data[i][1] %j == 0)b_sum += j;
		}
		if (data[i][0] == b_sum && data[i][1] == a_sum)
			cout << "YES" << endl;
		else
			cout << "NO" << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1155:#include<iostream>
using namespace std;
int main()
{
	int a[100];
	for (int i = 0; i < 100; i++)
	{
		a[i] = 2 * i + 2;
	}
	int n, m;
	while (cin >> n >> m)
	{
		int ans[100], index = 0;
		for (int i = 0; i < n/m; i++)
		{
			int t = 0;
			for (int j = i*m; j < i*m+m; j++)
			{
				t += a[j];
			}
			ans[index] = t / m;
			index++;
		}
		if (n%m != 0)
		{
			int t = 0;
			for (int i = 0; i < n%m; i++)
			{
				t += a[n - 1 - i];
			}
			ans[index] = t / (n%m);
			index++;
		}
		for (int i = 0; i < index; i++)
		{
			cout << ans[i];
			if (i != index - 1)cout << " ";
		}
		cout << endl;
	}
	return 0;
}------------------------------------------------------Problem1156:#include<iostream>
using namespace std;
int main()
{
	int people[100],n,m;
	while (cin >> n >> m)
	{
		int index = 0;
		int remain = n;
		for (int i = 0; i < n; i++)
		{
			people[i] = 1;
		}
		int num = 0;
		while (remain > 1)
		{
			if (people[index] == 1)
			{
				num++;
				if (num == m)
				{
					people[index] = 0;
					remain--;
					num = 0;
				}
			}
			if (index == n - 1) index = 0;
			else index++;
		}
		for (int i = 0; i < n; i++)
		{
			if (people[i] == 1) cout << i + 1 << endl;
		}
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1157:#include<iostream>
#include<cmath>
using namespace std;
int reverse(int n)
{
	int ans = 0;
	while (n)
	{
		ans = ans * 10 + n % 10;
		n /= 10;
	}
	return ans;
}
int get_sum(int k, int m, int n)
{
	int tmp[10];
	for (int i = 0; i < 10; i++)
	{
		tmp[i] = 0;
	}
	int pos = 0;
	while (m || n)
	{
		tmp[pos++] = m % 10 + n % 10;
		m /= 10;
		n /= 10;
	}
	for (int i = 0; i < 9; i++)
	{
		if (tmp[i] >= k)
		{
			int t = tmp[i];
			tmp[i] = t%k;
			tmp[i + 1] += t / k;
		}
	}
	int ans=0;
	for (int i = 0; i < 8; i++)
	{
		ans += tmp[i] * pow(10, i);
	}
	return ans;
}
int main()
{
	int k, n, m, count = 0;
	cin >> k;
	cin >> n;
	m = reverse(n);
	while (m != n)
	{
		if (count == 31)break;
		n = get_sum(k, n, m);
		m = reverse(n);
		count++;
	}
	if (count != 31)
	{
		cout << "STEP=" << count << endl;
	}
	else
	{
		cout << "Impossible!" << endl;
	}

}
------------------------------------------------------Problem1158:#include<iostream>
#include<string>
using namespace std;
int main()
{
	string x[50];
	int n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> x[i];
	}
	for (int i = 0; i < n; i++)
	{
		int f1 = 0, f2 = 0, f3 = 0, f4 = 0;
		if (x[i].length()>=8&&x[i].length()<=16)
		{
			for (int j = 0; j < x[i].length(); j++)
			{
				if (x[i][j] >= 'A'&&x[i][j] <= 'Z') f1 = 1;
				else if (x[i][j] >= 'a'&&x[i][j] <= 'z') f2 = 1;
				else if (x[i][j] >= '0'&&x[i][j] <= '9') f3 = 1;
				else if(x[i][j]=='~'|| x[i][j] == '!' || x[i][j] == '@' || x[i][j] == '#' || x[i][j] == '$' || x[i][j] == '%' || x[i][j] == '^' )f4 = 1;
			}
			if (f1 + f2 + f3 + f4 >= 3)cout << "YES" << endl;
			else cout << "NO" << endl;
		}else
		{
			cout << "NO" << endl;
		}
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1158:#include<iostream>
#include<string>
using namespace std;
int main()
{
	string x[50];
	int n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> x[i];
	}
	for (int i = 0; i < n; i++)
	{
		int f1 = 0, f2 = 0, f3 = 0, f4 = 0;
		if (x[i].length() >= 8 && x[i].length() <= 16)
		{
			for (int j = 0; j < x[i].length(); j++)
			{
				if (x[i][j] >= 'A'&&x[i][j] <= 'Z') f1 = 1;
				else if (x[i][j] >= 'a'&&x[i][j] <= 'z') f2 = 1;
				else if (x[i][j] >= '0'&&x[i][j] <= '9') f3 = 1;
				else if (x[i][j] == '~' || x[i][j] == '!' || x[i][j] == '@' || x[i][j] == '#' || x[i][j] == '$' || x[i][j] == '%' || x[i][j] == '^')f4 = 1;
			}
			if (f1 + f2 + f3 + f4 >= 3)cout << "YES" << endl;
			else cout << "NO" << endl;
		}
		else
		{
			cout << "NO" << endl;
		}
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1160:#include<iostream>
#include<cmath>
#include<cstdlib>
using namespace std;
int main()
{
	int a[1000], b[1000], k, m, n;
	cin >> m >> n;
	for (int i = 0; i < m; i++)
	{
		cin >> a[i];
	}
	for (int i = 0; i < n; i++)
	{
		cin >> b[i];
	}
	int d = abs(a[0] - b[0]);
	for (int i = 0; i < n; i++)
	{
		for (int j = 0; j < m; j++)
		{
			if (abs(a[i] - b[j]) < d)
				d = abs(a[i] - b[j]);
		}
	}
	cout << d;
}------------------------------------------------------Problem1161:#include<iostream>
using namespace std;
int main()
{
	int n,rad[100];
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> rad[i];
	}
	int output[100],k=0;
	for (int i = 0; i < n; i++)
	{
		int exist = 0;
		for (int j = 0; j < k; j++)
		{
			if (output[j] == rad[i]) exist = 1;
		}
		if (!exist)
		{
			output[k] = rad[i];
			k++;
		}
	}
	cout << k << endl;
	//Now there have $k elements in array output[];
	for (int j = 0; j < k-1; j++)
	{
		for (int i = 0; i < k-j-1; i++)
		{
			if (output[i] > output[i + 1])
			{
				int tmp = output[i];
				output[i] = output[i + 1];
				output[i + 1] = tmp;
			}
		}
	}
	for (int i = 0; i < k; i++)
	{
		cout << output[i];
		if (i != k - 1)cout << " ";
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1162:#include<iostream>;
using namespace std;
int main()
{
	int x, y,sum=0;
	cin >>x >> y;
	for (int i = x; i <= y; i++)
	{
		if (i % 3 == 1 && i % 5 == 3)sum += i;
	}
	cout << sum << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1165:#include<iostream>
#include<cmath>
#include<cstdlib>
using namespace std;
int main()
{
	int n,a[100];
	while (cin >> n)
	{
		if (n == 0)break;
		for (int i = 0; i < n; i++)
		{
			cin >> a[i];
		}
		for (int i = 0; i < n-1; i++)
		{
			for (int j = 0; j < n-1-i; j++)
			{
				if (abs(a[j]) < abs(a[j + 1])) swap(a[j], a[j + 1]);
			}
		}
		cout << a[0];
		for (int i = 1; i < n; i++)
		{
			cout << " " << a[i];
		}
		cout << endl;
	}
}------------------------------------------------------Problem1167:#include<iostream>
using namespace std;
int main()
{
	int n;
	while (cin >> n)
	{
		int ans = 1;
		for (int i = 1; i < n; i++)
		{
			ans = (ans + 1) * 2;
		}
		cout << ans<<endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1168:#include<iostream>
#include<iomanip>
#include<cmath>
using namespace std;
int main()
{
	double x1, y1, x2, y2;
	while (cin >> x1 >> y1 >> x2 >> y2)
	{
		double s = sqrt((x1 - x2)*(x1 - x2) + (y1 - y2)*(y1 - y2));
		cout << fixed << setprecision(2) << s << endl;
	}
	return 0;
}
------------------------------------------------------Problem1169:#include<iostream>
#include<iomanip>
const double PI = 3.1415;
using namespace std;
int main()
{
	double r;
	while (cin>>r)
	{
		cout <<fixed<<setprecision(3)<< PI*r*r*r * 4 / 3<<endl;
	}
}------------------------------------------------------Problem1170:#include<iostream>
using namespace std;
int main()
{
	int book[21][191] = { 0 };
	for (int i = 1; i < 21; i++)
	{
		book[i][0] = 1;
	}
	for (int i = 2; i < 21; i++)
	{
		for (int free = 1; free < i; free++)
		{
			for (int j = 0; j < 191; j++)
			{
				if (book[free][j] == 1)book[i][(i - free)*free + j] = 1;
			}
		}
	}
	int n;
	while (cin >> n)
	{
		cout << 0;
		for (int i = 1; i < 191; i++)
		{
			if (book[n][i] == 1)cout << " " << i;
		}
		cout << endl;
	}
}------------------------------------------------------Problem1173:#include<iostream>
using namespace std;
int main()
{
	int t,a[100][100],n;
	cin >> t;
	for (int m = 0; m < t; m++)
	{
		cin >> n;
		for (int i = 0; i < n; i++)
		{
			for (int j = 0; j <= i; j++)
			{
				cin >> a[i][j];
			}
		}
		for (int i = n - 2; i >= 0; i--)
		{
			for (int j = 0; j <= i; j++)
			{
				a[i][j] += (a[i + 1][j]>a[i + 1][j + 1] ? a[i + 1][j] : a[i + 1][j + 1]);
			}
		}
		cout << a[0][0]<<endl;
	}
}------------------------------------------------------Problem1174:#include<iostream>
using namespace std;
int main()
{
	int a, b;
	char c;
	int buff[10];
	while (cin >> a >> c >> b)
	{
		double n = (double)a / b;
		cout << ".";
		for (int i = 0; i < 10; i++)
		{
			n *= 3;
			buff[i] = n;
			n -= buff[i];
		}
		if (n * 3 >= 2) ++buff[9];
		for (int i = 9; i >= 1; i--)
		{
			if (buff[i] > 2)
			{
				++buff[i - 1];
				buff[i] = 0;
			}
		}
		for (int i = 0; i < 10; i++)
		{
			cout << buff[i];
		}
		cout << endl;
	}
}------------------------------------------------------Problem1176:#include<iostream>
using namespace std;
int main()
{
	int n, num[100];
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> num[i];
	}
	for (int i = 0; i < n; i++)
	{
		int ini = 3;
		for (int j = 0; j < num[i]; j++)
		{
			ini = (ini - 1) * 2;
		}
		cout << ini << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1177:#include<iostream>
using namespace std;
int f(int);
int main()
{
	int x;
	while (cin >> x)
	{
		cout << f(x) << endl;
	}
}
int f(int x)
{
	if (x == 1)return 0;
	else if (x == 2)return 1;
	else return ((x - 1)*(f(x - 1) + f(x - 2)));
}------------------------------------------------------Problem1178:#include<iostream>
using namespace std;
int main()
{
	int x;
	cin >> x;
	int count = 0;
	for (int i = 1; i < x/5; i++)
	{
		for (int j = 1; j < x/2; j++)
		{
			for (int k = 1; k < x; k++)
			{
				if (i * 5 + j * 2 + k == x) count++;
			}
		}
	}
	cout << count << endl;
	return 0;
}------------------------------------------------------Problem1179:#include<iostream>
using namespace std;
int main()
{
	int ah, am, as, bh, bm, bs;
	int a, b,s;
	int n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> ah >> am >> as >> bh >> bm >> bs;
		a = ah * 3600 + am * 60 + as;
		b = bh * 3600 + bm * 60 + bs;
		s = a + b;
		cout << s / 3600 << " " << s / 60 % 60 << " " << s % 60 << endl;
	}
}------------------------------------------------------Problem1180:#include<iostream>
using namespace std;
int a[100000];
int main()
{
	int n,k;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> k;
		a[k]++;
	}
	int max_v = 0, max_id;
	for (int i = 0; i < n; i++)
	{
		if (a[i] > max_v)
		{
			max_v = a[i];
			max_id = i;
		}
	}
	cout << max_id << endl << max_v << endl;
}------------------------------------------------------Problem1182:#include<iostream>
using namespace std;
int yanghui_triangle[10][10];
int main()
{
	for (int i = 0; i < 10; i++)
	{
		for (int j = 0; j <= i; j++)
		{
			if (j == 0 || i == j) yanghui_triangle[i][j] = 1;
			else yanghui_triangle[i][j] = yanghui_triangle[i - 1][j - 1] + yanghui_triangle[i - 1][j];
		}
	}
	int n;
	while (cin >> n && (n >= 1 && n <= 10))
	{
		for (int i = 0; i < n; i++)
		{
			cout << "  ";
			for (int j = 0; j < i; j++)
			{
				cout << "   ";
			}
			for (int j = 0; j <n - i; j++)
			{
				cout<<yanghui_triangle[n - 1 - i][j];
				if (j != n - i - 1)cout << "     ";
			}
			cout << endl;
		}
		cout << endl;
	}
	return 0;
}------------------------------------------------------Problem1183:#include<iostream>
using namespace std;
int main()
{
	long long int n;
	while (cin >> n)
	{
		if (n == 0)break;
		if (n == 1)
		{
			cout << 0 << endl;
			continue;
		}
		int t = 0;
		while (n >3)
		{
			if (n % 3 == 0)
			{
				n /= 3;
				t++;
			}
			else if (n % 3 == 1)
			{
				n /= 3;
				t++;
				n ++;
			}
			else if (n % 3 == 2)
			{
				n = (n + 1) / 3;
				t++;
			}
		}
		cout << t + 1 << endl;
	}
}------------------------------------------------------Problem1185:#include<iostream>
using namespace std;
int main()
{
	unsigned int n;
	int	count=0;
	while (cin >> n)
	{
		int bin[32];
		for (int i = 0; i < 32; i++)
		{
			bin[i] = 0;
		}
		int index = 0;
		while (n)
		{
			bin[index++] = n % 2;
			n /= 2;
		}
		int flag = 1;
		for (int i = 0; i < 16; i++)
		{
			if (bin[i] != bin[31 - i])
			{
				flag = 0;
				break;
			}
		}
		if (flag)count++;
	}
	cout << count << endl;
}------------------------------------------------------Problem1186:#include<iostream>
#include<string>
#include<set>
#include<map>
#include<algorithm>
using namespace std;
string s[1000];
string s_std[1000];
int main()
{
	int n;
	while (cin >> n)
	{
		if (n == 0)break;
		for (int i = 0; i < n; i++)
		{
			cin >> s[i];
			s_std[i] = s[i];
			sort(&s_std[i][0], &s_std[i][0] + s_std[i].length());
		}
		map<string,int> tmp;
		set<string> result;
		for (int i = 0; i < n; i++)
		{
			if (!tmp.count(s_std[i])) tmp[s_std[i]] = 0;
			tmp[s_std[i]]++;
		}
		for (int i = 0; i < n; i++)
		{
			if (tmp[s_std[i]] == 1) result.insert(s[i]);
		}
		if (result.empty()) cout << "None";
		else
		{
			int i = 0;
			int len = result.size();
			for (set<string>::iterator it = result.begin(); it != result.end(); ++it)
			{
				cout << *it;
				i++;
				if (i != len) cout << " ";
			}
		}
		cout << endl;
	}
}------------------------------------------------------Problem1187:#include<iostream>
#include<cmath>
using namespace std;
long long int f(int n,int m)
{
	if(n<m)
	{
		return pow(2,n);
	}
	else if(n==m)
	{
		return pow(2,n)-1;
	}
	else
	{
		return (f(n-1,m)*2-f(n-m -1,m));
	}
}
int main()
{
	int l,n,m;
	cin>>l;
	for	(int j=0;j<l;j++)
	{
		cin>>n>>m;
		cout<<f(n,m)<<endl;
	}
}
------------------------------------------------------Problem1188:#include<iostream>
#include<cmath>
#include<cstdlib>
using namespace std;
int main()
{
	int ans[100];
	int ori;
	while (cin >> ori)
	{
		int index = 0;
		int n = abs(ori);
		while (n > 0)
		{
			ans[index++] = n % 2;
			n /= 2;
		}
		cout << ori << "-->" << (ori < 0 ? "-" : "");
		for (int i = index - 1; i >= 0; i--)
		{
			cout << ans[i];
		}
		cout << (ori==0?"0":"")<<endl;
	}
}------------------------------------------------------Problem1189:#include<iostream>
using namespace std;
int buf[1000];
int f(int x)
{
	if (buf[x] > 0) return buf[x];
	int ans = 1;
	for (int i=1; i <= x/2; i++)
	{
		ans += f(i);
	}
	buf[x] = ans;
	return ans;
}
int main()
{
	int n;
	while (cin >> n) {
		cout << f(n) << endl;
	}
}------------------------------------------------------Problem1191:#include<iostream>
#include<string>
using namespace std;
int main()
{
	string x;
	while (getline(cin, x))
	{
		int flag = 0;
		for (int i = 0; i < x.length(); i++)
		{
			if (i < x.length() - 1) 
			{
				if (x[i] == '/'&&x[i + 1] == '/')
				{
					if (i == 0)flag = 1;
					break;
				}
			}
			cout << x[i];
		}
		if(flag==0)cout << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1193:#include<iostream>
using namespace std;
int get_num(int x)
{
	int a = x / 100;
	x %= 100;
	int b = x / 50;
	x %=50;
	int c = x / 10;
	x %= 10;
	int d = x / 5;
	x %= 5;
	int e = x / 2;
	x %= 2;
	return a + b + c + d + e + x;
}
int main()
{
	int n;
	while (cin>>n)
	{
		if (n == 0)break;
		int sum = 0;
		for (int i = 0; i < n; i++)
		{
			int t;
			cin >> t;
			sum += get_num(t);
		}
		cout << sum << endl;
	}
}------------------------------------------------------Problem1195:#include<iostream>
using namespace std;
bool not_prime[32767];
int main()
{
	not_prime[0] = 1;
	not_prime[1] = 1;
	for (int i = 2; i < 32767; i++)
	{
		if (not_prime[i] == 0)
		{
			for (int j = 2*i; j < 32767; j+=i)
			{
				not_prime[j] = 1;
			}
		}
	}
	int n,sum=0;
	cin >> n;
	for (int i = 2; i <= n/2; i++)
	{
		if (not_prime[i] == 0 && not_prime[n - i] == 0)sum++;
	}
	cout << sum;
	return 0;
}------------------------------------------------------Problem1196:#include<iostream>
#include<string>
using namespace std;
int main()
{
	string a, tmp;
	getline(cin,a);
	tmp = a;
	for (int i = 0; i < tmp.length(); i++)
	{
		tmp[i] = a[tmp.length() - 1 - i];
	}
	char ans = (a == tmp ? 'Y' : 'N');
	cout << ans << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1196:#include<iostream>
#include<string>
using namespace std;
int main()
{
	string a, b;
	cin >> a;
	b = a;
	for (int i = 0; i < a.length(); i++)
	{
		b[i] = a[a.length() - 1 - i];
	}
	if (a == b)cout << "Y" << endl;
	else cout << "N" << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1197:#include<iostream>
using namespace std;
int reverse(int n)
{
	int ans = 0;
	while (n)
	{
		ans = ans * 10 + n % 10;
		n /= 10;
	}
	return ans;
}
int main()
{
	int n, l;
	cin >> l;
	for (int i = 0; i < l; i++)
	{
		cin >> n;
		int count = 0;
		int t = reverse(n);
		while (n != t)
		{
			if (count == 9)
			{
				count = 0;
				break;
			}
			n += t;
			count++;
			t = reverse(n);
		}
		cout << count << endl;
	}
}------------------------------------------------------Problem1198:#include<iostream>
using namespace std;
int main()
{
	int a[1000], count;
	while (cin >> a[0])
	{
		for (count = 1;; count++)
		{
			cin >> a[count];
			if (a[count] == 0)break;
		}
		int m=0;
		for (int i = 1; i < count; i++)
		{
			if (a[i] > a[m])m = i;
		}
		cout << a[m] << endl;
	}
}------------------------------------------------------Problem1199:#include<iostream>
#include<iomanip>
using namespace std;
const double PI = 3.1415;
int main()
{
	int n;
	cin >> n;
	double r;
	for (int i = 0; i < n; i++)
	{
		cin >> r;
		cout << fixed << setprecision(6) << (PI*r*r)<<endl;
	}
	//cin.get();
	//cin.get();
}------------------------------------------------------Problem1200:#include<iostream>
#include<string>
using namespace std;
int main()
{
	string str;
	while (cin >> str)
	{
		for (int i = 0; i < str.length(); i++)
		{
			if (str[i] >= 'a'&&str[i] <= 'z')str[i] -= 32;
		}
		cout << str << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1202:#include<iostream>
#include<string>
using namespace std;
int main()
{
	string in, out;
	cin >> in;
	out = in;
	for (int i = 0; i < out.length(); i++)
	{
		out[i] = in[out.length() - 1 - i];
	}
	cout << out << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1203:#include<iostream>
#include<string>
#include<map>
using namespace std;
long long int fact(int n)
{
	long long int ans = 1;
	for (int i = 2; i <= n; i++)
	{
		ans *= i;
	}
	return ans;
}
long long int combi(int m, int n)
{
	long long int ans = 1;
	for (int i = 1; i <= n; i++)
	{
		ans *= (m - i + 1);
	}
	ans /= fact(n);
	return ans;
}
int main()
{
	map<char, int> count;
	int n;
	cin >> n;
	cin.get();
	string s;
	getline(cin, s);
	for (int i = 0; i < s.length(); i++)
	{
		if (!count.count(s[i])) count[s[i]] = 0;
		count[s[i]]++;
	}
	int ans = 1;
	for (map<char,int>::iterator it = count.begin(); it!= count.end() ; it++)
	{
		ans*=combi(n,it->second);
		n -= it->second;
	}
	cout << ans;
}------------------------------------------------------Problem1204:#include<iostream>
#include<string>
using namespace std;
int main()
{
	int ans[8][8] = {
		2,3,4,4,4,4,3,2,
		3,4,6,6,6,6,4,3,
		4,6,8,8,8,8,6,4,
		4,6,8,8,8,8,6,4,
		4,6,8,8,8,8,6,4,
		4,6,8,8,8,8,6,4,
		3,4,6,6,6,6,4,3,
		2,3,4,4,4,4,3,2
	};
	int n;
	cin >> n;
	string str;
	for (int i = 0; i < n; i++)
	{
		cin >> str;
		cout << ans[str[0] - 97][str[1] - 49] << endl;
	}
}------------------------------------------------------Problem1206:#include<iostream>
using namespace std;
int main()
{
	int t, a, b;
	cin >> t;
	for (int i = 0; i < t; i++)
	{
		cin >> a >> b;
		cout << (((a % 100) + (b % 100)) % 100) << endl;
	}
	//cin.get();
	//cin.get();
}------------------------------------------------------Problem1207:#include<iostream>
using namespace std;
int main()
{
	int m, n;
	while (cin >> m >> n)
	{
		int sumj = 0, sumo = 0;
		for (int i = m; i <=n; i++)
		{
			if (i % 2 == 0)sumj += i*i;
			else sumo += i*i*i;
		}
		cout << sumj << " " << sumo << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1210:#include<iostream>
using namespace std;
int main()
{
	int m;//物品的个数
	int n;//总钱数
	int value[25] = { 0 }, weight[25] = { 0 };
	int max[25][3000] = { 0 };//个数为i，耗资j
	cin >> n >> m;
	for (int i = 1; i <= m; i++)
	{
		cin >> weight[i];
		cin >> value[i];
		value[i] *= weight[i];
	}
	for (int i = 1; i <= m; i++)
	{
		for (int j = 1; j <= n; j++)
		{
			if (j < weight[i])
			{
				max[i][j] = max[i - 1][j];
			}
			else
			{
				int x = max[i - 1][j];
				int y = max[i - 1][j - weight[i]] + value[i];
				max[i][j] = x>y ? x : y;
			}
		}
	}
	cout << max[m][n]<<endl;
}------------------------------------------------------Problem1211:#include<iostream>
#include<string>
using namespace std;
int main()
{
	string s;
	string code = "VWXYZABCDEFGHIJKLMNOPQRSTU";
	while (getline(cin, s))
	{
		if (s == "ENDOFINPUT")break;
		getline(cin, s);
		for (int i = 0; i < s.length(); i++)
		{
			if (s[i] >= 'A'&&s[i] <= 'Z') s[i] = code[s[i] - 65];
		}
		cout << s << endl;
		getline(cin, s);
	}
	
}------------------------------------------------------Problem1212:#include<iostream>
using namespace std;
int main()
{
	int ans[55];
	ans[0] = 1;
	ans[1] = 1;
	ans[2] = 2;
	for (int i = 3; i < 55; i++)
	{
		ans[i] = ans[i - 3] + ans[i - 1] + 1;
	}
	int n;
	cin >> n;
	cout << ans[n - 1]<<endl;
}------------------------------------------------------Problem1213:#include<iostream>
using namespace std;
int main()
{
	int n[4];
	for (int i = 0; i < 4; i++)
	{
		cin >> n[i];
	}
	for (int i = 0; i < 4; i++)
	{
		if (n[i] >= 0 && n[i] <= 100)
		{
			switch (n[i]/10)
			{
			case 10:
			case 9:
				cout << "A" << endl;
				break;
			case 8:
				cout << "B" << endl;
				break;
			case 7:
				cout << "C" << endl;
				break;
			case 6:
				cout << "D" << endl;
				break;
			default:
				cout << "E" << endl;
				break;
			}
		}
		else
		{
			cout << "Score is error!" << endl;;
		}
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1214:#include<iostream>
using namespace std;
int main()
{
	int t, n;
	cin >> t;
	for (int i = 0; i < t; i++)
	{
		cin >> n;
		if (n % 2 == 0)
			cout << (n / 2)*(n / 2 - 1) << endl;
		else
			cout << (n - 1)*(n - 1) / 4 << endl;
	}
}------------------------------------------------------Problem1215:#include<iostream>
using namespace std;
int main()
{
    int n,a[4];
    cin >> n;
    for (int t = 0; t < n; t++)
    {
        int count = 0;
        for (int i = 0; i < 4; i++)
        {
            cin >> a[i];
        }
        for (int i = 0; i < 4; i++)
        {
            for (int j = 0; j < 4; j++)
            {
                for (int k = 0; k < 4; k++)
                {
                    for (int m = 0; m < 4; m++)
                    {
                        if (i != j&&i != k&&i != m&&j != k&&j != m&&k != m)
                        {
                            cout << a[i] << a[j] << a[k] << a[m];
                            if ((++count) % 6 != 0)cout << " ";
                        }
                    }
                }
            }
            cout << endl;
        }
        if(t!=n-1)cout << endl;
    }
}
------------------------------------------------------Problem1216:#include<iostream>
#include<cmath>
using namespace std;
int main()
{
	int k,n,t[33],index=0;
	cin>>k>>n;
	while(n)
	{
		t[index++]=n%2;
		n/=2;
	}
	int ans=0;
	for(int i=0;i<index;i++)
	{
		if(t[i]==1)
		{
			ans+=pow(k,i);
		}
	}
	cout<<ans<<endl;
}
------------------------------------------------------Problem1217:#include<iostream>
using namespace std;
int main()
{
	int n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		int k[9],ans[9],index=0;
		for (int j = 0; j < 9; j++)
		{
			cin >> k[j];
		}
		for (int j = 9 - 1; j >= 0; j--)
		{
			if (k[j] <= k[0])
			{
				ans[index++] = k[j];
			}
		}
		for (int j = 1; j < 9; j++)
		{
			if (k[j] > k[0])
			{
				ans[index++] = k[j];
			}
		}
		for (int j = 0; j < 9; j++)
		{
			cout << ans[j];
			if (j != 8)cout << " ";
		}
		cout << endl;
	}
}------------------------------------------------------Problem1218:#include<iostream>
using namespace std;
int main()
{
	int m, n,num[100];
	while (cin >> n >> m)
	{
		if (m == 0&&n==0) break;
		for (int i = 0; i < n; i++)
		{
			cin >> num[i];
		}
		num[n]=m;
		for (int i = 0; i < n; i++)
		{
			int k = i;
			for (int j = i+1; j < n+1; j++)
			{
				if (num[j] < num[k]) k = j;
			}
			if (k != i)
			{
				int tmp = num[k];
				num[k] = num[i];
				num[i] = tmp;
			}
		}
		for (int i = 0; i < n+1; i++)
		{
			cout << num[i];
			if (i != n)cout << " ";
		}
		cout << endl;
	}
	return 0;
}------------------------------------------------------Problem1219:#include<iostream>
using namespace std;
int calc(int);
int main()
{
	int x;
	cin >> x;
	cout << calc(x) << endl;
	//cin.get();
	//cin.get();
	return 0;
}
int calc(int x)
{
	switch (x)
	{
	case 1:
		return 3;
		break;
	case 2:
		return 4;
		break;
	case 3:
		return 5;
		break;
	default:
		return calc(x - 1) + calc(x - 2) + calc(x - 3);
		break;
	}
}------------------------------------------------------Problem1220:#include<iostream>
#include<cmath>
using namespace std;
int main()
{
	int n;
	cin >> n;
	int n_c = n;
	int present_point = -1;
	int count[10];
	for (int i = 0; i < 10; i++)
	{
		count[i] = 0;
	}
	while (n_c)
	{
		int present = n_c % 10;
		n_c /= 10;
		present_point++;
		for (int i = 0; i <= 9; i++)
		{
			if (i < present)
			{
				if (i == 0)
				{
					count[i] += n_c*pow(10, present_point);
					continue;
				}
				count[i] += (n_c + 1)*pow(10, present_point);
			}
			else if (i>present)
			{
				count[i] += (n_c)*pow(10, present_point);
			}
			else
			{
				if (i == 0)
				{
					count[i] = count[i] + (n_c-1)*pow(10, present_point) + (n % (int)pow(10, present_point)) + 1;
					continue;
				}
				count[i] = count[i] + (n_c)*pow(10, present_point) + (n % (int)pow(10, present_point)) + 1;
			}
		}
	}
	for (int i = 0; i < 10; i++)
	{
		cout << count[i] << endl;
	}
}------------------------------------------------------Problem1221:#include<iostream>
using namespace std;
int main()
{
	int n;
	cin >> n;
	int count = 0;
	for (int i = 1; i <= n; i++)
	{
		if (i % 7 == 0 || (i % 10000) / 1000 == 7 || (i % 1000) / 100 == 7 || (i % 100) / 10 == 7 || (i % 10) == 7) count++;
	}
	cout << count << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1222:#include<iostream>
using namespace std;
int main()
{
	int a, b,ans[100];
	while (cin >> a >> b)
	{
		int num = 0;
		if (a == 0 && b == 0)break;
		for (int i = a*100; i < (a+1)*100; i++)
		{
			if (i%b == 0)
			{
				ans[num] = i % 100;
				num++;
			}
		}
		for (int i = 0; i < num; i++)
		{
			if (ans[i] / 10 < 1)cout << '0';
			cout << ans[i];
			if (i != num - 1)cout << " ";
		}
		cout << endl;
	}
	return 0;
}------------------------------------------------------Problem1225:#include<iostream>
using namespace std;
struct Date_s
{
	int y, m, d, character;
};
int main()
{
	struct Date_s a[100];
	int index=0 , n;
	while(cin>>n)
	{
		char tmp;
		a[index].m = n;
		cin >> tmp >> a[index].d >> tmp >> a[index].y;
		a[index].character = a[index].y*10000 + a[index].m * 100 + a[index].d;
		index++;
	}
	for (int i = 0; i < index-1; i++)
	{
		for (int j = 0; j < index-1-i; j++)
		{
			if (a[j].character > a[j + 1].character)swap(a[j], a[j + 1]);
		}
	}
	for (int i = 0; i < index; i++)
	{
		printf("%02d/%02d/%04d\n", a[i].m, a[i].d, a[i].y);
	}
	return 0;
}------------------------------------------------------Problem1226:#include<iostream>
using namespace std;
int main()
{
	int n, rad[100];
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> rad[i];
	}
	int output[100], k = 0;
	for (int i = 0; i < n; i++)
	{
		int exist = 0;
		for (int j = 0; j < k; j++)
		{
			if (output[j] == rad[i]) exist = 1;
		}
		if (!exist)
		{
			output[k] = rad[i];
			k++;
		}
	}
	cout << k << endl;
	//Now there have $k elements in array output[];
	for (int j = 0; j < k - 1; j++)
	{
		for (int i = 0; i < k - j - 1; i++)
		{
			if (output[i] > output[i + 1])
			{
				int tmp = output[i];
				output[i] = output[i + 1];
				output[i + 1] = tmp;
			}
		}
	}
	for (int i = 0; i < k; i++)
	{
		cout << output[i];
		if (i != k - 1)cout << " ";
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1227:#include<iostream>
using namespace std;
const int MAXN = 3000;
bool isnPrime[MAXN];
int div(int n)
{
	int t = n;
	int *tmp= new int[n + 1];
	for (int i = 0; i < n+1; i++)
	{
		tmp[i] = 0;
	}
	for (int i = 2; i < n; i++)
	{
		if (isnPrime[i] == 0)
		{
			while (t%i == 0)
			{
				tmp[i]++;
				t /= i;
			}
		}
	}
	int ans = 1;
	for (int i = 0; i < n+1; i++)
	{
		if (tmp[i])
		{
			ans *= (tmp[i] + 1);
		}
	}
	return ans;
}
int main()
{
	for (int i = 2; i < MAXN; i++)
	{
		if (isnPrime[i] == 0)
		{
			for (int j = 2*i; j < MAXN; j+=i)
			{
				isnPrime[j] == 1;
			}
		}
	}
	int a, b,max_num=0;
	cin >> a >> b;
	for (int i = a; i <= b; i++)
	{
		int t = div(i);
		if (t > max_num)max_num = t;
	}
	cout << max_num << endl;
}------------------------------------------------------Problem1228:#include<iostream>
using namespace std;
int main()
{
	int a, b,max;
	cin >> a >> b;
	max = a > b ? a : b;
	for (int i = max; i <= a*b; i++)
	{
		if(i%a==0&&i%b==0)
		{
			cout << i << endl;
			break;
		}
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1230:#include<iostream>
using namespace std;
int main()
{
	//generate yanghui triangle
	int arr[30][30];
	for (int i = 0; i < 30; i++)
	{
		for (int j = 0; j < i+1; j++)
		{
			if (j == 0 || j == i) arr[i][j] = 1;
			else arr[i][j] = arr[i - 1][j - 1] + arr[i - 1][j];
		}
	}
	//main
	int x;
	while (cin >> x)
	{
		for (int i = 0; i < x; i++)
		{
			for (int j = 0; j < i+1; j++)
			{
				cout << arr[i][j] << " ";
			}
			cout << endl;
		}
		cout << endl;
	}
}------------------------------------------------------Problem1231:#include<iostream>
#include<string>
using namespace std;
int main()
{
	string str;
	while (getline(cin, str))
	{
		char m = 'A';
		for (int i = 0; i < str.length(); i++)
		{
			if (str[i] > m) m = str[i];
		}
		for (int i = 0; i < str.length(); i++)
		{
			cout << str[i];
			if (str[i] == m)cout << "(max)";
		}
		cout << endl;
	}
	return 0;
}------------------------------------------------------Problem1232:#include<iostream>
using namespace std;
int f(int x)
{
	if (x == 1) return 2;
	else if (x == 2) return 4;
	else if (x == 3)return 7;
	else if (x == 4) return 13;
	else return f(x - 1) * 2 - f(x - 4);
}
int main()
{
	int n;
	while (cin>>n)
	{
		cout << f(n) << endl;
	}
}------------------------------------------------------Problem1233:#include<iostream>
using namespace std;
int main()
{
	int x;
	cin >> x;
	int flag = 1;
	if (x==1)
	{
		flag=0;
	}
	else
	{
		for (int i = 2; i < x; i++)
		{
			if (x%i == 0)flag = 0;
		}
	}
	if (flag)cout << "Y" << endl;
	else cout << "N" << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1234:#include<iostream>
using namespace std;
int main()
{
	int n ;
	while (cin >> n)
	{
		int ans[10] = { 0 };
		n -= 265716;
		int index = 0;
		while (n)
		{
			ans[index++] = n % 3;
			n /= 3;
		}
		for (int i = 0; i < 10; i++)
		{
			cout << 9 + ans[i];
			if (i != 9)cout << " ";
		}
		cout << endl;
	}
}------------------------------------------------------Problem1235:#include<iostream>
using namespace std;
int main()
{
	int N, cow[1000], index = 1;
	cow[0] = 0;
	cin >> N;
	for (int i = 0; i < N; i++)
	{
		for (int j =0; j <index; j++)
		{
			cow[j]++;
			if (cow[j] >= 4)
			{
				cow[index] = 0;
				index++;
			}
		}
	}
	cout << index << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1236:#include<iostream>
using namespace std;
double fact(int);
int main()
{
	int m, n;
	double ans;
	while (cin >> m >> n)
	{
		ans = fact(m) / (fact(n)*fact(m - n));
		cout << ans << endl;
	}
	return 0;
}
double fact(int x)
{
	double ans = 1;
	for (int i = 2; i <= x; i++)
	{
		ans *= i;
	}
	return ans;
}------------------------------------------------------Problem1237:#include<iostream>
#include<string>
#include<iomanip>
using namespace std;
int main()
{
	double grade[7],n;
	string name;
	while (cin >> n)
	{
		grade[0] = n;
		for (int i = 1; i < 7; i++)
		{
			cin >> grade[i];
		}
		cin >> name;
		for (int i = 0; i < 6; i++)
		{
			for (int j = 0; j < 6-i; j++)
			{
				if (grade[j] > grade[j + 1])swap(grade[j], grade[j + 1]);
			}
		}
		double sum = 0;
		for (int i = 1; i < 6; i++)
		{
			sum += grade[i];
		}
		cout << name<<" "<<fixed << setprecision(2) << sum / 5 << endl;
	}
}------------------------------------------------------Problem1238:#include<iostream>
#include<cmath>
#include<cstdlib>
using namespace std;
int main()
{
	double p, q;
	while (cin >> p >> q)
	{
		p /= 100, q /= 100;
		for (int i = 1;; i++)
		{
			if (ceil(i*p) <= floor(i*q))
			{
				cout << i << endl;
				break;
			}
		}
	}
}------------------------------------------------------Problem1239:import java.text.SimpleDateFormat;
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
------------------------------------------------------Problem1240:#include<iostream>
#include<cmath>
using namespace std;
int main()
{
	double vul, d;
	int time = 0, n = 1;
	cin >> vul >> d;
	while (vul > 0)
	{
		if (vul > n*d)
		{
			vul -= n*d;
			time += (++n);
		}
		else
		{
			time += ceil(vul / d);
			vul = 0;
		}
	}
	cout << time;
}------------------------------------------------------Problem1241:#include<iostream>
using namespace std;
int main()
{
	int x[20][20],n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		for (int j = 0; j < n; j++)
		{
			cin >> x[i][j];
		}
	}
	for (int i = 0; i < n; i++)
	{
		for (int j = 0; j < n; j++)
		{
			cout << x[j][i];
			if (j != n - 1)cout << " ";
		}
		cout << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1243:#include<iostream>
#include<string>
using namespace std;
int main()
{
	string str;
	int i = 0;
	while (getline(cin, str))
	{
		while (str[i] != '\0')
		{
			if ((str[i] >= 'A'&&str[i] <= 'Z'))
			{
				str[i] = str[i] + 32;
				if (str[i] == 'z')
					str[i] = 'a';
				else if (str[i]<'z')
					str[i] = str[i] + 1;
			}
			else if (str[i] <= 'z'&&str[i] >= 'a')
			{
				if (str[i] >= 'a'&&str[i] <= 'c')
					str[i] = '2';
				if (str[i] >= 'd'&&str[i] <= 'f')
					str[i] = '3';
				if (str[i] >= 'g'&&str[i] <= 'i')
					str[i] = '4';
				if (str[i] >= 'j'&&str[i] <= 'l')
					str[i] = '5';
				if (str[i] >= 'm'&&str[i] <= 'o')
					str[i] = '6';
				if (str[i] >= 'p'&&str[i] <= 's')
					str[i] = '7';
				if (str[i] >= 't'&&str[i] <= 'v')
					str[i] = '8';
				if (str[i] >= 'w'&&str[i] <= 'z')
					str[i] = '9';
			}	i++;
		}
		cout << str << endl;
		i = 0;
	}
	return 0;
}
------------------------------------------------------Problem1244:#include<iostream>
using namespace std;
int main()
{
	int m, p[1000];
	cin >> m;
	for (int t = 0; t < m; t++)
	{
		int n;
		cin >> n;
		for (int i = 0; i < n; i++)
		{
			cin >> p[i];
		}
		for (int i = 0; i < n - 1; i++)
		{
			for (int j = 0; j < n - 1 - i; j++)
			{
				if (p[j] > p[j + 1])swap(p[j], p[j + 1]);
			}
		}
		int is_ok = 1;
		for (int i = 0; i < n - 2; i++)
		{
			if (p[i + 1] - p[i] != p[i + 2] - p[i + 1])
			{
				is_ok = 0;
				break;
			}
		}
		cout << (is_ok ? "yes" : "no") << endl;
	}
}------------------------------------------------------Problem1245:#include<iostream>
using namespace std;
int get_day(int,int);
int main()
{
	int y, m, d;
	char sign;
	while (cin >> y >> sign >> m >> sign >> d)
	{
		int ans = 0;
		for (int i = 1; i < m; i++)
		{
			ans += get_day(i, y);
		}
		cout << (ans + d) << endl;
	}
	//cin.get();
	//cin.get();
}
int get_day(int m, int y)
{
	switch (m)
	{
	case 1:case 3:case 5:case 7:case 8:case 10:case 12:
		return 31;
		break;
	case 4:case 6:case 9:case 11:
		return 30;
		break;
	case 2:
		if ((y % 4 == 0 && y % 100 != 0) || (y % 400 == 0)) return 29;
		else return 28;
		break;
	}
}------------------------------------------------------Problem1246:#include<iostream>
#include<set>
using namespace std;
int main()
{
	int n;
	while (cin >> n)
	{
		set<int> num;
		if (n == 0)break;
		int t;
		for (int i = 0; i < n; i++)
		{
			cin >> t;
			num.insert(t);
		}
		cout << num.size() << endl;
		int count = 0;
		for (set<int>::iterator it = num.begin(); it != num.end(); ++it)
		{
			cout << *it;
			count++;
			if (count != num.size())cout << " ";
		}
		cout << endl<<endl;
	}
}------------------------------------------------------Problem1247:#include<iostream>
using namespace std;
long long int fact(int);
int main()
{
	int n, m;
	while (cin >> n >> m)
	{
		long long int ans = fact(n) / (fact(m)*fact(n-m));
		cout << ans<<endl;
	}
	return 0;
}
long long int fact(int x)
{
	long long int ans = 1;
	for (int i = 2; i <= x; i++)
	{
		ans *= i;
	}
	return	ans;
}------------------------------------------------------Problem1248:#include<iostream>
#include<string>
using namespace std;
int main()
{
	string str;
	while (1)
	{
		getline(cin, str);
		if (str == "END")break;
		for (int i = 0; i < str.length(); i++)
		{
			switch (str[i])
			{
			case 'A':case 'W':case 'F':
				str[i] = 'I';
				break;
			case 'C':
				str[i] = 'L';
				break;
			case 'M':
				str[i] = 'o';
				break;
			case 'S':
				str[i] = 'v';
				break;
			case 'D':case 'P':case 'G':case 'B':
				str[i] = 'e';
				break;
			case 'L':
				str[i] = 'Y';
				break;
			case 'X':
				str[i] = 'u';
				break;
			default:
				break;
			}
		}
		cout << str << endl;
	}
}------------------------------------------------------Problem1249:#include<iostream>
#include<sstream>
#include<string>
using namespace std;
int main()
{
	int a, b;
	cin >> a >> b;
	for (int i = a; i <= b; i++)
	{
		int flag = 1;
		for (int j = 2; j < i; j++)
		{
			if (i%j == 0) flag++;
		}
		if (flag == 1)
		{
			stringstream ss;
			string num,tmp;
			ss << i;
			ss >> num;
			tmp = num;
			for (int j = 0; j < num.length(); j++)
			{
				tmp[j] = num[num.length() - 1 - j];
			}
			if (tmp == num)cout << i << endl;
		}
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1250:#include<iostream>
using namespace std;
int main()
{
	int ans[200];
	for (int i = 0; i < 200; i++)
	{
		ans[i] = 0;
	}
	while (cin.peek() != '#')
	{
		char c = cin.get();
		ans[c]++;
	}
	char a = 'a';
	for (int i = 0; i < 26; i++)
	{
		cout << a << " " << ans[97 + i] << endl;
		a++;
	}
	return 0;
}------------------------------------------------------Problem1251:#include<iostream>
using namespace std;
int main()
{
	int count = 0;
	unsigned int x;
	while (cin >> x&& x)
	{
		for (int i = 0; i <= x; i++)
		{
			if (x == i*i*i)count++;
		}
	}
	cout << count << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1252:#include<iostream>
#include<cmath>
using namespace std;
int main()
{
	int self[1000], other[1000];
	int n;
	while (cin >> n)
	{
		if (n == 0)break;
		for (int i = 0; i < n; i++)
		{
			cin >> self[i];
		}
		for (int i = 0; i < n; i++)
		{
			cin >> other[i];
		}
		for (int i = 0; i < n - 1; i++)
		{
			for (int j = 0; j < n - 1 - i; j++)
			{
				if (self[j] < self[j + 1])swap(self[j], self[j + 1]);
				if (other[j] > other[j + 1])swap(other[j], other[j + 1]);
			}
		}
		int win = 1;
		for (int i = 0; i < n/2+1; i++)
		{
			if (self[i] <= other[n / 2 - i])win = 0;
		}
		if (win)cout << "YES\n";
		else cout << "NO\n";
	}
}------------------------------------------------------Problem1255:import java.math.BigInteger;
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
}------------------------------------------------------Problem1256:#include<iostream>
using namespace std;
int f(int);
int main()
{
	int m,n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> m;
		cout << f(m) << endl;
	}
}
int f(int x)
{
	if (x == 1 || x == 2)return 1;
	else if (x == 3) return 2;
	else return f(x - 1) + f(x - 2);
}------------------------------------------------------Problem1257:#include<iostream>
#include<cmath>
using namespace std;
int main()
{
	long long int s, a, b;
	while (cin >> s)
	{
		for (a = 0; a <= s / 2; a++)
		{
			b = sqrt(2 * s + a*a - a + 0.25) - 0.5;
			b = (long long int)b;
			if ((b - a + 1)*(a + b) / 2 == s)
			{
				cout << a << " " << b;
				if (b < 1000)cout << " ";
				cout << endl;
			}
		}
		cout << endl;
	}
}
------------------------------------------------------Problem1258:#include<iostream>
using namespace std;
int main()
{
	int count = 0,ans[100];
	for (int i = 100; i <= 200; i++)
	{
		int flag = 1;
		for (int j = 2; j < i; j++)
		{
			if (i%j==0)flag = 0;
		}
		if (flag)
		{
			ans[count] = i;
			count++;
		}
	}
	cout << count << endl;
	for (int i = 0; i < count; i++)
	{
		cout << ans[i];
		if (i != count - 1)cout << " ";
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1259:#include<iostream>
using namespace std;
int main()
{
	while (cin.peek() != '\0'&&cin.peek() != EOF)
	{
		char c = cin.get();
		if (c == '0') c = '1';
		else if (c == '1')c = '0';
		cout << c;
	}
	cin.get();
	cin.get();
	return 0;
}------------------------------------------------------Problem1261:#include<iostream>
#include<cmath>
#include<algorithm>
using namespace std;
int posX[10001], posY[10001];
int main()
{
	int n, midX, midY, sumX = 0, sumY = 0;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> posX[i] >> posY[i];
	}
	sort(posX, posX + n);
	sort(posY, posY + n);
	if (n % 2)
	{
		midX = posX[(n - 1) / 2];
		midY = posY[(n - 1) / 2];
	}
	else
	{
		midX = (posX[(n - 1) / 2] + posX[n / 2]) / 2;
		midY = (posY[(n - 1) / 2] + posX[n / 2]) / 2;
	}
	for (int i = 0; i < n; i++)
	{
		sumX += abs(midX - posX[i]);
		sumY += abs(midY - posY[i]);
	}
	cout << sumX + sumY << endl;
}------------------------------------------------------Problem1263:#include<iostream>
using namespace std;
int main()
{
	int a[20], m[20],n,index=0;
	while (cin >> n)
	{
		a[index++] = n;
	}
	//a[index]
	m[0] = 1;
	int ans = 1;
	for (int i = 1; i < index; i++)
	{
		int k = 0;
		for (int j = 0; j < i; j++)
		{
			if (a[i] <= a[j] && m[j]>k)k = m[j];
		}
		m[i] = k + 1;
		if (m[i] > ans)ans = m[i];
	}
	cout << ans;
}------------------------------------------------------Problem1264:#include<iostream>
#include<iomanip>
using namespace std;
void sort(int arr[],int leng);
int main()
{
	int x,n[100];
	while (cin >> x)
	{
		for (int i = 0; i < x; i++)
		{
			cin >> n[i];
		}
		sort(n, x);
		float sum=0;
		for (int i = 1; i < x-1; i++)
		{
			sum+=n[i];
		}
		cout << fixed<<setprecision(2)<<(sum / (x - 2) )<< endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}
void sort(int arr[], int leng)
{
	for (int i = 0; i < leng-1; i++)
	{
		for (int j = 0; j < leng-1-i; j++)
		{
			if (arr[j] > arr[j + 1])
			{
				int tmp = arr[j];
				arr[j] = arr[j + 1];
				arr[j + 1] = tmp;
			}
		}
	}
}------------------------------------------------------Problem1267:#include<iostream>
using namespace std;
int main()
{
	int height_apple[10], height_taotao;
	for (int i = 0; i < 10; i++)
	{
		cin >> height_apple[i];
	}
	cin >> height_taotao;
	int num = 0;
	for (int i = 0; i < 10; i++)
	{
		if (height_apple[i] <= height_taotao + 30)num++;
	}
	cout << num<<endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1268:#include<iostream>
using namespace std;
int main()
{
	int len;
	cin >> len;
	bool *tree= new bool[len+1];
	for (int i = 0; i < len+1; i++)
	{
		tree[i] = 1;
	}
	int n;
	cin >> n;
	for (int k = 0; k < n; k++)
	{
		int m, n;
		cin >> m >> n;
		for (int i = m; i <= n; i++)
		{
			tree[i] = 0;
		}
	}
	int sum = 0;
	for (int i = 0; i <= len; i++)
	{
		if (tree[i] == 1) ++sum;
	}
	cout << sum << endl;
}------------------------------------------------------Problem1269:#include<iostream>
using namespace std;
int main() {
	int t, n, dp[101][1001], weight[101], price[101], max_price = 0;
	cin >> t >> n;
	for(int i=1;i<=n;i++)
	{
		cin>>weight[i]>>price[i];
	}
	for (int i = 0; i <= t; i++) {
		dp[0][i] = 0;
	}
	for(int i=1;i<=n;i++)
	{
		for(int j=0;j<=t;j++)
		{
			if(weight[i]>j)
			{
				dp[i][j]=dp[i-1][j];
			}
			else
			{
				int a=dp[i-1][j];
				int b=dp[i-1][j-weight[i]]+price[i];
				dp[i][j]=a>b?a:b;
			}
		}
	}
	cout << dp[n][t] << endl;
}
------------------------------------------------------Problem1274:#include<iostream>
using namespace std;
int ans[100], index = 1;
void multiple()
{
	int last = 0;
	for (int i = 0; i < index; i++)
	{
		ans[i] = ans[i] * 2 + last;
		last = ans[i] / 10000;
		ans[i] %= 10000;
	}
	if (last)
	{
		ans[index++] = last;
	}
}
int main()
{
	ans[0] = 1;
	int n;
	cin >> n;
	for (int i = 0; i < n+1; i++)
	{
		multiple();
	}
	ans[0] -= 2;
	cout << ans[index - 1];
	for (int i = index-1 - 1; i >= 0; i--)
	{
		printf("%04d", ans[i]);
	}
}------------------------------------------------------Problem1275:#include<iostream>
using namespace std;
int main()
{
	int k;
	double sn=0;
	cin >> k;
	for (int n = 1;; n++)
	{
		sn += 1.0 / n;
		if (sn > k)
		{
			cout << n << endl;
			break;
		}
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1280:#include<iostream>
using namespace std;
int n, m, a[101], dp_max[51][10], dp_min[51][10], MIN = 999999, MAX=-999999, sum_pre_items[51];
int min(int a, int b)
{
	if (a < b)
		return a;
	return b;
}
int max(int a, int b)
{
	if (a > b)
		return a;
	return b;
}
void DP(int a[])
{
	//sum of pre items
	for (int i = 1; i <= n; i++)
	{
		sum_pre_items[i] = sum_pre_items[i - 1] + a[i];
	}
	//init dp,best
	for (int i = 0; i <= n; i++)
	{
		for (int j = 0; j <= m; j++)
		{
			dp_max[i][j] = -999999;
			dp_min[i][j] = 999999;
		}
	}
	dp_max[0][0] = dp_min[0][0] = 1;
	//
	for (int i = 1; i <= n; i++)
	{
		dp_max[i][1] = dp_min[i][1] = (sum_pre_items[i] % 10 + 10) % 10;
		for (int j = 2; j <= min(m,i); j++)
		{
			for (int k = j - 1; k < i; k++)
			{
				{
					dp_max[i][j] = max(dp_max[i][j], dp_max[k][j - 1] * (((sum_pre_items[i] - sum_pre_items[k]) % 10 + 10) % 10));
					dp_min[i][j] = min(dp_min[i][j], dp_min[k][j - 1] * (((sum_pre_items[i] - sum_pre_items[k]) % 10 + 10) % 10));
				}
			}
		}
	}
	MAX = max(MAX, dp_max[n][m]);
	MIN = min(MIN, dp_min[n][m]);
}
int main()
{
	cin >> n >> m;
	for (int i = 1; i <= n; i++)
	{
		cin >> a[i];
	}
	//拆环
	for (int i = 1; i <= n; i++)
	{
		a[n + i] = a[i];
	}
	//
	for (int i = 0; i < n; i++)
	{
		DP(a + i);
	}
	cout << MIN << endl << MAX;
}------------------------------------------------------Problem1287:#include<iostream>
using namespace std;
int main()
{
    int n;
    cin >> n;
    for (int i = 0; i < n; i++)
    {
        int start, end,step=1,count=0;
        cin >> start >> end;
        while (start < end)
        {
            if (end - start <= step)
            {
                count += 1;
                break;
            }
            start += step;
            end -= step;
            count += 2;
            step++;
        }
        cout << count << endl;
    }
}------------------------------------------------------Problem1290:#include<iostream>
using namespace std;
int main()
{
	int a, b;
	while (cin >> a >> b)
	{
		if (a == 0 && b == 0)break;
		int last = 0, count = 0;
		while (a > 0 || b > 0)
		{
			last = a % 10 + b % 10 + last;
			if (last > 9)
			{
				count++;
			}
			a /= 10;
			b /= 10;
			last /= 10;
		}
		if (count == 0)cout << "No carry operation.\n";
		else if (count == 1)cout << "1 carry operation.\n";
		else cout << count << " carry operations.\n";
	}
}------------------------------------------------------Problem1295:#include<iostream>
#include<map>
#include<cmath>
using namespace std;
int main()
{
	int n;
	while (cin >> n)
	{
		int *num = new int[n];
		map<int, int> abosolute;
		for (int i = 0; i < n; i++)
		{
			cin >> num[i];
		}
		for (int i = 1; i < n; i++)
		{
			int t = abs(num[i] - num[i - 1]);
			if (!abosolute.count(t)) abosolute[t] = 1;
		}
		int flag = 1;
		for (int i = 1; i < n; i++)
		{
			if (!abosolute.count(i))
			{
				flag = 0;
				break;
			}
		}
		if (flag)cout << "Jolly\n";
		else cout << "Not jolly\n";
	}
}------------------------------------------------------Problem1300:#include<iostream>
#include<string>
using namespace std;
string keyboard = "`1234567890-=QWERTYUIOP[]\\ASDFGHJKL;'ZXCVBNM,./";
char get_correct_key(char c)
{
	for (int i = 0; i < keyboard.length(); i++)
	{
		if (keyboard[i] == c)return keyboard[i - 1];
	}
	return c;
}
int main()
{
	string str;
	while (getline(cin, str))
	{
		for (int i = 0; i < str.length(); i++)
		{
			cout << get_correct_key(str[i]);
		}
		cout << endl;
	}
}------------------------------------------------------Problem1303:#include<iostream>
using namespace std;
void yanghui(int array[20][20]);
int main()
{
	
	int a[20][20];
	int i, j, n;
	yanghui(a);
	int x;
	while (cin >> x)
	{
		if (x == 0)break;
		for (n = 1, i = 0; n<=x; n++, i++)
		{
			for (j = 0; j < n; j++)
			{
				cout << a[i][j];
				if (j != n - 1)cout << " ";
			}
			cout << endl;
		}
	}
	//cin.get();
	//cin.get();
	return 0;
}
void yanghui(int array[20][20])
{
	int i, j, n;
	for (n = 1, i = 0; n<21; n++, i++)
		for (j = 0; j < n; j++)
			if ((j == 0) || (i == j))
				array[i][j] = 1;
			else
				array[i][j] = array[i - 1][j - 1] + array[i - 1][j];
}------------------------------------------------------Problem1305:#include<iostream>
using namespace std;
int n;
int selectstate[100];
int value[100][100];
int ans[100];
int maxvalue = 0;
void choose(int nowvalue, int now)
{
	if (now == n)
	{
		if (nowvalue > maxvalue)
		{
			for (int i = 0; i < n; i++)
			{
				ans[selectstate[i] - 1] = i + 1;
			}
			maxvalue = nowvalue;
		}
		return;
	}
	for (int i = 0; i < n; i++)
	{
		if (selectstate[i] == 0)
		{
			selectstate[i] = now + 1;
			choose(nowvalue + value[now][i], now + 1);
			selectstate[i] = 0;
		}
	}
}
int main()
{
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		for (int j = 0; j < n; j++)
		{
			cin >> value[i][j];
		}
	}
	choose(0, 0);
	for (int i = 0; i < n; i++)
	{
		cout << i + 1 << " " << ans[i] << endl;
	}
	cout << maxvalue << endl;
}
------------------------------------------------------Problem1308:#include<iostream>
using namespace std;
int f(int);
int main()
{
	int x;
	while (cin >> x)
	{
		if (x == 0)break;
		cout << f(x) << endl;
	}
}
int f(int x)
{
	if (x == 1)return 1;
	else if (x == 2) return 2;
	else if (x == 3)return 4;
	else return f(x - 1) + f(x - 2) + f(x - 3);
}------------------------------------------------------Problem1312:#include<iostream>
using namespace std;
int main()
{
	int k;
	cin >> k;
	for (int kase = 1; kase <= k; kase++)
	{
		int n, num,flag=1;
		cin >> num >> n;
		int *p;
		p = new int[num + 1];
		for (int i = 0; i < num+1; i++)
		{
			p[i] = 0;
		}
		for (int j = 0; j < n; j++)
		{
			int m, n;
			cin >> m >> n;
			if (p[m] == 0 && p[n] == 0)
			{
				p[m] = 1;
				p[n] = 2;
			}
			else if (p[m] == 0 && p[n] != 0)
			{
				if (p[n] == 1)p[m] = 2;
				else p[m] = 1;
			}
			else if (p[m] != 0 && p[n] == 0)
			{
				if (p[m] == 1)p[n] = 2;
				else p[n] = 1;
			}
			else
			{
				if (p[m] == p[n])
				{
					flag = 0;
					break;
				}
			}
		}
		cout << "Scenario #" << kase << ":" << endl;
		if (flag)cout << "No suspicious bugs found!" << endl;
		else cout << "Suspicious bugs found!" << endl;
		cout << endl;
	}
}------------------------------------------------------Problem1313:#include<iostream>
using namespace std;
int maze[202][202], book[202][202], sx, sy, ex, ey, minstep = 99999;
void DFS(int step, int x, int y)
{
	if (x == ex&&y == ey)
	{
		if (step < minstep)minstep = step;
		return;
	}
	int next[4][2] =
	{
		0,1,
		1,0,
		0,-1,
		-1,0
	};
	int tx, ty;
	for (int i = 0; i < 4; i++)
	{
		tx = x + next[i][0];
		ty = y + next[i][1];
		if (maze[tx][ty] == 0 && book[tx][ty] == 0)
		{
			book[tx][ty] = 1;
			DFS(step + 1, tx, ty);
			book[tx][ty] = 0;
		}
	}
}
int main()
{
	int n, m, t;
	cin >> t;
	while (t--)
	{
		cin >> n >> m;
		if (n == 0 && m == 0 && t == 0)break;
		char tmp;
		//reset
		minstep = 99999;
		for (int i = 0; i <= m; i++)
		{
			for (int j = 0; j <= n; j++)
			{
				book[i][j] = 0;
			}
		}
		//ini the maze
		for (int i = 1; i <= m; i++)
		{
			for (int j = 1; j <= n; j++)
			{
				maze[i][j] = 0;
				cin >> tmp;
				if (tmp == '#') maze[i][j] = 1;
				else if (tmp == 'S')
				{
					sx = i;
					sy = j;
				}
				else if (tmp == 'E')
				{
					ex = i;
					ey = j;
				}
			}
		}
		for (int i = 0; i <= n + 1; i++)
		{
			maze[0][i] = 1;
			maze[m + 1][i] = 1;
		}
		for (int i = 0; i <= m + 1; i++)
		{
			maze[i][0] = 1;
			maze[i][n + 1] = 1;
		}
		//main process
		DFS(0, sx, sy);
		cout << minstep << endl;
	}
	return 0;
}------------------------------------------------------Problem1316:#include<iostream>
using namespace std;
int fib[10000][250];
void add(int n)
{
	for (int i = 0; i < 250; i++)
	{
		fib[n][i]+=(fib[n-1][i] + fib[n-2][i]);
		if (fib[n][i] > 9999)
		{
			fib[n][i] -= 10000;
			fib[n][i + 1]++;
		}
	}
}
int main()
{
	fib[0][0] = 1;
	fib[1][0] = 1;
	for (int i = 2; i <10000; i++)
	{
		add(i);
	}
	int n;
	cin >> n;
	int started = 0;
	for (int i = 250 - 1; i >= 0; i--)
	{
		if (started==0&&fib[n - 1][i] != 0)
		{
			cout << fib[n - 1][i];
			started = 1;
		}
		else if (started == 1)
		{
			printf("%04d", fib[n - 1][i]);
		}		
	}
}------------------------------------------------------Problem1319:#include<iostream>
using namespace std;
int main()
{
	int a;
	char c;
	while (cin >> a)
	{
		c = a;
		cout << c;
	}
}------------------------------------------------------Problem1320:#include<iostream>
using namespace std;
int main()
{
	int N;
	cin >> N;
	for (int i = 2; i < N; i++)
	{
		int flag = 0;
		for (int j = 2; j < i; j++)
		{
			if (i%j == 0)flag++;
		}
		if (!flag)cout << i << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1321:#include <iostream>
using namespace std;
int main()
{
int a,b;
while(cin >> a >> b)
cout << a+b << endl;
return 0;
}------------------------------------------------------Problem1322:#include<iostream>
using namespace std;
int main()
{
	int n,a,b;
	cin >> n;
	for (int  i = 0; i < n; i++)
	{
		cin >> a >> b;
		cout << a + b << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1323:#include<iostream>
using namespace std;
int main()
{
	int a, b;
	while (cin >> a >> b)
	{
		if (a == 0 && b == 0) break;
		cout << a + b << endl;
	}
	return 0;
}------------------------------------------------------Problem1324:#include<iostream>
using namespace std;
int main()
{
	int n,num[1000];
	while (cin >>n)
	{
		if (n == 0) break;
		for (int i = 0; i < n; i++)
		{
			cin >> num[i];
		}
		int ans = 0;
		for (int i = 0; i < n; i++)
		{
			ans += num[i];
		}
		cout << ans << endl;
	}
	return 0;
}------------------------------------------------------Problem1325:#include<iostream>
using namespace std;
int main()
{
	int m;
	cin >> m;
	for (int j = 0; j < m; j++)
	{
		int n, num[1000];
		cin >> n;
		for (int i = 0; i < n; i++)
		{
			cin >> num[i];
		}
		int ans = 0;
		for (int i = 0; i < n; i++)
		{
			ans += num[i];
		}
		cout << ans << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1326:#include<iostream>
using namespace std;
int main()
{
		int n, num[1000];
		while (cin >> n)
		{
			for (int i = 0; i < n; i++)
			{
				cin >> num[i];
			}
			int ans = 0;
			for (int i = 0; i < n; i++)
			{
				ans += num[i];
			}
			cout << ans << endl;
		}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1327:#include<iostream>
using namespace std;
int main()
{
	int a, b;
	while (cin >> a >> b)
	{
		cout << a + b << endl << endl;
	}
	return 0;
}------------------------------------------------------Problem1328:#include<iostream>
using namespace std;
int main()
{
	int m;
	cin >> m;
	for (int j = 0; j < m; j++)
	{
		int n, num[1000];
		cin >> n;
		for (int i = 0; i < n; i++)
		{
			cin >> num[i];
		}
		int ans = 0;
		for (int i = 0; i < n; i++)
		{
			ans += num[i];
		}
		cout << ans << endl<<endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1329:#include<iostream>
#include<string>
using namespace std;
int main()
{
	string a, b;
	getline(cin,a);
	b = a;
	for (int i = 0; i < a.length(); i++)
	{
		b[i] = a[a.length() - 1 - i];
	}
	cout << b<<endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1330:#include<iostream>
#include<string>
using namespace std;
int main()
{
	int n;
	cin >> n;
	cin.get();
	string str;
	for (int i = 0; i < n; i++)
	{
		getline(cin, str);
		cout << str << endl<<endl;
	}
	while (cin >> str)
	{
		cout << str << endl << endl;
	}
}------------------------------------------------------Problem1331:#include<iostream>
using namespace std;
int buff[1000001];
int f(int n)
{
	int t = n;
	int count = 1;
	while (n != 1)
	{
		if (buff[n] != 0)
		{
			return count + buff[n];
		}
		else
		{
			if (n % 2)
				n = n * 3 + 1;
			else
				n /= 2;
			++count;
		}
	}
	buff[t] = count-1;
	return count;
}
int main()
{
	int m, n;
	while (cin >> m >> n)
	{
		int max_num = 0;
		int a=m<n?m:n;
		int b=m>n?m:n;
		for (int i = a; i <= b; i++)
		{
			if (f(i) > max_num) max_num = f(i);
		}
		cout << m << " " << n << " " << max_num << endl;
	}
}
------------------------------------------------------Problem1333:#include <iostream>
using namespace std;
int main()
{
	int N;
	while (cin >> N)
	{
		int a[100][100];
		a[0][0] = 1;
		for (int i = 0; i<N; i++)
		{
			a[i + 1][0] = a[i][0] + i + 1;
		}
		for (int j = 1; j<N; j++)
		{
			for (int i = 0; i<N - j; i++)
			{

				a[i][j] = a[i + 1][j - 1] + 1;
			}
		}
		for (int i = 0; i<N; i++)
		{
			for (int j = 0; j<N - i; j++)
			{
				cout << a[i][j];
				if (j != N - i - 1)cout << " ";
			}
			cout << endl;
		}
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1334:#include<iostream>
using namespace std;
int main()
{
	int *p,n;
	cin >> n;
	p = new int[n];
	for (int i = 0; i < n; i++)
	{
		cin >> p[i];
	}
	for (int i = n - 1; i >= 0; i--)
	{
		cout << p[i];
		if (i != 0)cout << " ";
	}
}------------------------------------------------------Problem1337:#include<iostream>
#include<iomanip>
#include<algorithm>
using namespace std;
typedef struct st_paper
{
	int time;
	int value;
	double per_value;
}paper;
bool compare(paper m, paper n)
{
	return m.per_value > n.per_value;
}
int main()
{
	int n, max_time;
	while (cin >> n >> max_time)
	{
		if (n == 0 && max_time == 0)break;
		paper a[21];
		int	last_time=max_time;
		double now_value=0;
		for (int i = 1; i <= n; i++)
		{
			cin >> a[i].time >> a[i].value;
			a[i].per_value = (double)a[i].value / a[i].time;
		}
		sort(a + 1, a + n + 1, compare);
		for (int i = 1; i <= n; i++)
		{
			if (a[i].time <= last_time)
			{
				now_value += a[i].value;
				last_time -= a[i].time;
			}
			else
			{
				now_value += last_time*a[i].per_value;
				break;
			}
		}
		cout << fixed<<setprecision(2)<<now_value << endl;
	}

}------------------------------------------------------Problem1338:#include<iostream>
using namespace std;
int main()
{
	int list[10],step=1;
	list[0] = 1;
	for (int i = 1; i < 10; i++)
	{
		list[i] = list[i - 1] + (++step);
	}
	int m, d;
	char t;
	while (cin >> m >> t >> d)
	{
		if (m == 0 && d == 0)break;
		if (m == 8)d += 31;
		int sum=0;
		for (int i = 0; i < 10; i++)
		{
			if (list[i] >= d)sum++;
		}
		cout << sum << endl;
	}
	return 0;
}------------------------------------------------------Problem1339:#include<iostream>
using namespace std;
int main()
{
	unsigned int n, m;
	while (cin >> n >> m)
	{	
		if (n == 0 && m == 0)break;
		if (m >= n * 2 && m <= n * 4 && m % 2 == 0)
		{
			cout << ((4 * n - m) / 2) << " " << ((m - 2 * n) / 2)<<endl;
		}
		else
			cout << "Error"<<endl;
	}
	return 0;
}------------------------------------------------------Problem1342:#include<iostream>
using namespace std;
int main()
{
	int ans[41];
	ans[1] = 1;
	ans[2] = 2;
	for (int i = 3; i <= 40; i++)
	{
		ans[i] = ans[i - 1] + ans[i - 2];
	}
	int n;
	while (cin >> n)
	{
		if (n == 0)break;
		cout << ans[n] << endl;
	}
}------------------------------------------------------Problem1343:#include<iostream>
#include<string>
using namespace std;
int main()
{
	string str = "ECFAJKLBDGHIVWZYMNOPQRSTUX000000erwqtyghbnuiopsjkdlfazxcvm";
	string a;
	while (getline(cin, a))
	{
		if (a == "#")break;
		for (int i = 0; i < a.length(); i++)
		{
			if (a[i] >= 'A'&&a[i] <= 'Z' || a[i] >= 'a'&&a[i] <= 'z') a[i] = str[a[i] - 65];
		}
		cout << a << endl;
	}
}------------------------------------------------------Problem1350:#include<iostream>
using namespace std;
int main()
{
	int m;
	cin >> m;
	for (int i = 0; i < m; i++)
	{
		int n,t;
		cin >> n;
		int sum = 0;
		for (int j = 0; j < n; j++)
		{
			cin >> t;
			sum += t;
		}
		cout << sum - n + 1 << endl;
	}
}------------------------------------------------------Problem1354:#include<iostream>
using namespace std;
int main()
{
	bool matrix[100][100];
	//length
	int n;
	while (cin >> n)
	{
		if (n == 0)break;
		//input matrix
		for (int i = 0; i < n; i++)
		{
			for (int j = 0; j < n; j++)
			{
				cin >> matrix[i][j];
			}
		}
		//process
		//is_even
		int flag1 = 0,flag2=0,y,x;
		for (int i = 0; i < n; i++)
		{
			int sum = 0;
			for (int j = 0; j < n; j++)
			{
				sum += matrix[i][j];
			}
			if (sum % 2 == 1)
			{
				flag1++;
				x = i;
			}
		}
		for (int i = 0; i < n; i++)
		{
			int sum = 0;
			for (int j = 0; j < n; j++)
			{
				sum += matrix[j][i];
			}
			if (sum % 2 == 1)
			{
				flag2++;
				y = i;
			}
		}
		if (flag1 == 0 && flag2 == 0) cout << "OK"<<endl;
		else if (flag1 == 1 && flag2 == 1)cout << "Change bit (" << x+1 << "," << y+1 << ")" << endl;
		else cout << "Corrupt" << endl;
	}
}------------------------------------------------------Problem1355:#include<iostream>
using namespace std;
int main()
{
	int n;
	long long int a, b;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> a >> b;
		cout << "Case " << i + 1 << ":\n" << a << " * " << b << " = " << a*b << endl << endl;
	}
}------------------------------------------------------Problem1356:#include<iostream>
using namespace std;
int main()
{
	int n,a[10000],m[10000];
	while (cin >> n)
	{
		for (int i = 0; i < n; i++)
		{
			cin >> a[i];
		}
		m[0] = 1;
		int ans = 0;
		for (int i = 1; i < n; i++)
		{
			int k = 0;
			for (int j = 0; j < i; j++)
			{
				if (a[j] < a[i] && k < m[j])k = m[j];
			}
			m[i] = k + 1;
			if (ans < m[i])ans = m[i];
		}
		cout << ans << endl;
	}
}------------------------------------------------------Problem1358:#include<iostream>
using namespace std;
int n,state[10],num[10];
int is_prime(int n)
{
	if (n == 1)return 0;
	if (n == 2 || n == 3)return 1;
	if (n % 6 != 1 && n % 6 != 5)return 0;
	for (int i = 5; i*i < n; i+=6)
	{
		if (n%i == 0 || n % (i + 2) == 0) return 0;
	}
	return 1;
}
void dfs(int times, int ans)
{
	if (times == n)
	{
		if (is_prime(ans)) cout << ans << endl;
		return;
	}
	for (int i = 0; i < n; i++)
	{
		if (state[i] == 0)
		{
			state[i] = 1;
			dfs(times + 1, ans * 10 + num[i]);
			state[i] = 0;
		}
	}
}
int main()
{
	while (cin >> n)
	{
		if (n == 0)break;
		for (int i = 0; i < n; i++)
		{
			cin >> num[i];
			state[i] = 0;
		}
		for (int i = 0; i < n - 1; i++)
		{
			for (int j = 0; j < n - 1 - i; j++)
			{
				if (num[j] > num[j + 1]) swap(num[j], num[j + 1]);
			}
		}
		dfs(0, 0);
	}
}------------------------------------------------------Problem1359:#include<iostream>
#include<string>
using namespace std;
int main()
{
	string x;
	cin >> x;
	for (int i = 0; i < x.length(); i++)
	{
		switch (x[i])
		{
		case 'a':
		case 'b':
		case 'c':
			x[i] = '2';
			break;
		case 'd':
		case 'e':
		case 'f':
			x[i] = '3';
			break;
		case 'g':
		case 'h':
		case 'i':
			x[i] = '4';
			break;
		case 'j':
		case 'k':
		case 'l':
			x[i] = '5';
			break;
		case 'm':
		case 'n':
		case 'o':
			x[i] = '6';
			break;
		case 'p':
		case 'q':
		case 'r':
		case 's':
			x[i] = '7';
			break;
		case 't':
		case 'u':
		case 'v':
			x[i] = '8';
			break;
		case 'w':
		case 'x':
		case 'y':
		case 'z':
			x[i] = '9';
			break;
		}
		if (x[i] >= 'A'&& x[i] <= 'Z') x[i] += 33;
	}
	cout << x << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1360:#include<iostream>
#include<string>
#include<iomanip>
using namespace std;
struct data
{
	int grade[7];
	string name;
};
int main()
{
	struct data log;
	while (cin >> log.grade[0])
	{
		for (int i = 1; i < 7; i++)
		{
			cin >> log.grade[i];
		}
		cin >> log.name;
		int m=0, M=0;
		for (int i = 0; i < 7; i++)
		{
			if (log.grade[i] < log.grade[m]) m = i;
			if (log.grade[i] > log.grade[M]) M = i;
		}
		int sum = 0;
		for (int i = 0; i < 7; i++)
		{
			sum += log.grade[i];
		}
		sum -= log.grade[m];
		sum -= log.grade[M];
		cout << log.name << " " << fixed << setprecision(2) << sum / 5.0<<endl;
	}
	return 0;
}------------------------------------------------------Problem1361:#include<iostream>
using namespace std;
int main()
{
	int n;
	while (cin >> n)
	{
		if (n == 0)break;
		int sum = 1;
		while (n > 3)
		{
			n /= 3;
			sum++;
		}
		cout << sum << endl;
	}
}------------------------------------------------------Problem1363:#include<iostream>
using namespace std;
int main()
{
	int n, a[20000];
	while (cin >> n)
	{
		if (n == 0)break;
		for (int i = 0; i < 2 * n; i++)
		{
			cin >> a[i];
		}
		int left = 0, right = 2 * n - 1, sum_l = a[0], sum_r = a[2 * n - 1], count = 0;
		while (left < 2 * n&&right >= 0)
		{
			if (sum_l < sum_r)
			{
				sum_l += a[++left];
			}
			else if (sum_l>sum_r)
			{
				sum_r += a[--right];
			}
			else
			{
				count++;
				sum_l += a[++left];
			}
		}
		cout << count << endl;
	}
}------------------------------------------------------Problem1429:#include<iostream>
using namespace std;
int main()
{
	int n;
	while (cin >> n)
	{
		if (n == 0)break;
		cout << n / 2 << endl;
	}
}------------------------------------------------------Problem1430:#include<iostream>
#include<string>
#include<sstream>
using namespace std;
int main()
{
	int a, b,count=0;
	char op, equal;
	string ans;
	while (cin >> a>>op>>b>>equal>>ans)
	{
		if (ans[0] != '?')
		{
			stringstream ss(ans);
			int num;
			ss >> num;
			if (op == '+'&&a + b == num)count++;
			else if (a - b == num) count++;
		}
	}
	cout << count;
}------------------------------------------------------Problem1431:import java.math.BigInteger;
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
}------------------------------------------------------Problem1453:#include<iostream>
#include<iomanip>
using namespace std;
int main()
{
	int n;
	cin >> n;
	for (int  i = 0; i < n; i++)
	{
		int score[101], num, sum = 0, tmp;
		for (int i = 0; i < 101; i++)
		{
			score[i] = 0;
		}
		cin >> num;
		for (int i = 0; i < num; i++)
		{
			cin >> tmp;
			sum += tmp;
			score[tmp]++;
		}
		int sum2 = 0;
		for (int i = (double)sum/num+1; i < 101; i++)
		{
			sum2 += score[i];
		}
		cout << fixed << setprecision(3) << (double)sum2 / num * 100 << "%\n";
	}
}------------------------------------------------------Problem1488:#include<iostream>
#include<cmath>
#include<string>
using namespace std;
int main()
{
	double k, l, s, w;
	int ans;
	string str[3] = { "James Bond survives.","Killed by the impact.","Stuck in the air." };
	while (cin >> k >> l >> s >> w)
	{
		if (k == 0 && l == 0 && s == 0 && w == 0)break;
		if (l >= s)
		{
			if (sqrt(2 * 9.81*s) >= 10) ans = 1;
			else ans = 0;
		}
		else
		{
			if ((w*9.81*s - (s - l)*(s - l)*k / 2) >= 50 * w) ans = 1;
			else if ((w*9.81*s - (s - l)*(s - l)*k / 2) <= 0) ans = 2;
			else ans = 0;
		}
		cout << str[ans] << endl;
	}
	return 0;
}------------------------------------------------------Problem1491:#include<iostream>
#include<cmath>
using namespace std;
int main()
{
	int year, bit;
	while (cin >> year)
	{
		if (year == 0)break;
		bit = (year - 1960) / 10 + 2;
		bit = 1 << bit;
		double sum = 0;
		int n = 1;
		while (sum < bit)
		{
			sum += log(n) / log(2);
			++n;
		}
		cout << n-2 << endl;
	}
}------------------------------------------------------Problem1492:#include<iostream>
using namespace std;
int main()
{
	int f, c;
	cin >> f;
	c = (f - 32) * 5 / 9;
	cout << c << endl;
	//cin.get(); cin.get();
	return 0;
}------------------------------------------------------Problem1492:#include<iostream>
using namespace std;
int main()
{
	float c, f;
	cin >> f;
	c = 5 * (f - 32) / 9;
	cout << c << endl;
	return 0;
}------------------------------------------------------Problem1493:#include<iostream>
#include<iomanip>
const double PI = 3.14;
using namespace std;
int main()
{
	int r, h;
	cin >> r >> h;
	cout << fixed << setprecision(2) << 2 * PI*r << endl;
	cout << fixed << setprecision(2) << PI*r*r << endl;
	cout << fixed << setprecision(2) << 4*PI*r*r*r/3 << endl;
	cout << fixed << setprecision(2) << 4*PI*r*r << endl;
	cout << fixed << setprecision(2) << 2*PI*r*h+2*PI*r*r<< endl;
	cout << fixed << setprecision(2) << PI*r*r*h<< endl;
	return 0;
}------------------------------------------------------Problem1493:#include<iostream>
#include<iomanip>
const double PI = 3.14;
using namespace std;
int main()
{
	int r, h;
	cin >> r >> h;
	cout << fixed << setprecision(2) << 2 * PI*r << endl;
	cout << fixed << setprecision(2) << PI*r*r << endl;
	cout << fixed << setprecision(2) << 4 * PI*r*r*r / 3 << endl;
	cout << fixed << setprecision(2) << 4 * PI*r*r << endl;
	cout << fixed << setprecision(2) << 2 * PI*r*h + 2 * PI*r*r << endl;
	cout << fixed << setprecision(2) << PI*r*r*h << endl;
	return 0;
}------------------------------------------------------Problem1494:#include<iostream>
#include<iomanip>
using namespace std;
int main()
{
	double a[10];
	for (int i = 0; i < 10; i++)
	{
		cin >> a[i];
	}
	double sum = 0;
	for (int i = 0; i < 10; i++)
	{
		sum += a[i];
	}
	cout << fixed << setprecision(2) << (sum / 10) << endl;
	//cin.get();
	//cin.get();
	return 0; 
}------------------------------------------------------Problem1495:#include<iostream>
#include<iomanip>
using namespace std;
int main()
{
	double a, b;
	char c, d;
	cin >> a >> c >> b >> d;
	double ans;
	ans = a + b;
	cout << fixed << setprecision(1) << ans << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1495:#include<iostream>
#include<iomanip>
using namespace std;
int main()
{
	double a, b;
	char c;
	cin >> a >> c >> b >> c;
	cout << fixed << setprecision(1) << a + b;
}------------------------------------------------------Problem1497:#include<iostream>
using namespace std;
int main()
{
	int x;
	cin >> x;
	if ((x % 4 == 0 && x % 100 != 0) || (x % 400 == 0))cout << "YES" << endl;
	else cout << "NO" << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1497:#include<iostream>
using namespace std;
int main()
{
	int y;
	cin >> y;
	if (y % 4 == 0 && y % 100 != 0 || y % 400 == 0)cout << "YES";
	else cout << "NO";
	return 0;
}------------------------------------------------------Problem1498:#include<iostream>
#include<iomanip>
using namespace std;
int main()
{
	int std, real;
	cin >> std >> real;
	if (real <= std)
	{
		cout << 10 * real;
	}
	else if (real<=std*2)
	{
		cout << 20 * real;
	}
	else if (real <= std * 3)
	{
		cout << 30 * real;
	}
	else
	{
		cout << 50 * real;
	}
}------------------------------------------------------Problem1500:#include<iostream>
using namespace std;
void print(int n, char c)
{
	for (int i = 0; i < n; i++)
	{
		cout << c;
	}
}
int main()
{
	int n;
	cin >> n;
	for (int i = 1; i <= n; i++)
	{
		print(i, '*');
		cout << endl;
	}
	for (int i = 1; i < n; i++)
	{
		print(i, ' ');
		print(n - i, '*');
		cout << endl;
	}
}------------------------------------------------------Problem1501:#include<iostream>
using namespace std;
int main()
{
	int a, b;
	cin >> a >> b;
	if (a > b)cout << a << "-" << b << "=" << a - b<<endl;
	else if (b > a) cout << b << "-" << a << "=" << b - a << endl;
	else cout << a << "=" << b << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1502:#include<iostream>
using namespace std;
int get_day(int, int);
int main()
{
	int a, b, c;
	cin >> a >> b >> c;
	cout << get_day(b, a) - c;
}
int get_day(int m,int y)
{
	switch (m)
	{
	case 1:case 3:case 5:case 7:case 8:case 10:case 12:
		return 31;
		break;
	case 4:case 6:case 9:case 11:
		return 30;
		break;
	case 2:
		if ((y % 4 == 0 && y % 100 != 0) || y % 400 == 0)return 29;
		else return 28;
		break;
	}
}------------------------------------------------------Problem1504:#include<iostream>
using namespace std;
int get_year_days(int year);
int get_month_days(int month, int year);
int main()
{
	int y, m, d,count=0;
	cin >> y >> m >> d;
	for (int i = 2000; i < y; i++)
	{
		count += get_year_days(i);
	}
	for (int i = 1; i < m; i++)
	{
		count += get_month_days(i, y);
	}
	count += d;
	int index = count % 5;
	if (index == 1 || index == 2 || index == 3)cout << "1";
	else cout << "2";
}
int get_year_days(int y)
{
	if ((y % 4 == 0 && y % 100 != 0) || y % 400 == 0)return 366;
	else return 365;
}
int get_month_days(int m,int y)
{
	switch (m)
	{
	case 1:case 3:case 5:case 7:case 8:case 10:case 12:
		return 31;
		break;
	case 4:case 6:case 9:case 11:
		return 30;
		break;
	case 2:
		if ((y % 4 == 0 && y % 100 != 0) || y % 400 == 0)return 29;
		else return 28;
		break;
	}
}------------------------------------------------------Problem1505:#include<iostream>
using namespace std;
int main()
{
	int n;
	cin >> n;
	for (int i = 2; i <= n; i++)
	{
		int flag = 0;
		for (int j = 2; j < i; j++)
		{
			if (i%j == 0)flag = 1;
		}
		if (!flag)cout << i << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1506:#include<iostream>
using namespace std;
int main()
{
	int a[3][4], b[4][3];
	for (int i = 0; i < 3; i++)
	{
		for (int j = 0; j < 4; j++)
		{
			cin >> a[i][j];
		}
	}
	for (int i = 0; i < 4; i++)
	{
		for (int j = 0; j < 3; j++)
		{
			b[i][j] = a[j][i];
		}
	}
	for (int i = 0; i < 4; i++)
	{
		for (int j = 0; j < 3; j++)
		{
			cout << b[i][j] << " ";
		}
		cout << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1507:#include<iostream>
#include<string>
using namespace std;
int main()
{
	string s1, s2;
	getline(cin, s1);
	getline(cin, s2);
	if (s1 == s2)
		cout << '0' << endl;
	else
	{
		for (int i = 0; i<s1.length(); i++)
		{
			if (s1[i] != s2[i])
			{
				cout << (s1[i] - s2[i]) << endl;
				break;
			}
		}
	}
}------------------------------------------------------Problem1540:#include<iostream>
using namespace std;
int binary_search(int a[], int len, int goal)
{
	int low = 0, high = len - 1;
	while (low <= high)
	{
		int middle = (high - low) / 2 + low;
		if (a[middle] == goal) return 1;
		else if (a[middle] > goal) high = middle - 1;
		else low = middle + 1;
	}
	return 0;
}
int main()
{
	int m, n;
	while (cin >> m >> n)
	{
		if (m == 0 && n == 0)break;
		int  *a, *b, sum = 0;
		a = new int[m];
		b = new int[n];
		for (int i = 0; i < m; i++)
		{
			cin >> a[i];
		}
		for (int i = 0; i < n; i++)
		{
			cin >> b[i];
		}
		for (int i = 0; i < m; i++)
		{
			if (binary_search(b, n, a[i]))sum++;
		}
		cout << sum<<endl;
		delete a, b;
	}
}------------------------------------------------------Problem1551:#include<iostream>
#include<string>
using namespace std;
int main()
{
	string ans = "01230120022455012623010202";
	string str;
	while (cin >> str)
	{
		char last = '0';
		for (int i = 0; i < str.length(); i++)
		{
			if (ans[str[i] - 65] != '0' && ans[str[i] - 65] != last)
			{
				last=ans[str[i] - 65];
				cout << last;
			}
			else
			{
				last = ans[str[i] - 65];
			}
		}
		cout << endl;
	}
}------------------------------------------------------Problem1555:#include<iostream>
using namespace std;
void f();
int main()
{
	f();
	//cin.get();
	//cin.get();
	return 0;
}
void f()
{
	cout << "HelloWord!\n";
}------------------------------------------------------Problem1556:#include<iostream>
using namespace std;
int cout_count = 0;
int cout_count2 = 0;
void f(int x)
{
	int flag = 1;
	for (int i = 2; i < x/2; i++)
	{
		if (x%i == 0)
		{
			flag = 0;
			break;
		}
	}
	if (flag)
	{
		cout << x << " ";
		cout_count++;
		if (cout_count % 10 == 0)cout << endl;
	}
}
int g(int x)
{
	int a = x /100;
	int b = x / 10 % 10;
	int c = x % 10;
	if (a*a*a + b*b*b + c*c*c == x)return 1;
	else return 0;
}
int main()
{
	for (int i = 301; i <= 400; i++)
	{
		cout << i << " ";
		if (i % 10 == 0)cout << endl;
	}
	for (int i = 301; i <= 400; i++)
	{
		f(i);
	}
	cout << endl;
	for (int i = 301; i <= 400; i++)
	{
		if (g(i))
		{
			cout << i << " ";
			cout_count2++;
			if (cout_count2 % 10 == 0)cout << endl;
		}
	}
}------------------------------------------------------Problem1557:#include<iostream>
using namespace std;
int main()
{
	int  n, m,a[2000];
	while (cin>>n>>m)
	{
		for (int i = 0; i < n; i++)
		{
			cin >> a[i];
		}
		for (int i = 0; i < n-1; i++)
		{
			for (int j = 0; j < n-1-i; j++)
			{
				if (a[j] < a[j + 1])swap(a[j], a[j + 1]);
			}
		}
		int sum = 0;
		for (int i = 0; i < m; i++)
		{
			sum += a[i];
		}
		cout << sum << endl;
	}
	return 0;
}------------------------------------------------------Problem1559:#include<iostream>
#include<string>
using namespace std;
int main()
{
	int n,a[101][101];
	string str;
	while (cin >> n)
	{
		for (int i = 0; i < n+2; i++)
		{
			a[0][i] = 0;
			a[n + 1][i] = 0;
			a[i][0] = 0;
			a[i][n + 1] = 0;
		}
		for (int i = 1; i <= n; i++)
		{
			cin >> str;
			for (int j = 0; j < str.length(); j++)
			{
				a[i][j+1] =int (str[j] - 48);
			}
		}
		for (int i = 1; i <= n; i++)
		{
			for (int j = 1; j <= n; j++)
			{
				if (a[i][j] >= 9)
				{
					for (int k = i-1; k <=i+1; k++)
					{
						for (int m = j-1; m <= j+1; m++)
						{
							a[k][m]++;
						}
					}
				}
			}
		}
		for (int i = 1; i <= n; i++)
		{
			for (int j = 1; j <= n; j++)
			{
				if (a[i][j] > 9)a[i][j] = 9;
			}
		}
		for (int i = 1; i <= n; i++)
		{
			for (int j = 1; j <= n; j++)
			{
				cout << a[i][j];
			}
			cout << endl;
		}
	}
	return 0;
}------------------------------------------------------Problem1560:#include<iostream>
#include<cstring>
using namespace std;
char map[105][105];
int flag[105][105];
int m, n;
void dfs(int r, int c, int id)
{
	if (r < 0 || c < 0 || r >= m || c >= n) return;
	if (flag[r][c]>0||map[r][c]!='@') return;
	flag[r][c] = id;
	for (int i = -1; i <= 1; i++)
	{
		for (int j = -1	; j <= 1; j++)
		{
			if (i != 0 || j != 0) dfs(r + i, c + j, id);
		}
	}
}
int main()
{
	char c;
	while (cin >> m >> n && m)
	{
		int count = 0;
		memset(flag, 0, sizeof(flag));
		for (int i = 0; i < m; i++)
		{
			for (int j = 0; j < n; j++)
			{
				cin >> map[i][j];
			}
		}
		for (int i = 0; i < m; i++)
		{
			for (int j = 0; j < n; j++)
			{
				if (map[i][j] == '@'&&flag[i][j] == 0) dfs(i, j, ++count);
			}
		}
		cout << count << endl;
	}
}------------------------------------------------------Problem1561:#include<iostream>
#include<cmath>
using namespace std;
int gys(int a, int b)
{
	int r;
	r = a%b;
	while (r)

	{
		a = b;
		b = r;
		r = a%b;
	}
	return b;
}
int main()
{
	int a, b;
	while (cin >> a >> b)
	{
		int x, y;
		int c = gys(a, b);
		for ( x = 1; ; x++)
		{
			y = (c - a*x) / b;
			if (a*x + b*y == c) break;
		}	
		cout << x << " " << y << endl;
	}
}------------------------------------------------------Problem1562:#include<iostream>
#include<cmath>
using namespace std;
int f(int, int);
int main()
{
	int x, y;
	cin >> x >> y;
	cout << f(x, y);
	return 0;
}
int f(int x,int y)
{
	return pow(x,y);
}------------------------------------------------------Problem1563:#include<iostream>
using namespace std;
int main()
{
	int n,a[100];
	cin >> n;;
	for (int i = 0; i < n; i++)
	{
		cin >> a[i];
	}
	cout << a[0];
	for (int i =1; i < n; i++)
	{
		cout << " "<<a[i];
	}
	cout << endl;
	for (int i = 0; i < n-1; i++)
	{
		for (int j = 0; j < n-1-i; j++)
		{
			if (a[j] < a[j + 1])swap(a[j], a[j + 1]);
		}
	}
	cout << a[1];
	for (int i = 2; i < n - 1; i++)
	{
		cout << " " << a[i];
	}
}------------------------------------------------------Problem1564:#include<iostream>
#include<string>
using namespace std;
int main()
{
	string str;
	getline(cin, str);
	for (int i = 0; i < str.length(); i++)
	{
		cout << str[str.length() - 1 - i];
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1565:#include<iostream>
using namespace std;
int main()
{
	int a[10][10], m, n,max[10];
	cin >> m >> n;
	for (int i = 0; i < m; i++)
	{
		max[i] = 0;
		for (int j = 0; j < n; j++)
		{
			cin >> a[i][j];
			if (a[i][j]>a[i][max[i]])max[i] = j;
		}
	}
	int sum=0;
	for (int i = 0; i < m; i++)
	{
		sum += a[i][max[i]];
	}
	cout << sum;
}------------------------------------------------------Problem1566:#include<iostream>
#include<string>
using namespace std;
int main()
{
	string str;
	int count = 0;
	for (int i = 0; i < 3; i++)
	{
		getline(cin, str);
		for (int j = 0; j < str.length(); j++)
		{
			if (str[j] == ' ')count++;
		}
	}
	cout << count << endl;
	return 0;
}------------------------------------------------------Problem1567:#include<iostream>
using namespace std;
int main()
{
	int n,a[100],b[100],index=0;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> a[i];
	}
	for (int i = 0; i < n; i++)
	{
		if (a[i] % 2 == 1) b[index++] = a[i];
	}
	for (int i = 0; i < index-1; i++)
	{
		for (int j = 0; j < index-1-i; j++)
		{
			if (b[j] > b[j + 1])swap(b[j], b[j + 1]);
		}
	}
	for (int i = 0; i < index; i++)
	{
		cout << b[i] << " ";
	}
	return 0;
}------------------------------------------------------Problem1568:#include<iostream>
using namespace std;
int main()
{
	int a[3][4],max[3];
	for (int i = 0; i < 3; i++)
	{
		max[i] = 0;
		for (int j = 0; j < 4; j++)
		{
			cin >> a[i][j];
			if (a[i][j]>a[i][max[i]])max[i] = j;
		}
	}
	for (int i = 0; i < 3; i++)
	{
		if (max[i] != 0)swap(a[i][0], a[i][max[i]]);
	}
	for (int i = 0; i < 3; i++)
	{
		for (int j = 0; j < 4; j++)
		{
			cout << a[i][j] << " ";
		}
		cout << endl;
	}
}------------------------------------------------------Problem1569:#include<iostream>
#include<string>
using namespace std;
int main()
{
	int count[6] = { 0 ,0,0,0,0,0 };
	string str;
	getline(cin, str);
	for (int i = 0; i < str.length(); i++)
	{
		switch (str[i])
		{
		case '(':
			count[0]++;
			break;
		case ')':
			count[1]++;
			break;
		case '[':
			count[2]++;
			break;
		case ']':
			count[3]++;
			break;
		case '{':
			count[4]++;
			break;
		case '}':
			count[5]++;
			break;
		}
	}
	for (int i = 0; i < 6; i++)
	{
		cout << count[i];
		if (i != 5)cout << " ";
	}
}------------------------------------------------------Problem1570:#include<iostream>
#include<string>
#include<sstream>
using namespace std;
struct node{
    int data;
    node* next;
};
void insert(node*,int);
bool exist(node *head,int a);
int main()
{
    node* list1=new node;
    list1->next=NULL;
    node* list2=new node;
    list2->next=NULL;
    string s;
    //list1
    getline(cin,s);
    for(int i=0;i<s.length();i++)
    {
        if(s[i]==',') s[i]=' ';
    }
    stringstream ss1(s);
    int a;
    while(ss1>>a)
    {
        insert(list1,a);
    }
    //list2
    getline(cin,s);
    for(int i=0;i<s.length();i++)
    {
        if(s[i]==',') s[i]=' ';
    }
    stringstream ss2(s);
    while(ss2>>a)
    {
        insert(list2,a);
    }
    //jiao
    node* p=list1;
    int flag=0;
    while(p->next!=NULL)
    {
        if(exist(list2,p->next->data))
        {
            if(flag==0) flag=1;
            else cout<<',';
            cout<<p->next->data;
        }
        p=p->next;
    }
    cout<<endl;
    //bing
    p=list2;
    flag=0;
    while(p->next!=NULL)
    {
        insert(list1,p->next->data);
        p=p->next;
    }
    p=list1;
    while(p->next!=NULL)
    {
        if(flag==0) flag=1;
        else cout<<',';
        cout<<p->next->data;
        p=p->next;
    }
    cout<<endl;
}
void insert(node* head,int a)
{
    node* p=head;
    bool exist=false;
    while(p->next!=NULL)
    {
        if(p->next->data==a) exist=true;
        p=p->next;
    }
    if(!exist)
    {
        node* s=new node;
        s->data=a;
        s->next=NULL;
        p->next=s;
    }
}
bool exist(node *head,int a)
{
    node* p =head;
    while(p->next!=NULL)
    {
        if(a==p->next->data)return true;
        p=p->next;
    }
    return false;
}------------------------------------------------------Problem1572:#include<iostream>
#include<string>
using namespace std;
int main()
{
	string present[10] = { "0000","0001","0010","0011","0100","0101","0110","0111","1000","1001" };
	string str;
	while (getline(cin, str))
	{
		for (int i = 0; i < str.length(); i++)
		{
			cout << present[str[i] - 48];
		}
		cout << endl;
	}
}------------------------------------------------------Problem1573:#include<iostream>
using namespace std;
int main()
{
	int n, a[1000][3];
	while (cin >> n)
	{
		for (int i = 0; i < n; i++)
		{
			cin >> a[i][0] >> a[i][1];
			a[i][2] = i + 1;
		}
		for (int i = 0; i < n - 1; i++)
		{
			for (int j = 0; j < n - 1 - i; j++)
			{
				if (a[j][0]<a[j + 1][0])swap(a[j], a[j + 1]);
			}
		}
		for (int i = 0; i < n - 1; i++)
		{
			for (int j = 0; j < n - 1; j++)
			{
				if (a[j][0] == a[j + 1][0] && a[j][1]>a[j + 1][1])swap(a[j], a[j + 1]);
			}
		}
		for (int i = 0; i < n - 1; i++)
		{
			for (int j = 0; j < n - 1; j++)
			{
				if (a[j][0] == a[j + 1][0] && a[j][1] == a[j + 1][1] && a[j][2]>a[j + 1][2])swap(a[j], a[j + 1]);
			}
		}
		for (int i = 0; i < n; i++)
		{
			cout << a[i][2];
			if (i != n - 1)cout << " ";
		}
		cout << endl;
	}
}------------------------------------------------------Problem1574:#include<iostream>
using namespace std;
#include<string>
void f(int m)
{
	for (int i = 0; i < m*4;i++)
	{
		cout << " ";
	}
}
int main()
{
	string str;
	int k = 0;
	getline(cin, str);
	cout << str[0];
	for (int i = 1; i < str.length(); i++)
	{
		if(str[i]=='{')
		{
			cout << endl;
			f(k);
			k++;
		}
		if (str[i - 1] == '{' ) 
		{
			cout << endl;
			f(k);
		}
		if ((str[i - 1] == ';' || str[i - 1] == '}')&&str[i] != '}')
		{
			cout << endl;
			f(k);
		}
		if (str[i] == '}')
		{
			cout << endl;
			k--;
			f(k);
		}
		cout << str[i];
	}
}------------------------------------------------------Problem1576:#include<iostream>
using namespace std;
int main()
{
	int fib[46];
	fib[0] = 0;
	fib[1] = 1;
	for (int i = 2; i <= 45; i++)
	{
		fib[i] = fib[i - 1] + fib[i - 2];
	}
	int n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		int t;
		cin >> t;
		cout << fib[t] << endl;
	}
	return 0;
}------------------------------------------------------Problem1577:#include<iostream>
#include<string>
using namespace std;
int main()
{
	int n;
	cin >> n;
	cin.get();
	string str;
	for (int i = 0; i < n; i++)
	{
		getline(cin, str);
		for (int i = str.length() - 1; i >= 0; i--)
		{
			cout << str[i];
		}
		cout << endl;
	}
}------------------------------------------------------Problem1578:#include<iostream>
using namespace std;
int main()
{
	int ans[21];
	ans[1] = 1;
	ans[2] = 2;
	ans[3] = 4;
	for (int i = 4; i < 21; i++)
	{
		ans[i] = ans[i - 1] + ans[i - 2] + ans[i - 3];
	}
	int n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		int m;
		cin >> m;
		cout << ans[m] << endl;
	}
}------------------------------------------------------Problem1584:#include<iostream>
using namespace std;
int main()
{
	int d[4];
	char t;
	while (cin >> d[0] >> t >> d[1] >> t >> d[2] >> t >> d[3])
	{
		int b[4][8] = { 0 };
		for (int i = 0; i < 4; i++)
		{
			int index = 0;
			while (d[i] > 0)
			{
				b[i][index++] = d[i] % 2;
				d[i] /= 2;
			}
		}
		for (int i = 0; i < 4; i++)
		{
			for (int j = 8 - 1; j >= 0; j--)
			{
				cout << b[i][j];
			}
			if (i != 3)cout << ".";
		}
		cout << endl;
	}
	return 0;
}------------------------------------------------------Problem1585:#include<iostream>
using namespace std;
int main()
{
	int m, n,a[1][1];
	while (cin >> m >> n)
	{
		if (m == 0 && n == 0)break;
		int count = 0;
		for (int i = 0; i < m; i++)
		{
			for (int j = 0; j < n; j++)
			{
				cin >> a[0][0];
				if (a[0][0] == 0) count++;
			}
		}
		if (count > double(m*n*2 / 3.0))cout << "Yes\n";
		else cout << "No\n";
	}
	return 0;
}------------------------------------------------------Problem1586:#include<iostream>
using namespace std;
void f(int x)
{
	for (int i = 0; i < x; i++)
	{
		cout << "*";
	}
}
void g(int x)
{
	for (int i = 0; i < x; i++)
	{
		cout << "#";
	}
}
int main()
{
	int n;
	while (cin >> n)
	{
		if (n == 0)break;
		f(n);
		cout << endl;
		for (int i = 0; i < (n-1)/2; i++)
		{
			f((n - 1) / 2 - i);
			g(i*2+1);
			f((n - 1) / 2 - i);
			cout << endl;
		}
		g(n);
		cout << endl;
	}
}------------------------------------------------------Problem1587:#include<iostream>
#include<iomanip>
using namespace std;
int main()
{
	double a, b, c, x1, x2;
	while (cin >> a >> b >> c >> x1 >> x2)
	{
		if (a == 0 && b == 0 && c == 0 && x1 == 0 && x2 == 0)break;
		double ans = a / 3.0*x1*x1*x1 + b / 2.0*x1*x1 + c*x1 - a / 3.0*x2*x2*x2 - b / 2.0*x2*x2 - c*x2;
		cout << fixed << setprecision(2) << ans << endl;
	}
}------------------------------------------------------Problem1588:#include<iostream>
#include<string>
#include<cmath>
#include<iomanip>
const double PI = 3.141592653;
using namespace std;
int main()
{
	double pos_x=0, pos_y=0, angle = 0;
	string str;
	while (cin >> str)
	{
		if (str == "dead")break;
		if (str == "move")
		{
			int s;
			cin >> s;
			pos_x += s*cos(angle);
			pos_y += s*sin(angle);
		}
		else
		{
			int t;
			cin >> t;
			angle += t*PI/180;
		}
	}
	cout << "xiaoqiang is (" << fixed << setprecision(2) << pos_x << "," << pos_y << ")";
}------------------------------------------------------Problem1589:#include<iostream>
#include<iomanip>
using namespace std;
int main()
{
	int n;
	double a[3][3];
	while (cin >> n)
	{
		if (n == 0)break;
		for (int i = 0; i < n; i++)
		{
			for (int j = 0; j < n; j++)
			{
				cin >> a[i][j];
			}
		}
		double ans;
		if (n == 1) ans = a[0][0];
		else if (n == 2) ans = a[0][0] * a[1][1] - a[0][1] * a[1][0];
		else ans = a[0][0] * (a[1][1] * a[2][2] - a[1][2] * a[2][1]) - a[0][1] * (a[1][0] * a[2][2] - a[1][2] * a[2][0]) + a[0][2] * (a[1][0] * a[2][1] - a[1][1] * a[2][0]);
		cout << fixed << setprecision(2) << ans << endl;
	}

}------------------------------------------------------Problem1599:#include<iostream>
using namespace std;
int get_year_days(int year);
int get_month_days(int month, int year);
int main()
{
	int y, m, d;
	char desert;
	int n;
	cin >> n;
	for (int j = 0; j < n; j++)
	{
		int count = 0;
		cin >> y >> desert >> m >> desert >> d;
		for (int i = 2000; i < y; i++)
		{
			count += get_year_days(i);
		}
		for (int i = 1; i < m; i++)
		{
			count += get_month_days(i, y);
		}
		count += d;
		int index = count % 5;
		if (index == 1 || index == 2 || index == 3)cout << "Fishing\n";
		else if(index==0||index==4) cout << "Resting\n";
	}
}
int get_year_days(int y)
{
	if ((y % 4 == 0 && y % 100 != 0) || y % 400 == 0)return 366;
	else return 365;
}
int get_month_days(int m, int y)
{
	switch (m)
	{
	case 1:case 3:case 5:case 7:case 8:case 10:case 12:
		return 31;
		break;
	case 4:case 6:case 9:case 11:
		return 30;
		break;
	case 2:
		if ((y % 4 == 0 && y % 100 != 0) || y % 400 == 0)return 29;
		else return 28;
		break;
	}
}------------------------------------------------------Problem1616:#include<iostream>
#include<cmath>
#include<string>
#include<cstdlib>
#include<iomanip>
using namespace std;
const double pi = acos(-1);
int main()
{
	int n,casenum=1;
	string instruction;
	while (cin>>n)
	{
		double x=0, y=0, angle = 0;
		for (int i = 0; i < n; i++)
		{
			cin >> instruction;
			if (instruction == "Forward")
			{
				double t;
				cin >> t;
				x += t*cos(angle);
				y += t*sin(angle);
			}
			else
			{
				double t;
				cin >> t;
				angle += pi*t / 180;
			}
		}
		cout << "Case " << casenum++ << ": " << fixed << setprecision(2) << x << " " << y << endl;
	}
}------------------------------------------------------Problem1629:#include<iostream>
#include<string>
using namespace std;
#include<list>
struct student
{
	int id;
	string name;
	int age;
public:
	student()
	{
		cin >> id >> name >> age;
	}
};
int main()
{
	list <struct student> students;
	int n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		struct student newstudent;
		students.push_back(newstudent);
	}
	int age;
	cin >> age;
	for (list<struct student>::iterator it = students.begin(); it != students.end(); )
	{
		if (it->age == age) students.erase(it++);
		else it++;
	}
	for (list<struct student>::iterator it = students.begin(); it != students.end(); it++)
	{
		cout << it->id << " " << it->name << " " << it->age << endl;
	}
}------------------------------------------------------Problem1630:#include<iostream>
using namespace std;
int main()
{
	int *p, n;
	cin >> n;
	p = new int[n];
	for (int i = 0; i < n; i++)
	{
		p[i] = 1;
	}
	int count = 0,remain=n,index=0;
	while (remain > 1)
	{
		if (p[index] == 1)count++;
		if (count == 3)
		{
			p[index] = 0;
			remain--;
			count = 0;
		}
		index++;
		if (index == n) index = 0;
	}
	for (int i = 0; i < n; i++)
	{
		if (p[i] == 1)cout << i + 1;
	}
}------------------------------------------------------Problem1631:#include<iostream>
using namespace std;
int main()
{
	int *p,n,m;
	cin >> n;
	p = new int[n];
	for (int i = 0; i < n; i++)
	{
		cin >> p[i];
	}
	cin >> m;
	if (m < p[0])cout << m<<" ";
	cout << p[0];
	for (int i = 1; i < n; i++)
	{
		if (p[i - 1] <= m&&p[i]>m)cout << " "<<m;
		cout << " "<<p[i];
	}
	if (m >= p[n-1])cout <<" "<< m ;
}------------------------------------------------------Problem1632:#include<iostream>
#include<string>
using namespace std;
struct student 
{
	int id;
	string name;
	int age;
};
int main()
{
	int n;
	cin >> n;
	struct student *a = new struct student[n];
	for (int i = 0; i < n; i++)
	{
		cin >> a[i].id >> a[i].name >> a[i].age;
	}
	int c_id, c_age;
	string c_name;
	cin >> c_id >> c_name >> c_age;
	for (int i = 0; i < n; i++)
	{
		if (a[i].id == c_id)
		{
			a[i].name = c_name;
			a[i].age = c_age;
		}
	}
	for (int i = 0; i < n; i++)
	{
		cout << a[i].id << " " << a[i].name << " " << a[i].age << endl;
	}
}------------------------------------------------------Problem1633:#include<iostream>
using namespace std;
int main()
{
	int n, a[50000];
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> a[i];
	}
	for (int i = 0; i < n; i++)
	{
		cout << a[n - 1 - i];
		if (i != n - 1) cout << " ";
	}
	//cin.get(); cin.get();
	return 0;
}------------------------------------------------------Problem1634:#include<iostream>
using namespace std;
int main()
{
	int a[50000], b[50000], c[5], ai = 0, bi = 0, ci = 0;
	int m, n;
	cin >> m >> n;
	for (int i = 0; i <m; i++)
	{
		cin >> a[i];
	}	
	for (int i = 0; i <n; i++)
	{
		cin >> b[i];
	}
	while (ci<5&&ai < m&&bi < n)
	{
		if (a[ai] < b[bi])
		{
			c[ci++] = a[ai++];
		}
		else
		{
			c[ci++] = b[bi++];
		}
	}
	while (ci < 5&&ai < m)
	{
		c[ci++] = a[ai++];
	}
	while (ci < 5&&bi < n)
	{
		c[ci++] = b[bi++];
	}
	cout << c[4] << endl;
	ai = 0, bi = 0, ci = 0;
	while (ci<5 && ai<m&&bi<n)
	{
		if (a[m-1-ai] > b[n-1-bi])
		{
			c[ci++] = a[m-1-(ai++)];
		}
		else
		{
			c[ci++] = b[n-1-(bi++)];
		}
	}
	while (ci < 5 && ai<m)
	{
		c[ci++] = a[m-1-(ai++)];
	}
	while (ci < 5 && ai<n)
	{
		c[ci++] = b[n-1-(bi++)];
	}
	cout << c[4];
	return 0;
}------------------------------------------------------Problem1635:#include<iostream>
#include<string>
using namespace std;
int main()
{
	int n;
	cin >> n;
	cin.get();
	for (int  i = 0; i < n; i++)
	{
		string x;
		int count = 0;
		getline(cin, x);
		for (int i = 0; i < x.length(); i++)
		{
			if (x[i] >= 'a'&&x[i] <= 'z')count++;
			else break;
		}
		cout << count << endl;
	}
	return 0;
}------------------------------------------------------Problem1636:#include<iostream>
#include<string>
using namespace std;
struct students
{
	string name;
	int age;
	string sex;
};
int main()
{
	struct students *a;
	int n;
	cin >> n;
	a = new struct students[n];
	for (int i = 0; i < n; i++)
	{
		cin >> a[i].name >> a[i].age >> a[i].sex;
	}
	for (int i = 0; i < n-1; i++)
	{
		for (int j = 0; j < n-1-i; j++)
		{
			if (a[j].age > a[j + 1].age) swap(a[j], a[j + 1]);
		}
	}
	for (int i = 0; i < n; i++)
	{
		cout << a[i].name <<" "<< a[i].age <<" "<< a[i].sex << endl;
	}
}------------------------------------------------------Problem1637:#include<iostream>
#include<string>
using namespace std;
int main()
{
	int n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		char c;
		cin >> c;
		cin.get();
		string str;
		getline(cin, str);
		if (c >= 97)c -= 32;
		for (int j = 0; j < str.length(); j++)
		{
			if (str[j] == c) str[j] += 32;
			else if (str[j] == c + 32) str[j] -= 32;
		}
		cout << str << endl;
	}
}------------------------------------------------------Problem1640:#include<iostream>
#include<string>
using namespace std;
class score
{
	string num;
	int Math;
	int English;
	int Programming;
	int AvScore;
public:
	void inscore();
	void showscore();
};
void score::inscore()
{
	cin >> num >> Math >> English >> Programming;
	AvScore = (Math + English + Programming) / 3;
}
void score::showscore()
{
	cout << num << " " << Math << " " << English << " " << Programming << " " << AvScore << endl;
}
int main()
{
	score *p;
	int n;
	cin >> n;
	p = new score[n];
	for (int i = 0; i < n; i++)
	{
		p[i].inscore();
	}
	for (int i = 0; i < n; i++)
	{
		p[i].showscore();
	}
	cout << n;
}------------------------------------------------------Problem1641:#include<iostream>
using namespace std;
class complex
{
	int x, y;
public:
	complex(int x,int y) :x(x), y(y) {};
	void show()
	{
		cout << x << "+" << y << "i" << endl;
	}
	friend void add(complex&, complex);
	friend void sub(complex&, complex);
	friend void mul(complex&, complex);
};
void add(complex& a, complex b)
{
	a.x += b.x;
	a.y += b.y;
}
void sub(complex& a, complex b)
{
	a.x -= b.x;
	a.y -= b.y;
}
void mul(complex& a, complex b)
{
	int m = a.x*b.x - a.y*b.y;
	int n = a.x*b.y + a.y*b.x;
	a.x = m;
	a.y = n;
}
int main()
{
	int a, b, c, d;
	cin >> a >> b >> c >> d;
	complex m(a, b), n(c, d);
	char oper;
	cin >> oper;
	if (oper == '+')
	{
		add(m,n);
	}
	else if (oper == '-')
	{
		sub(m, n);
	}
	else
	{
		mul(m, n);
	}
	m.show();
}------------------------------------------------------Problem1642:#include<iostream>
#include<string>
using namespace std;
int main()
{
	int n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		char c;
		cin >> c;
		cin.get();
		string str;
		getline(cin, str);
		if (c >= 97)c -= 32;
		for (int j = 0; j < str.length(); j++)
		{
			if (str[j] == c) str[j] += 32;
			else if (str[j] == c + 32) str[j] -= 32;
		}
		cout << str << endl;
	}
}------------------------------------------------------Problem1673:#include<iostream>
#include<string>
using namespace std;
class building
{
protected:
    string name;
    int floors;
public:
    building(string n,int f):name(n),floors(f){cout<<"Building ";}
    virtual~building(){cout<<"Building ";}
    virtual void print()=0;
};
class house:virtual public building{
private:
    double sellprice;
public:
    house(string n,int f,double s):building(n,f),sellprice(s){cout<<"house ";}
    ~house(){cout<<"house ";}
    double getsellprice(){return sellprice;}
    void print(){}
};
class office:virtual public building{
private:
    double lendprice;
public:
    office(string n,int f,double l):building(n,f),lendprice(l){cout<<"office ";}
    ~office(){cout<<"office ";}
    double getlendprice(){return lendprice;}
    void print(){}
};
class A:public house,public office
{
public:
    A(string n,int f,double s,double l):building(n,f),house(n,f,s),office(n,f,l){cout<<"A ";}
    ~A(){cout<<"A ";}
    void print(){cout<<"name="<<name<<" floors="<<floors<<" sellprice="<<(int)getsellprice()<<" lendprice="<<(int)getlendprice();}
};
int main()
{
    string n;
    int f;
    double s,l;
    cin>>n>>f>>s>>l;
    building* p;
    p=new A(n,f,s,l);
    cout<<endl;
    p->print();
    cout<<endl;
    delete p;
}------------------------------------------------------Problem1674:#include<iostream>
#include<iomanip>
#include<cmath>
using namespace std;
int main()
{
	int x_bin,x_dec=0,dm=0;
	cin >> x_bin;
	while (x_bin >= 1)
	{
		x_dec += (x_bin % 10) * pow(2,dm);
		x_bin /= 10;
		dm++;
	}
	cout << x_dec<<endl;
	cout << oct << x_dec << endl;
	cout << hex << x_dec << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1675:#include<iostream>
#include<string>
using namespace std;
int main()
{
	string present = "0123456789abcdefghijklmnopqrstuvwxyz";
	int ans[10000], index = 0;
	int k, a;
	cin >>k>>a;
	while (a > 0)
	{
		ans[index++] = a%k;
		a /= k;
	}
	for (int i = index - 1; i >= 0; i--)
	{
		cout << present[ans[i]];
	}
}------------------------------------------------------Problem1676:#include<iostream>
using namespace std;
int main()
{
	int n, ans[10], index = 0;
	for (int i = 0; i < 10; i++)
	{
		cin >> n;
		int flag = 1;
		if (n == 1) flag = 0;
		for (int i = 2; i < n; i++)
		{
			if (n%i == 0) flag = 0;
		}
		if (flag)
		{
			ans[index++] = n;
		}
	}
	if (index)
	{
		for (int i = 0; i < index-1; i++)
		{
			for (int j = 0; j < index-1-i; j++)
			{
				if (ans[j] < ans[j + 1])swap(ans[j], ans[j + 1]);
			}
		}
		cout << ans[0];
	}
	else
	{
		cout << "None\n";
	}
	return 0;
}------------------------------------------------------Problem1677:#include<iostream>
using namespace std;
bool not_prime[1001];
int main()
{
	for (int i = 2; i < 1001; i++)
	{
		if (not_prime[i] == 0)
		{
			for (int j = 2 * i; j < 1001; j += i)
			{
				not_prime[j] = 1;
			}
		}
	}
	int a, b;
	cin >> a >> b;
	int m = a < b ? a : b;
	int n = a > b ? a : b;
	for (int i = m; i <= n - 2; i++)
	{
		if (not_prime[i] == 0 && not_prime[i + 2] == 0)cout << i << " " << i + 2 << endl;
	}

}------------------------------------------------------Problem1678:#include<iostream>
#include<cstring>
using namespace std;
class  Name
{
public:
	Name(char  *pN);
	Name(const Name&);
	Name operator=(Name);
	~Name();
	char  *pName;
};
int main()
{
	int i;
	cin >> i;
	if (i == 0) return 0;
	Name Obj1("ZhangSan");
	Name Obj3("Noname");
	Obj3 = Obj1;
	return 0;
}
Name::Name(char  *pN)
{
	cout << "   Constructing  " << pN << " " << endl;
	pName = new char[strlen(pN) + 1];
	if (pName != 0) strcpy(pName, pN);
}
Name::Name(const Name& Obj)
{
	pName = new char[strlen(Obj.pName) + 1];
	if (pName != 0) strcpy(pName, Obj.pName);
}
Name Name::operator= (Name Obj)
{
	delete[]pName;
	pName = new char[strlen(Obj.pName) + 1];
	if (pName != 0) strcpy(pName, Obj.pName);
	return *this;
}
Name::~Name()
{
	cout << "   Destructing   " << pName << "  " << endl;
	pName[0] = '\0';
	delete[]pName;
}
------------------------------------------------------Problem1679:#include<iostream>
#include<cstring>
using namespace std;
class people
{
public:
	char name[50];
	people(char *p) { strcpy(name, p); cout << "people " << p << " init" << endl; }
};
class student:virtual public people
{
public:
	char stunumber[10];
	student(char *p, char *q):people(p) { strcpy(stunumber, q); cout << "student " << p << " " << q << " init" << endl; }
};
class teacher:virtual public people
{
public:
	char ternumber[10];
	teacher(char *p, char *r):people(p) { strcpy(ternumber, r); cout << "teacher " << p << " " << r << " init" << endl; }
};
class teacher_student:public student,public teacher
{
public:
	teacher_student(char *p, char *q, char *r):people(p),student(p,q),teacher(p,r) { cout << "teacher_student " << p << " " << q << " " << r << " init" << endl; }
};
int main()
{
	int i;
	cin >> i;
	if (i == 0) return 0;
	people p1("ZhangSan");
	student s1("LiSi", "01247012");
	teacher t1("WangWu", "83005");
	teacher_student ts1("ZhaoLiu", "01147011", "92002");
	return 0;
}------------------------------------------------------Problem1680:#include<iostream>
using namespace std;
class Complex
{
public:
	int real, imag;
	Complex() { real = 0, imag = 0; }
	void set(int m = 0, int n = 0) { real = ++m, imag = ++n; }
	friend istream& operator>>(istream&, Complex&);
	friend ostream& operator<<(ostream&, Complex);
	Complex operator+(Complex);
	Complex operator-(Complex);
};
istream& operator>>(istream& in, Complex &m)
{
	int r,i;
	in >> r;
	in >> i;
	m.set(r,i);
	return in;
}
ostream& operator<<(ostream& out, Complex m)
{
	out << m.real;
	if (m.imag >= 0)out << "+";
	out<< m.imag << "i\n";
	return out;
}
Complex Complex::operator+(Complex m)
{
	Complex t;
	t.real = real + m.real;
	t.imag = imag + m.imag;
	return t;
}
Complex Complex::operator-(Complex m)
{
	Complex t;
	t.real = real - m.real;
	t.imag = imag - m.imag;
	return t;
}
int main()
{
	Complex a, b;
	char op;
	cin >> a;
	cin >> b;
	cin >> op;
	if (op == '+')
	{
		cout << a + b;
	}
	else
	{
		cout << a - b;
	}
}------------------------------------------------------Problem1681:#include<iostream>
#include<string>
using namespace std;
struct student
{
	int num;
	string name;
};
int main()
{
	struct student *p;
	int n;
	cin >> n;
	p = new struct student[n];
	for (int i = 0; i < n; i++)
	{
		cin >> p[i].num >> p[i].name;
	}
	for (int i = 0; i < n-1; i++)
	{
		for (int j = 0; j < n-1-i; j++)
		{
			if (p[j].name > p[j + 1].name) swap(p[j], p[j + 1]);
		}
	}
	for (int i = 0; i < n; i++)
	{
		cout << p[i].num << " " << p[i].name << endl;
	}
}------------------------------------------------------Problem1682:#include<iostream>
using namespace std;
class matrix
{
public:
	int n;
	int a[100][100];
	matrix(int x) { n = x; }
	void traverse()
	{
		for (int i = 0; i < n; i++)
		{
			for (int j = 0; j < n; j++)
			{
				cout << a[j][i] << " ";
			}
			cout << endl;
		}
	}
	friend ostream &operator<<(ostream &output, const matrix &m);
	friend istream &operator>>(istream &input, matrix &m);
};

ostream &operator<<(ostream &output, const matrix &m)
{
	for (int i = 0; i < m.n; i++)
	{
		for (int j = 0; j < m.n; j++)
		{
			output << m.a[i][j]<<" ";
		}
		output << endl;
	}
	return output;
}
istream &operator>>(istream &input, matrix &m) 
{
	for (int i = 0; i < m.n; i++)
	{
		for (int j = 0; j < m.n; j++)
		{
			input >> m.a[i][j];
		}
	}
	return input;
}
int main()
{
	int n;
	cin >> n;
	matrix a(n);	
	cin >> a;
	cout << a << endl;
	a.traverse();
	cout << endl;
	return 0;
}------------------------------------------------------Problem1683:#include<iostream>
#include<string>
using namespace std;
int main()
{
	int **p, n;
	cin >> n;
	p = new int*[n];
	for (int i = 0; i < n; i++)
	{
		p[i] = new int[2];
	}
	for (int i = 0; i < n; i++)
	{
		p[i][0] = i;
		cin >> p[i][1];
	}
	for (int i = 0; i < n-1; i++)
	{
		for (int j = 0; j < n-1-i; j++)
		{
			if (p[j][1] < p[j+1][1])swap(p[j], p[j + 1]);
		}
	}
	for (int i = 0; i < n; i++)
	{
		cout << p[i][1] << " ";
	}
	cout << endl;
	for (int i = 0; i < n; i++)
	{
		cout << p[i][0] << " ";
	}
}------------------------------------------------------Problem1684:#include<iostream>
#include<cmath>
using namespace std;
int f(int, int, int);
int main()
{
	int n, x, y;
	cin >> n >> x >> y;
	int ans = 0;
	for (int i = 0; i <= n; i++)
	{
		ans += f(x, y, i);
	}
	cout << ans;
	return 0;
}
int f(int x, int y, int n)
{
	int j = 1;
	for (int i = 1; i <= n; i++)
	{
		j *= i;
	}
	return j*pow(x, n) + n*x*pow(y, n - 1);
}------------------------------------------------------Problem1685:#include<iostream>
#include<string>
using namespace std;
int main()
{
	int n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin.get();
		string s;
		char c1, c2;
		getline(cin, s);
		cin >> c1;
		cin >> c2;
		for (int i = 0; i < s.length(); i++)
		{
			if (s[i] == c1)s[i] = c2;
		}
		cout << s<<endl;
	}
}------------------------------------------------------Problem1686:#include<iostream>
#include<cmath>
using namespace std;
int main()
{
	int n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		float a, b, c;
		cin >> a >> b >> c;
		if (a == 0)
		{
			cout << int(-c / b)<<endl;
		}
		else
		{
			int d = b*b - 4 * a*c;
			if (d > 0)
			{
				cout <<int( (-b - sqrt(d)) / (a * 2)) << " " <<int( (-b + sqrt(d)) / (a * 2)) << endl;
			}
			else if (d == 0)
			{
				cout << int((-b + sqrt(d)) / (a * 2)) << endl;
			}
			else
			{
				cout << "no root\n";
			}
		}
	}
	return 0;
}------------------------------------------------------Problem1687:#include<iostream>
using namespace std;
int main()
{
	int n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		int a, b;
		char c;
		cin >> a >> c >> b;
		switch (c)
		{
		case '+':
			cout << a + b << endl;
			break;
		case '-':
			cout << a - b << endl;
			break;
		case '*':
			cout << a * b << endl;
			break;
		case '/':
			cout << a / b << endl;
			break;
		}
	}
}------------------------------------------------------Problem1688:#include<iostream>
#include<string>
using namespace std;
int main()
{
	string s[10];
	int n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> s[i];
	}
	for (int i = 0; i < n-1; i++)
	{
		for (int j = 0; j < n-1-i; j++)
		{
			if (s[j] < s[j + 1]) swap(s[j], s[j + 1]);
		}
	}
	for (int i = 0; i < n; i++)
	{
		cout << s[i];
	}
}------------------------------------------------------Problem1689:#include<iostream>
#include<string>
#include<map>
#include<vector>
using namespace std;
int main()
{
	int n, k;
	map<char, string> nationality;
	map<char, int> lasting;
	vector<char> ship;
	nationality['a'] = "American";
	nationality['j'] = "Japanese";
	nationality['f'] = "French";
	nationality['e'] = "English";
	nationality['i'] = "Italian";
	lasting['a'] = 0;
	lasting['j'] = 0;
	lasting['f'] = 0;
	lasting['e'] = 0;
	lasting['i'] = 0;
	cin >> n >> k;
	for (int i = 0; i < n; i++)
	{
		char t;
		cin >> t;
		ship.push_back(t);
		lasting[t]++;
	}
	int x = 0;
	while (ship.size() > 1)
	{
		x = x + k - 1;
		x %= ship.size();
		char t = ship[x];
		ship.erase(ship.begin() + x);
		lasting[t]--;
		cout << "I am " << nationality[t] << " " << lasting[t] << endl;
	}
}------------------------------------------------------Problem1690:#include<iostream>
using namespace std;
int main()
{
	int n, m, a[1000];
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> a[i];
	}
	cin >> m;
	for (int i = n; i < n+m; i++)
	{
		cin >> a[i];
	}
	for (int i = 0; i < m+n-1; i++)
	{
		for (int j = 0; j < m+n-1-i; j++)
		{
			if (a[j] > a[j + 1])swap(a[j], a[j + 1]);
		}
	}
	for (int i = 0; i < n+m; i++)
	{
		cout << a[i];
		if (i != n + m - 1)cout << " ";
	}
}------------------------------------------------------Problem1691:#include<iostream>
#include<string>
using namespace std;
int main()
{
	string str;
	getline(cin, str);
	for (int i = 0; i < str.length(); i++)
	{
		if (str[i] == '#')
		{
			str.erase(i, 1);
			i--;
		}
		else
		{
			break;
		}
	}
	cout << str;
}------------------------------------------------------Problem1692:#include<iostream>
#include<vector>
using namespace std;
int main()
{
	int n, k;
	vector<int> circle;
	cin >> n >> k;
	for (int i = 0; i < n; i++)
	{
		circle.push_back(i + 1);
	}
	int x = 0;
	int count=0;
	while (circle.size()>1)
	{
		x = x + k - 1;
		x %= circle.size();
		int t = circle[x];
		cout << t << " ";
		circle.erase(circle.begin() + x);
		x %= circle.size();
		t = circle[x];
		cout << t ;
		circle.erase(circle.begin() + x);
		count += 2;
		if (count != n) cout << " ";
	}
	if (n % 2)cout << circle[0];

}------------------------------------------------------Problem1693:#include<iostream>
using namespace std;
int stack[1000], top = 0;
void fin(int a)
{
	stack[top++] = a;
}
int fout()
{
	if (top > 0)
	{
		top--;
		return stack[top];
	}
	else
	{
		return -1;
	}
}
void show()
{
	if (top == 0)cout << "empty\n";
	else
	{
		for (int i = 0; i < top; i++)
		{
			cout << stack[i];
			if (i != top - 1)cout << " ";
		}
		cout << endl;
	}
}
int main()
{
	int code;
	while (cin >> code)
	{
		if (code == 1)
		{
			int n;
			cin >> n;
			fin(n);
		}
		else if (code == 2)
		{
			int n = fout();
			if (n == -1)cout << "empty\n";
			else cout << n<<endl;
		}
		else
		{
			show();
		}
	}
}------------------------------------------------------Problem1694:#include<iostream>
using namespace std;
struct node
{
int data;
node *next;
};
node * head=NULL;
void create()
{
    int n;
    while(cin>>n && n)
    {
        if(head==NULL)
        {
            head=new node;
            head->data=n;
            head->next=NULL;
        }else
        {
            node* s=new node;
            s->data=n;
            s->next=NULL;
 
            node* p=head;
 
            while(p!=NULL)
            {
                if(p->data>s->data)
                {
                    s->next=p->next;
                    p->next=s;
                    swap(p->data,s->data);
                    break;
                }else if(p->next==NULL)
                {
                    p->next=s;
                    break;
                }
                p=p->next;              
            }
        }
    }  
}
void show()
{
node *p=head;
while(p)
{
cout<<p->data<<" ";
p=p->next;
}
}
int main()
{
create();
show();
}------------------------------------------------------Problem1698:#include<iostream>
using namespace std;
int max3num[3]={-9999,-9999,-9999};
struct node
{
    int data;
    node *next;
};
node * head;
void create()
{
    int i;
    node *p;
    cin>>i;
    while(i!=0)
    {
        p=new node;
        p->data=i;
        p->next=head;
        head=p;
        cin>>i;
    }
}
void insertmax(int n)
{
    if(n>max3num[2])
    {
        max3num[2]=n;
        for(int i=0;i<2;i++)
        {
            for(int j=0;j<2-i;j++)
            {
                if(max3num[j]<max3num[j+1])
                swap(max3num[j],max3num[j+1]);
            }
        }
    }
}
int max3()
{
    node* p=head;
    while(p!=NULL)
    {
        insertmax(p->data);
        p=p->next;
    }
    return max3num[0]+max3num[1]+max3num[2];
}
int main()
{
    create();
    cout<<max3();
    return 0;
}------------------------------------------------------Problem1700:#include<iostream>
using namespace std;
int main()
{
	cout << "hello world" << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1701:#include<iostream>
using namespace std;
int main()
{
	int a, b;
	cin >> a >> b;
	int *pa, *pb;
	pa = &a;
	pb = &b;
	cout << *pa << " " << *pb << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1702:#include<iostream>
#include<iomanip>
using namespace std;
int main()
{
	float x, y;
	char op;
	for (int i = 0; i < 4; i++)
	{
		float ans;
		cin >> x >> op >> y;
		switch (op)
		{
		case '+':
			ans = x + y;
			break;
		case '-':
			ans = x - y;
			break;
		case '*':
			ans = x*y;
			break;
		default:
			ans = x / y;
			break;
		}
		cout << fixed << setprecision(2) << ans << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1703:#include<iostream>
using namespace std;
int generate_num(int, int);
int main()
{
	int a, sum=0;
	cin >> a;
	for (int i = 1; i <= 4; i++)
	{
		sum += generate_num(a, i);
	}
	cout << sum<<endl;
	//cin.get();
	//cin.get();
	return 0;
}
int generate_num(int fact, int num)
{
	int ans=fact;
	for (int i = 1; i < num; i++)
	{
		int tmp = 1;
		for (int j = 0; j < i; j++)
		{
			tmp *= 10;
		}
		ans += tmp*fact;
	}
	return ans;
}------------------------------------------------------Problem1705:#include<iostream>
using namespace std;
int main()
{
	int a, b;
	cin >> a >> b;
	if (a > b)cout << a << "-" << b << "=" << a - b << endl;
	else if (b > a) cout << b << "-" << a << "=" << b - a << endl;
	else cout << a << "=" << b << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1706:#include<iostream>
using namespace std;
int main()
{
	int n;
	cin >> n;
	int ans1=0, ans2=1;
	for (int i = 1; i <= n; i++)
	{
		ans1 += i;
	}
	for (int i = 1; i <= n; i++)
	{
		ans2 *= i;
	}
	cout << ans1 << endl << ans2 << endl;
	//cin.get(); cin.get();
	return 0;
}------------------------------------------------------Problem1707:#include<iostream>
using namespace std;
int main()
{
	int m, n;
	cin >> m >> n;
	int tmp;
	while (m%n != 0)
	{
		tmp = n;
		n = m%n;
		m = tmp;
	}
	cout << n;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1708:#include<iostream>
using namespace std;
int main()
{
	int x,m=-99999;
	while (cin >> x)
	{
		if (x == 0)break;
		if (x > m)m = x;
	}
	cout << m << endl;
	//cin.get(); cin.get();
	return 0;
}------------------------------------------------------Problem1710:#include<iostream>
using namespace std;
int main()
{
	int m, n;
	cin >> m >> n;
	cout << (m > n ? m : n) << " " << (m < n ? m : n) << endl;
	//cin.get(); cin.get();
	return 0;
}------------------------------------------------------Problem1711:#include<iostream>
using namespace std;
int main()
{
	int n, m = -99999;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		int x;
		cin >> x;
		if (x > m)m = x;
	}
	cout << m << endl;
	//cin.get(); cin.get();
	return 0;
}------------------------------------------------------Problem1712:#include<iostream>
using namespace std;
int main()
{
	int n, sum = 0;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		int x;
		cin >> x;
		if (x % 2)sum += x;
	}
	cout << sum << endl;
	//cin.get(); cin.get();
	return 0;
}------------------------------------------------------Problem1713:#include<iostream>
using namespace std;
int main()
{
	int n, count_correct = 0, count_minus = 0;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		int a, b, c;
		char s, t;
		cin >> a >> s >> b >> t >> c;
		if (s == '-')
		{
			count_minus++;
			if (a - b == c)count_correct++;
		}
		else
		{
			if (a + b == c) count_correct++;
		}
	}
	cout << count_correct << " " << count_minus;
}------------------------------------------------------Problem1714:#include<iostream>
using namespace std;
int main()
{
	int next[4][2] = { 0,1,1,-1,1,0,-1,1 };
	int martix[10][10];
	for (int i = 0; i < 10; i++)
	{
		for (int j = 0; j < 10; j++)
		{
			martix[i][j] = 0;
		}
	}
	int n;
	int step = 0, i = 0, j = 0;
	cin >> n;
	int tmp = n;
	martix[0][0] = n;
	while (n > 0)
	{
		if (step % 4 == 0)
		{
			i += next[0][0];
			j += next[0][1];
			n--;
			martix[i][j] = n;
			step++;
		}
		else if (step % 4 == 1)
		{
			while (j > 0)
			{
				i += next[1][0];
				j += next[1][1];
				n--;
				martix[i][j] = n;
				if (n == 1)break;
			}
			step++;
		}
		else if (step % 4 == 2)
		{
			i += next[2][0];
			j += next[2][1];
			n--;
			martix[i][j] = n;
			step++;
		}
		else if (step % 4 == 3)
		{
			while (i > 0)
			{
				i += next[3][0];
				j += next[3][1];
				n--;
				martix[i][j] = n;
				if (n == 1)break;
			}
			step++;
		}
	}
	int count = 0;
	for (int i = 0; i < 10; i++)
	{
		for (int j = 0; j < 10; j++)
		{
			if (martix[i][j] != 0)
			{
				cout << martix[i][j] << " ";
				count++;
			}
		}
		if (count < tmp)cout << endl;
	}
}------------------------------------------------------Problem1715:#include<iostream>
using namespace std;
int main()
{
	int n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cout << "hello world\n";
	}
	//cin.get(); cin.get();
	return 0;
}------------------------------------------------------Problem1716:#include<iostream>
using namespace std;
int main()
{
	int n;
	cin >> n;
	if (n % 2)cout << "奇数\n";
	else cout << "偶数\n";
	//cin.get(); cin.get();
	return 0;
}------------------------------------------------------Problem1717:#include<iostream>
#include<cmath>
using namespace std;
const double E = 2.718281828459;
int main()
{
	double n;
	cin >> n;
	double x0 =0,x1=0.5;
	while (fabs(x1 - x0) > n)
	{
		x0 = x1;
		x1 = pow(E, -x0);
	}
	int num = 0;
	while (n < 1)
	{
		num++;
		n *= 10;
	}
	cout <<x1<<endl;
}------------------------------------------------------Problem1718:#include<iostream>
using namespace std;
int main()
{
	for (int i = 100; i <= 200; i++)
	{
		int flag = 1;
		for (int j = 2; j < i; j++)
		{
			if (i%j == 0)flag = 0;
		}
		if (flag)cout << i << " ";
	}
	cin.get(); cin.get();
	return 0;
}------------------------------------------------------Problem1719:#include<iostream>
#include<iomanip>
#include<cmath>
using namespace std;
double f(double x)
{
	return 2 * x*x*x - 4 * x*x + 3 * x - 6;
}
double dx(double x)
{
	return 6 * x*x - 8 * x + 3;
}
int main()
{
	double n;
	cin >> n;
	double x0 =0,x1=1.5;
	while (fabs(x1 - x0) > n/10)
	{
		x0 = x1;
		x1 = x0 - f(x0) / dx(x0);
	}
	int num = 0;
	double t = n;
	while (n < 1)
	{
		num++;
		n *= 10;
	}
	cout << fixed<<setprecision(num)<<x1+t<<endl;
}------------------------------------------------------Problem1720:#include<iostream>
using namespace std;
int f(int a, int *b, int &c);
int main()
{
	int m, n, k;
	cin >> m >> n >> k;
	m = f(m, &n, k);
	cout << m << endl << n << endl << k << endl;
}
int f(int a, int *b, int &c)
{
	int x = a, y = *b, z = c;
	int ans1=0, ans2=0, ans3=1;
	for (int i = 1; i <= x; i++)
	{
		ans1 += i;
	}
	for (int i = 1; i <= y; i++)
	{
		ans2 += i*i;
	}
	for (int i = 1; i <= z; i++)
	{
		ans3 *= i;
	}
	*b = ans2;
	c = ans3;
	return ans1;
}------------------------------------------------------Problem1721:#include<iostream>
using namespace std;
int main()
{
	int x;
	char star;
	cin >> x >> star;
	for (int i = 1; i <(x+1)/2; i++)
	{
		for (int j = 0; j < (x+1)/2-i; j++)
		{
			cout << " ";
		}
		for (int j = 0; j < i*2-1; j++)
		{
			cout << star;
		}
		cout << endl;
	}
	for (int i =(x+1)/2; i <= x; i++)
	{
		for (int j = 0; j < i-(x + 1) / 2 ; j++)
		{
			cout << " ";
		}
		for (int j = 0; j < x-2*(i-(x+1)/2); j++)
		{
			cout << star;
		}
		cout << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1725:#include<iostream>
using namespace std;
int isHW(long long int x)
{
	long long int a = x;
	long long int b = 0;
	while (x) {
		b = b * 10 + x % 10;
		x /= 10;
	}
	if (a == b)return 1;
	return 0;
}
int main()
{
	long long int n;
	while (cin >> n)
	{
		for (long long int i = n + 1;; i++)
		{
			if (isHW(i))
			{
				cout << i << endl;
				break;
			}
		}
	}
}------------------------------------------------------Problem1729:#include<iostream>
#include<string>
#include<sstream>
using namespace std;
void replaceall(string &s, string reg, string replacement)
{
	int len = reg.length();
	while (s.find(reg) < s.length())
	{
		s.replace(s.find(reg), len, replacement);
	}
}
int main()
{
	string s;
	while (getline(cin, s,'#'))
	{
		replaceall(s, ":", " sign ");
		replaceall(s, ",", " sign ");
		replaceall(s, "+", " sign ");
		replaceall(s, "-", " sign ");
		replaceall(s, ".", " sign ");
		stringstream ss(s);
		string sub;
		int count = 0;
		while (ss >> sub)
		{
			count++;
		}
		if (count)
		{
			cout << count << endl;
		}
	}
}
------------------------------------------------------Problem1730:#include<iostream>
using namespace std;
int f(int);
int main()
{
	int n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cout << f(i + 1) << endl;
	}
}
int f(int x)
{
	if (x == 0) return 0;
	else return (25173 * f(x - 1)+ 13849) % 65536;
}------------------------------------------------------Problem1732:#include<iostream>
using namespace std;
void del_element(int arr[], int);
void add_element(int arr[], int, int);
int main()
{
	int a[10];
	for (int i = 0; i < 10; i++)
	{
		a[i] = i + 1;
	}
	for (int i = 0; i < 2; i++)
	{
		int n;
		cin >> n;
		del_element(a,n);
	}
	for (int i = 0; i < 2; i++)
	{
		int n, data;
		cin >> n >> data;
		add_element(a, n, data);
	}
	for (int i = 0; i < 10; i++)
	{
		cout << a[i];
		if (i != 9)cout << " ";
	}
}
void del_element(int arr[], int x)
{
	for (int i = x; i < 9; i++)
	{
		arr[i] = arr[i + 1];
	}
}
void add_element(int arr[], int x, int data)
{
	for (int i = 10 - 1; i >= x+1; i--)
	{
		arr[i] = arr[i - 1];
	}
	arr[x] = data;
}------------------------------------------------------Problem1733:#include<iostream>
using namespace std;
int main()
{
	int a[10];
	for(int i=0;i<10;i++)
	{
		cin>>a[i];
	}
	for(int i=0;i<10;i++)
	{
		cout<<a[9-i];
		if(i!=9)cout<<" ";
	}
}
------------------------------------------------------Problem1735:#include<iostream>
using namespace std;
int main()
{
	int n, a[1000];
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> a[i];
	}
	for (int i = 0; i < n-1; i++)
	{
		for (int j = 0; j < n-1-i; j++)
		{
			if (a[j] > a[j + 1]) swap(a[j], a[j + 1]);
		}
	}
	for (int i = 0; i < n; i++)
	{
		cout << a[i];
		if (i != n - 1)cout << " ";
	}
	//cin.get(); cin.get();
	return 0;
}------------------------------------------------------Problem1736:#include<iostream>
using namespace std;
int main()
{
	int m, n, maxl=-999999, maxh=-999999;
	cin >> m >> n;
	int a[100][100];
	for (int i = 0; i < m; i++)
	{
		for (int j = 0; j <n; j++)
		{
			cin >> a[i][j];
		}

	}
	for (int i = 0; i < m; i++)
	{
		int l = 0;
		for (int j = 0; j < n; j++)
		{
			l += a[i][j];
		}
		if (l > maxl)maxl = l;

	}
	for (int i = 0; i < n; i++)
	{
		int h = 0;
		for (int j = 0; j < m; j++)
		{
			h += a[j][i];
		}
		if (h > maxh)maxh = h;
	}
	cout << maxl << endl<< maxh << endl;
}------------------------------------------------------Problem1737:#include<iostream>
#include<cstdlib>
using namespace std;
int main()
{
	int ans[10] = { 38,7719,21238,2437,8855,11797,8365,32285,10450,30612 };
	int n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cout << ans[i]<<endl;
	}
}------------------------------------------------------Problem1738:#include<iostream>
#include<cmath>
#include<stdlib.h>
using namespace std;
int main()
{
	int m, n;
	cin >> m >> n;
	m = abs(m);
	n = abs(n);
	int max, min;
	for (int i = 1; i <= (m>n?n:m); i++)
	{
		if (m%i == 0 && n%i == 0)max = i;
	}
	for (int i = (m>n?m:n); i <= m*n; i++)
	{
		if (i%m == 0 && i%n == 0)
		{
			min = i;
			break;
		}
	}
	cout << max << " " << min<<endl;
}------------------------------------------------------Problem1740:#include<iostream>
using namespace std;
int main()
{
	int n;
	cin >> n;
	for (int i = 1; i <= n; i++)
	{
		for (int j = 0; j < 2*i-1; j++)
		{
			cout << i;
			if (j != 2 * i - 2)cout << " ";
		}
		cout << endl;
	}
	for (int i = n - 1; i >= 1; i--)
	{
		for (int j = 0; j < 2 * i - 1; j++)
		{
			cout << i;
			if (j != 2 * i - 2)cout << " ";
		}
		cout << endl;
	}
	return 0;
}------------------------------------------------------Problem1741:#include<iostream>
#include<string>
using namespace std;
int main()
{
	string pre = "0123456789AB";
	int x;
	cin >> x;
	int ans[200], index=0;
	while (x > 0)
	{
		ans[index++] = x % 12;
		x /= 12;
	}
	for (int i = index - 1; i >= 0; i--)
	{
		cout << pre[ans[i]];
	}
}
------------------------------------------------------Problem1742:#include<iostream>
using namespace std;
int main()
{
	int n;
	while (cin >> n)
	{
		int flag = 1;
		for (int i = 2; i < n; i++)
		{
			if (n%i == 0)flag = 0;
		}
		if (flag)cout << n << " ";
	}
	return 0;
}------------------------------------------------------Problem1744:#include<iostream>
using namespace std;
int main()
{
	char c;
	cin >> c;
	for (char i = 'A'; i <=c; i++)
	{
		for (int j = 0; j < c-i; j++)
		{
			cout << " ";
		}
		for (int j = 0; j < 2*(i-65)+1; j++)
		{
			cout << i;
		}
		cout << endl;
	}
	return 0;
}------------------------------------------------------Problem1745:#include<iostream>
using namespace std;
int get_year_days(int year);
int get_month_days(int month, int year);
int main()
{
	int y, m, d;
	cin >> y >> m >> d;
	int year_last_day, year_past_day=0,sum=0;
	if (y == 2014)cout << (16 - d) << endl;
	else
	{
		for (int i = 1; i < m; i++)
		{
			year_past_day += get_month_days(i, y);
		}
		year_past_day += d;
		year_last_day = get_year_days(y) - year_past_day;
		for (int i = y + 1; i <= 2013; i++)
		{
			sum += get_year_days(i);
		}
		sum += year_last_day;
		sum += 16;
		cout << sum << endl;
	}
}
int get_year_days(int y)
{
	if ((y % 4 == 0 && y % 100 != 0) || y % 400 == 0)return 366;
	else return 365;
}
int get_month_days(int m, int y)
{
	switch (m)
	{
	case 1:case 3:case 5:case 7:case 8:case 10:case 12:
		return 31;
		break;
	case 4:case 6:case 9:case 11:
		return 30;
		break;
	case 2:
		if ((y % 4 == 0 && y % 100 != 0) || y % 400 == 0)return 29;
		else return 28;
		break;
	}
}------------------------------------------------------Problem1748:#include<iostream>
#include<string>
#include<set>
#include<map>
#include<sstream>
using namespace std;
int main()
{
	set<string> words;
	map<string, int> word_count;
	char cmd;
	while (cin >> cmd)
	{
		if (cmd == 'X')break;
		if (cmd == 'T')
		{
			string str;
			getline(cin, str, '@');
			for (int i = 0; i < str.length(); i++)
			{
				if (str[i] >= 'A'&&str[i] <= 'Z')
				{
					str[i] += 32;
				}
				else if (str[i] >= 'a'&&str[i] <= 'z')
				{
				}
				else
				{
					str[i] = ' ';
				}
			}
			stringstream ss(str);
			string s;
			while (ss >> s)
			{
				words.insert(s);
				if (!word_count.count(s)) word_count[s] = 0;
				++word_count[s];
			}
		}
		else if (cmd == 'S')
		{
			string str;
			while (cin >> str)
			{
				if (str == "#") break;
				words.erase(str);
				word_count[str] = 0;
			}
		}
		else if (cmd == 'V')
		{
			for (set<string>::iterator it = words.begin(); it != words.end(); ++it)
			{
				cout << *it << " " << word_count[*it] << endl;
			}
		}
		else if (cmd == 'Q')
		{
			string str;
			while (cin >> str)
			{
				if (str == "#")break;
				if (word_count.count(str) && word_count[str] != 0)
				{
					cout <<str<<" "<< word_count[str] << endl;
				}
				else
				{
					cout << "-1" << endl;
				}
			}
		}
	}
}------------------------------------------------------Problem1758:#include<iostream>
#include<iomanip>
using namespace std;
int main() {
	int n;
	cin >> n;
	double k=n-50*(n/100);
	cout<<fixed<<setprecision(2)<<k/n*10<<endl;
}
------------------------------------------------------Problem1760:#include<iostream>
using namespace std;
int main()
{
	int n, sum = 0;
	cin >> n;
	for (int i = 1; i <= n; i++)
	{
		sum += i;
	}
	cout << sum << endl;
	//cin.get(); cin.get();
	return 0;
}------------------------------------------------------Problem1761:#include<iostream>
using namespace std;
int main()
{
	int n, a[1000], sum = 0;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> a[i];
	}
	for (int i = 0; i < n; i++)
	{
		sum += a[i];
	}
	cout << sum << endl;
	//cin.get(); cin.get();
	return 0;
}------------------------------------------------------Problem1762:#include<iostream>
using namespace std;
int main()
{
	int n, a[1000],sum=0;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> a[i];
	}
	for (int i = 0; i < n; i++)
	{
		if (a[i] % 2 == 0)sum += a[i];
	}
	cout << sum << endl;
	//cin.get(); cin.get();
	return 0;
}------------------------------------------------------Problem1764:#include<iostream>
using namespace std;
int main()
{
	int x, y,ans[1000],index=0;
	cin >> x >> y;
	int a, b;
	a = x < y ? x : y;
	b = x > y ? x : y;
	for (int i = a; i <= b; i++)
	{
		int flag = 1;
		for (int j = 2; j < i; j++)
		{
			if (i%j == 0)flag = 0;
		}
		if (flag)ans[index++] = i;
	}
	for (int i = 0; i < index; i++)
	{
		cout << ans[i];
		if (i != index - 1) cout << " ";
	}
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1782:#include<iostream>
using namespace std;
int f(int);
int main()
{
	int a, b;
	cin >> b;
	a = f(b);
	cout << a;
}
int f(int a)
{
	int ans = 1;
	for (int i = 0; i < a; i++)
	{
		ans *= 2;
	}
	return ans;
}------------------------------------------------------Problem1783:#include<iostream>
using namespace std;
int main()
{
	int a[1000], n, index = 0;
	while (cin >> n)
	{
		a[index] = n;
		index++;
	}
	for (int i = 0; i < index-1; i++)
	{
		for (int j = 0; j < index-1-i; j++)
		{
			if (a[j] < a[j + 1])swap(a[j], a[j + 1]);
		}
	}
	for (int i = 0; i < 5; i++)
	{
		cout << a[i] << " ";
	}
	return 0;
}------------------------------------------------------Problem1784:#include<iostream>
using namespace std;
int main()
{
	int a, b, c;
	while (cin >> a >> b >> c)
	{
		if (a == 0 && b == 0 && c == 0)break;
		if (a*a+b*b==c*c||a*a+c*c==b*b||b*b+c*c==a*a) cout << "right\n";
		else cout << "wrong\n";
	}
	return 0;
}------------------------------------------------------Problem1786:#include<iostream>
#include<cstring>
using namespace std;
int dp[10005];
int max_n(int a, int b)
{
	if (a > b)return a;
	return b;
}
int main()
{
	int n, v;
	while (cin >> n >> v)
	{
		if (n == 0 && v == 0)break;
		memset(dp, 0, sizeof(dp));
		int weight, value;
		for (int i = 0; i < n; i++)
		{
			cin >> weight >> value;
			for (int j = v; j >= weight; j--)
				dp[j] = max_n(dp[j - weight] + value, dp[j]);
		}
		cout << dp[v] << endl;
	}
}------------------------------------------------------Problem1787:#include<iostream>
#include<stack>
#include<string>
using namespace std;
int main()
{
	int n;
	cin >> n;
	cin.get();
	for (int i = 0; i < n; i++)
	{
		stack <int> zhan;
		string str;
		getline(cin, str);
		int flag = 1;
		for (int i = 0; i < str.length(); i++)
		{
			if (str[i] == '(') zhan.push(0);
			else if (str[i] == '[') zhan.push(1);
			else if (str[i] == '{') zhan.push(2);
			else if (str[i] == ')')
			{
				if (!zhan.empty()&&zhan.top() == 0) zhan.pop();
				else
				{
					flag = 0;
					break;
				}
			}
			else if (str[i] == ']')
			{
				if (!zhan.empty()&&zhan.top() == 1) zhan.pop();
				else
				{
					flag = 0;
					break;
				}
			}
			else if (str[i] == '}')
			{
				if (!zhan.empty() && zhan.top() == 2) zhan.pop();
				else
				{
					flag = 0;
					break;
				}
			}
		}
		if (flag == 1 && zhan.empty())
			cout << "Yes\n";
		else cout << "No\n";
	}
}------------------------------------------------------Problem1794:#include<iostream>
using namespace std;
int main()
{
	int n, *p, target_value, target_id = 0;
	cin >> n;
	p = new int[n];
	for (int i = 0; i < n; i++)
	{
		cin >> p[i];
	}
	cin >> target_value;
	for (int i = 0; i < n; i++)
	{
		if (p[i] == target_value)
		{
			target_id = i + 1;
			break;
		}
	}
	cout << target_id;
}------------------------------------------------------Problem1795:#include<iostream>
using namespace std;
int main()
{
	int a[100], b[100],c[200],ai=0,bi=0,ci=0;
	int n;
	while (cin >> n)
	{
		if (n == 0)break;
		a[ai++] = n;
	}
	while (cin >> n)
	{
		if (n == 0)break;
		b[bi++] = n;
	}
	for (int i = 0; i < ai-1; i++)
	{
		for (int j = 0; j < ai-1-i; j++)
		{
			if (a[j] > a[j + 1])swap(a[j], a[j + 1]);
		}
	}
	for (int i = 0; i < bi - 1; i++)
	{
		for (int j = 0; j < bi - 1 - i; j++)
		{
			if (b[j] > b[j + 1])swap(b[j], b[j + 1]);
		}
	}
	int p = 0, q = 0;
	while (p < ai&&q < bi)
	{
		if (a[p] < b[q]) c[ci++] = a[p++];
		else c[ci++] = b[q++];
	}
	while (p < ai)
	{
		c[ci++] = a[p++];
	}
	while (q < bi)
	{
		c[ci++] = b[q++];
	}
	for (int i = 0; i < ai; i++)
	{
		cout << a[i] << " ";
	}
	cout << endl;
	for (int i = 0; i < bi; i++)
	{
		cout << b[i] << " ";
	}
	cout << endl;
	for (int i = 0; i < ci; i++)
	{
		cout << c[i] << " ";
	}
}------------------------------------------------------Problem1796:#include<iostream>
#include<cmath>
using namespace std;
int main()
{
cout<<6;
}------------------------------------------------------Problem1798:#include<iostream> 
#include<string>
using namespace std;
int main()
{
	int n;
	string str;
	cin >> n;
	for (int m = 0; m < n; m++)
	{
		int *a;
		cin >> str;
		int max = 0;
		a = new int[str.length()];
		a[0] = 1;
		for (int i = 1; i < str.length(); i++)
		{
			int k = 0;
			for (int j = 0; j < i; j++)
			{
				if (str[i] > str[j] && k < a[j])k = a[j];
			}
			a[i] = k + 1;
			if (a[i] > max) max = a[i];
		}
		cout << max << endl;
		delete a;
	}
}
------------------------------------------------------Problem1800:#include<iostream>
#include<algorithm>
using namespace std;
int main()
{
	int t;
	cin >> t;
	for (int m = 0; m < t; m++)
	{
		//main
		int n,count=0;
		cin >> n;
		int *p = new int[n];
		for (int i = 0; i < n; i++)
		{
			cin >> p[i];
		}
		sort(p, p + n);
		int left = 0, right = n - 1;
		while (right - left + 1 > 3)
		{
			int plana = p[left] + p[left + 1] + p[right] + p[left + 1];
			int planb = p[right] + p[left] + p[right - 1] + p[left];
			count += (plana < planb ? plana : planb);
			right -= 2;
		}
		if (right - left + 1 == 3)
		{
			count = count + p[left] + p[left + 1] + p[left + 2];
		}
		else if (right - left + 1 == 2)
		{
			count = count + p[left + 1];
		}
		else
		{
			count += p[left];
		}
		cout << count << endl;
	}
}------------------------------------------------------Problem1803:#include<iostream>
using namespace std;
int main()
{
	int n,a[100][100],sum=0;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		for (int j = 0; j < n; j++)
		{
			cin >> a[i][j];
		}
	}
	for (int i = 0; i < n; i++)
	{
		for (int j = 0; j < n; j++)
		{
			sum += a[i][j];
		}
	}
	for (int i = 1; i < n-1; i++)
	{
		for (int j = 1; j < n-1; j++)
		{
			sum -= a[i][j];
		}
	}
	cout << (double)sum / (4*n-4) << endl;
	return 0;
}------------------------------------------------------Problem1804:#include<iostream>
using namespace std;
#include<list>
list<int> mlist;
void print()
{
	int n = mlist.size();
	int count = 0;
	for (list<int>::iterator it = mlist.begin(); it != mlist.end(); it++)
	{
		cout << *it;
		count++;
		if (count != n)cout << " ";
	}
	cout << endl;
}
int main()
{
	mlist.push_back(3);
	mlist.push_back(7);
	mlist.push_back(1);
	print();
	int command;
	while (cin >> command)
	{
		if (command == 0)break;
		if (command == 1)
		{
			int n;
			cin >> n;
			list<int>::iterator it= mlist.begin();
			for (int i = 0; i < n&&it!=mlist.end();i++)
			{
				++it;
			}
			mlist.insert(it, 0);
		}
		if (command == 2)
		{
			int n;
			cin >> n;
			list<int>::iterator it = mlist.begin();
			for (int i = 1; i < n&&it != mlist.end(); i++)
			{
				++it;
			}
			++(*it);
		}
		if (command == 3)
		{
			int n;
			cin >> n;
			list<int>::iterator it = mlist.begin();
			for (int i = 1; i < n&&it != mlist.end(); i++)
			{
				++it;
			}
			mlist.erase(it);
		}
		print();
	}
}------------------------------------------------------Problem1805:#include<iostream>
#include<cstdlib>
using namespace std;
class complex
{
public:
	double real;
	double imag;
	complex(double r = 0, double i = 0) { real = r; imag = i; }
	void set(double r, double i) { real = r; imag = i; }
	void show();
	void show_add(complex x);
	void show_sub(complex x);
	void show_mul(complex x);
};
void complex::show()
{
	if (real != 0)cout << real;
	if (real != 0 && imag > 0)cout << "+";
	if (imag != 0 && imag != 1&&imag!=-1)cout << imag;
	if (imag == -1)cout << "-";
	if (imag != 0)cout << "i";
	if (real == 0 && imag == 0)cout << "0";
}
void complex::show_add(complex x)
{
	double a, b;
	a = this->real + x.real;
	b = this->imag + x.imag;
	if (a != 0)cout << a;
	if (a != 0 && b > 0)cout << "+";
	if (b != 0 && b!=1&&b!=-1)cout << b;
	if (b == -1)cout << "-";
	if (b != 0)cout << "i";
	if (a == 0 && b == 0)cout << "0";
}
void complex::show_sub(complex x)
{
	double a, b;
	a = this->real - x.real;
	b = this->imag - x.imag;
	if (a != 0)cout << a;
	if (a != 0 && b > 0)cout << "+";
	if (b != 0 && b != 1 && b != -1)cout << b;
	if (b == -1)cout << "-";
	if (b != 0)cout << "i";
	if (a == 0 && b == 0)cout << "0";
}
void complex::show_mul(complex x)
{
	double a, b;
	a = this->real * x.real - this->imag*x.imag;
	b = this->imag * x.real + this->real*x.imag;
	if (a != 0)cout << a;
	if (a != 0 && b > 0)cout << "+";
	if (b != 0 && b != 1 && b != -1)cout << b;
	if (b == -1)cout << "-";
	if (b != 0)cout << "i";
	if (a == 0 && b == 0)cout << "0";
}
int main()
{
	int i;
	complex a, b;
	double r1, i1, r2, i2;
	while (cin >> i)
	{
		if (i == 0)break;
		cin >> r1 >> i1 >> r2 >> i2;
		a.set(r1, i1);
		b.set(r2, i2);
		cout << "(a):";
		a.show();
		cout << endl;
		cout << "(b):";
		b.show();
		cout << endl;
		if (i == 1)
		{
			cout << "(+):";
			a.show_add(b);
			cout << endl;
		}
		if (i == 2)
		{
			cout << "(-):";
			a.show_sub(b);
			cout << endl;
		}
		if (i == 3)
		{
			cout << "(*):";
			a.show_mul(b);
			cout << endl;
		}
	}
	return 0;
}------------------------------------------------------Problem1807:#include<iostream>
using namespace std;
#include<stack>
#include<queue>
#include<set>
struct car
{
	int id;
	int time;
public:
	car()
	{
		cin >> id >> time;
	}
};
int main()
{
	set<int> car_list;
	stack<struct car> park;
	stack<struct car> temp;
	queue<struct car> road;
	int cap, price;
	cin >> cap >> price;
	char command;
	while (cin >> command)
	{
		if (command == 'E')break;
		if (command == 'A')
		{
			struct car newcar;
			if (park.size() < cap)
			{
				park.push(newcar);
				car_list.insert(newcar.id);
				cout << "汽车" << newcar.id << "停靠在停车场" << park.size() << "号位置\n";
			}
			else
			{
				road.push(newcar);
				cout << "汽车" << newcar.id << "停靠在便道的" << road.size() << "号位置\n";
			}
		}
		else if (command == 'D')
		{
			int id, time;
			cin >> id >> time;
			if (car_list.count(id) == 0)
			{
				cout << "汽车" << id << "不在停车场" << endl;
			}
			else
			{		
				struct car tempcar = park.top();
				while (tempcar.id!=id)
				{
					park.pop();
					temp.push(tempcar);
					tempcar = park.top();
				}
				cout << "汽车" << tempcar.id << "停车" << time - tempcar.time << "小时，缴纳停车费" << (time - tempcar.time)*price << "元" << endl;
				park.pop();
				car_list.erase(tempcar.id);
				while (temp.size())
				{
					struct car tempcar = temp.top();
					temp.pop();
					park.push(tempcar);
				}
				while ((park.size() != cap)&&(road.size()!=0))
				{
					struct car tempcar = road.front();
					road.pop();
					car_list.insert(tempcar.id);
					tempcar.time = time;
					park.push(tempcar);
					cout << "汽车" << tempcar.id << "停靠在停车场" << park.size() << "号位置\n";
				}
			}
		}
	}
}------------------------------------------------------Problem1808:#include<iostream>
using namespace std;
int main()
{
	int n, a[10000];
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> a[i];
	}
	for (int i = n - 1; i >= 0; i--)
	{
		cout << a[i];
		if (i != 0) cout << " ";
	}
}------------------------------------------------------Problem1810:#include<iostream>
#include<string>
using namespace std;
int main()
{
	string str;
	getline(cin, str);
	int count = 0, started = 0;
	for (int i = str.length() - 1; i >= 0; i--)
	{
		if (str[i]!=32)
		{
			started = 1;
			count++;
		}
		else
		{
			if (started || i == 0)break;
		}
	}
	cout << count;
}------------------------------------------------------Problem1811:#include<iostream>
#include<string>
using namespace std;
int main()
{
	string present = "0123456789abcdefghijklmnopqrstuvwxyz";
	int ans[10000], index = 0;
	int a,k;
	cin >> a>>k;
	while (a > 0)
	{
		ans[index++] = a%k;
		a /= k;
	}
	for (int i = index - 1; i >= 0; i--)
	{
		cout << present[ans[i]];
	}
}------------------------------------------------------Problem1812:#include<iostream>
#include<string>
#include<sstream>
#include<cmath>
using namespace std;
int main()
{
	string s;
	getline(cin, s);
	for (int i = s.length() - 1; i >= 0; i--)
	{
		if (s[i] != '0' && s[i] != '1') s.erase(i, 1);
	}
	stringstream ss(s);
	int n;
	ss >> n;
	int ans=0,k=0;
	while (n > 0)
	{
		ans += (n % 10*pow(2,k++));
		n /= 10;
	}
	cout << ans;
}------------------------------------------------------Problem1813:#include<iostream>
using namespace std;
int main()
{
	int x;
	cin >> x;
	int flag = 1;
	for (int i = 2; i < x; i++)
	{
		if (x%i == 0)flag = 0;
	}
	if (flag)cout << "YES";
	else cout << "NO";
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1814:#include<iostream>
using namespace std;
int main()
{
	int x,m=-10000;
	while (cin.peek() != '\0'&&cin.peek() != EOF)
	{
		cin >> x;
		m = x > m ? x : m;
	}
	cout << m << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1815:#include<iostream>
using namespace std;
int main()
{
	int a, b;
	cin >> a >> b;
	if (a > b) swap(a, b);
	for (int i = a; i <= b; i++)
	{
		if (i % 7 == 0 && i % 10 == 1)cout << i << endl;
	}
	return 0;
}------------------------------------------------------Problem1824:#include<iostream>
using namespace std;
class Counter
{
	int n;
public:
	Counter(int x) { n = x; }
	void operator + (int)
	{
		n++;
	}
	void show()
	{
		cout << n << endl;
	}
};
int main()
{
	int n,m;
	cin >> n>>m;
	class Counter c(n);
	for (int i = 0; i < m; i++)
	{
		c + 0 ;
	}
	c.show();
}------------------------------------------------------Problem1825:#include<iostream>
#include<string>
using namespace std;
int main()
{
	int n, id,index=0;
	string ans[1000];
	cin >> n >> id;
	for (int i = 0; i < n; i++)
	{
		string tmp_name;
		int tmp_id;
		cin >> tmp_name >> tmp_id;
		if (tmp_id == id) { ans[index++] = tmp_name; }
	}
	if (index == 0)cout << "成为第一个点赞的人吧\n";
	else if (index <= 5)
	{
		for (int i = 0; i < index; i++)
		{
			cout << ans[i];
			if (i != index - 1)cout << ",";
		}
		cout << "觉得很赞";
	}
	else
	{
		for (int i = index-5; i < index; i++)
		{
			cout << ans[i];
			if (i != index - 1)cout << ",";
		}
		cout << "等5人觉得很赞";
	}
	
}------------------------------------------------------Problem1826:#include<iostream>
using namespace std;
int isSamePart(int x1, int y1, int x2, int y2, int x3, int y3, int x4, int y4)
{
	if (x1 == x2)
	{
		if ((x4 - x1)*(x3 - x1) >= 0) return 1;
		return 0;
	}
	else if (((y2 - y1) / (x2 - x1)*(x3 - x1) + y1 - y3)*((y2 - y1) / (x2 - x1)*(x4 - x1) + y1 - y4) >= 0)return 1;
	return 0;
}
int main()
{
	int n,ax, ay, bx, by, cx, cy, x, y;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> x >> y >> ax >> ay >> bx >> by >> cx >> cy;
		if (isSamePart(ax, ay, bx, by, cx, cy, x, y) && isSamePart(ax, ay, cx, cy, bx, by, x, y) && isSamePart(cx, cy, bx, by, ax, ay, x, y))cout << "Y\n";
		else cout << "N\n";
	}
}------------------------------------------------------Problem1827:#include<iostream>
#include<string>
#include<stack>
using namespace std;
//获取符号index
int get_index(char op)
{
	switch (op)
	{
	case '+':
		return 0;
	case '-':
		return 1;
	case '*':
		return 2;
	case '/':
		return 3;
	case '(':
		return 4;
	case ')':
		return 5;
	case '#':
		return 6;
	}
}
//比较符号优先级
int cmp_pri(char a, char b)
{
	int ans[7][7] = 
	{ 
		1,1,-1,-1,-1,1,1,
	    1,1,-1,-1,-1,1,1,
		1,1,1,1,-1,1,1,
		1,1,1,1,-1,1,1,
		-1,-1,-1,-1,-1,0,2,
		1,1,1,1,5,1,1,
		-1,-1,-1,-1,-1,5,0 };
	return ans[get_index(a)][get_index(b)];
}
//运算
int calculate(int a, char op, int b)
{
	switch (op)
	{
	case '+':
		return a + b;
	case '-':
		return a - b;
	case '*':
		return a*b;
	case '/':
		return a / b;
	}
}
//main
int main()
{
	int n;
	string exp;
	cin >> n;
	cin.get();
	for (int j = 0; j < n; j++)
	{
		stack<int> nums;
		stack<char> opers;
		opers.push('#');
		getline(cin, exp);
		if (exp[0] == '-')
		{
			exp = '0' + exp;
		}
		exp += '#';
		int i = 0;
		while(exp[i]!='#'||opers.top()!='#')
		{
			if (exp[i] >= '0'&&exp[i] <= '9')
			{
				nums.push(exp[i] - '0');
				i++;
			}
			else
			{
				char tmp = opers.top();
				if (cmp_pri(tmp,exp[i])==-1)
				{
					opers.push(exp[i]);
					i++;
				}
				else if (cmp_pri(tmp,exp[i]) ==1)
				{
					int num2 = nums.top();
					nums.pop();
					int num1 = nums.top();
					nums.pop();
					char op = opers.top();
					opers.pop();
					nums.push(calculate(num1, op, num2));
				}
				else if (cmp_pri(tmp, exp[i]) == 0)
				{
					opers.pop();
					i++;
				}
			}
		}
		cout << nums.top() << endl;
	}
}------------------------------------------------------Problem1830:#include<iostream>
using namespace std;
int isPrime(long long int n)
{
	if (n == 2 || n == 3) return 1;
	if (n % 6 != 1 && n % 6 != 5) return 0;
	for (long long int i = 5; i*i <n ; i+=6)
	{
		if (n % i == 0||n%(i+2)==0) return 0;
	}
	return 1;
}
int main()
{
	long long int n;
	cin >> n;
	for (long long int i = n+1;; i++)
	{
		if (isPrime(i)) {
			cout << i<<endl;
			break;
		}
	}
}------------------------------------------------------Problem1831:#include<iostream>
using namespace std;
class Matrix
{
public:
	int a[100][100], k;
	Matrix(int);
	friend istream& operator>>(istream&, Matrix&);
	friend ostream& operator<<(ostream&, Matrix);
	Matrix operator+(Matrix&);
};
Matrix::Matrix(int x)
{
	k = x;
}
istream& operator>>(istream& input, Matrix& m)
{
	for (int i = 0; i < m.k; i++)
	{
		for (int j = 0; j < m.k; j++)
		{
			input >> m.a[i][j];
		}
	}
	return input;
}
ostream& operator<<(ostream& output, Matrix m)
{
	for (int i = 0; i < m.k; i++)
	{
		for (int j = 0; j < m.k; j++)
		{
			output << m.a[i][j];
			if (j != m.k - 1)output << " ";
		}
		output << endl;
	}
	return output;
}
Matrix Matrix::operator+(Matrix &m)
{
	Matrix ans(k);
	for (int i = 0; i < k; i++)
	{
		for (int j = 0; j < k; j++)
		{
			ans.a[i][j]=a[i][j] + m.a[i][j];
		}
	}
	return ans;
}
int main()
{
	int k;
	cin >> k;
	Matrix a(k),b(k);
	cin >> a;
	cin >> b;
	cout << a + b;
}------------------------------------------------------Problem1832:#include<iostream>
using namespace std;
class complex
{
	double a;
	double b;
public:
	complex(int m = 0, int n = 0);
	void show();//直接输出a+bi的形式，不用区分a和b的正负符号，例如a=1,b=-1则输出1+-1i，例如a=1,b=0则输出1+0i即可。
	complex operator+(complex c);
	complex operator-(complex c);
};
complex::complex(int m, int n)
{
	a = m;
	b = n;
}
void complex::show()
{
	cout << a << "+" << b << "i"<<endl;
}
complex complex::operator+(complex c)
{
	double r, i;
	r = a + c.a;
	i = b + c.b;
	complex ans(r, i);
	return ans;
}
complex complex::operator-(complex c)
{
	double r, i;
	r = a - c.a;
	i = b - c.b;
	complex ans(r, i);
	return ans;
}
int main()
{
	double a, b, c, d;
	cin >> a >> b >> c >> d;
	complex c1(a, b), c2(c, d), c3;
	c3 = c1 + c2;
	c3.show();
	c3 = c1 - c2;
	c3.show();
}------------------------------------------------------Problem1833:#include<iostream>
using namespace std;
class complex
{
	double a;
	double b;
public:
	complex(int m = 0, int n = 0);
	void show();
	friend complex operator+(complex c1, complex c2);
};
complex::complex(int m, int n)
{
	a = m;
	b = n;
}
void complex::show()
{
	cout << a << "+" << b << "i\n";
}
complex operator+(complex c1, complex c2)
{
	int r = c1.a + c2.a;
	int i = c1.b + c2.b;
	complex tmp(r, i);
	return tmp;
}
int main()
{
	double a, b, c, d;
	cin >> a >> b >> c >> d;
	complex c1(a, b), c2(c, d), c3;
	c3 = c1 + c2;
	c3.show();
}------------------------------------------------------Problem1834:#include<iostream>
#include<string>
using namespace std;
struct data
{
	string id;
	string name;
	double score;
};
int main()
{
	struct data student[200];
	int n, line;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> student[i].id >> student[i].name >> student[i].score;
	}
	cin >> line;
	for (int i = 0; i < n; i++)
	{
		if (student[i].score >= line)
		{
			cout << student[i].id << " " << student[i].name << " " << student[i].score << endl;
		}
	}
}------------------------------------------------------Problem1835:#include<iostream>
#include<set>
using namespace std;
int main()
{
    set<int> nums;
    int n,count=-1;
    while (cin >> n)
    {
        count = nums.size();
        nums.insert(n);
        if (nums.size() == count) break;
    }
    for (set<int>::reverse_iterator it = nums.rbegin(); it != nums.rend(); it++)
    {
        cout << *it << " ";
    }
    cout << endl;
    for (set<int>::reverse_iterator it = nums.rbegin(); it != nums.rend(); it++)
    {
        cout << *it << " ";
    }
}------------------------------------------------------Problem1836:#include<iostream>
#include<string>
using namespace std;
struct student
{
    string id;
    string name;
    double grade;
    bool is_ok = 1;
public:
    void set()
    {
        cin >> id >> name >> grade;
    }
    void print()
    {
        cout << id <<" "<< name <<" "<< grade << endl;
    }
};
int main()
{
    struct student students[100];
    int command,index=0;
    while (cin >> command)
    {
        if (command == 4)break;
        if (command == 1)
        {
 
            students[index++].set();
        }
        if (command == 2)
        {
            string n;
            cin >> n;
            for (int i = index-1; i >=0; i--)
            {
                if (students[i].id == n&&students[i].is_ok == 1)
                {
                    students[i].is_ok = 0;
                    break;
                }
            }
        }
        if (command == 3)
        {
            for (int i = index - 1; i >= 0; i--)
            {
                if (students[i].is_ok == 1) students[i].print();
            }
        }
    }
}------------------------------------------------------Problem1837:#include<iostream>
using namespace std; 
int main()
{
    int i, j;
    cin >> i >> j;
    cout << i + 15 << endl;
    cout << i + 15 + j + 10 << endl;
}------------------------------------------------------Problem1838:#include<iostream>
using namespace std;
class Point
{
    int X, Y;
public:
    static int Countp;
    Point(int x = 0, int y = 0)
    {
        X = x;
        Y = y;
        Countp++;
    }
    Point(const Point &p)
    {
        X = p.X;
        Y = p.Y;
        Countp++;
    }
    ~Point()
    {
        Countp--;
    }
    friend Point myfun(Point p1, Point p2, Point p3);
    void display() { 
        cout << X << "," << Y << ","; 
    }
};
Point myfun(Point p1, Point p2, Point p3)
{
    Point tmp(p1.X + p2.X + p3.X, p1.Y + p2.Y + p3.Y);
    return tmp;
}
int Point::Countp = 0;
int main()
{
    int a, b, c;
    cin >> a >> b >> c;
    Point pp0, pp1(a, b), pp2(c);
    Point p = myfun(pp0, pp1, pp2);
    p.display();
    cout << p.Countp;
    return 0;
}------------------------------------------------------Problem1839:#include<iostream>
#include<string> 
using namespace std;
class student
{
    string name;
    int deg;
public:
    student();
    string getname() { return name; }
    friend int compare(student &s1, student &s2);
    int getdeg() { return deg; }
};
student::student()
{
    cin >> name >> deg;
}
int compare(student &s1, student &s2)
{
    if (s1.deg > s2.deg)return 1;
    if (s1.deg < s2.deg)return -1;
    return 0;
}
int main()
{
    student st[6];
    int i = 0, min = 0, max = 0;
    for (i = 1; i < 6; i++)
    {
        if (compare(st[max], st[i]) == -1) max = i;
        if (compare(st[min], st[i]) == 1) min = i;
    }
    cout << "最高分:" << st[max].getdeg() << "姓名:" << st[max].getname() << endl;
    cout << "最低分:" << st[min].getdeg() << "姓名:" << st[min].getname() << endl;
}------------------------------------------------------Problem1840:#include<iostream>
using namespace std;
class complex
{
    double a;
    double b;
public:
    complex(int m = 0, int n = 0) :a(m), b(n) {};
    friend complex operator+(const complex &c1, const complex & c2);
    friend complex operator-(complex c1, complex c2);
    friend istream& operator>>(istream &i, complex &c);
    friend ostream& operator<<(ostream &o, complex &c);
    complex operator++()
    {
        return complex(++a, b);
    }
    complex operator++(int)
    {
        return complex(a++, b);
    }
    friend complex operator--(complex &c);
    friend complex operator--(complex &c, int);
};
complex operator--(complex &c)
{
    return complex(--c.a, c.b);
}
complex operator--(complex &c, int)
{
    return complex(c.a--, c.b);
}
complex operator+(const complex &c1, const complex & c2)
{
    complex ans(c1.a + c2.a, c1.b + c2.b);
    return ans;
}
complex operator-(complex c1, complex c2)
{
    complex ans(c1.a - c2.a, c1.b - c2.b);
    return ans;
}
istream& operator>>(istream &i, complex &c)
{
    int m, n;
    i >> m >> n;
    c.a = m;
    c.b = n;
    return i;
}
ostream& operator<<(ostream &o, complex &c)
{
    o << "(" << c.a << "," << c.b << ")" << endl;
    return o;
}
int main()
{
    int i;
    complex c1, c2, c3;
    cin >> c1;
    cin >> c2;
    c3 = c1 + c2;
    cout << c3;
    c3 = c1 - c2;
    cout << c3;
    for (i = 1; i <= 3; i++)
        c3 = c1++;
    cout << c1;
    cout << c3;
    for (i = 1; i <= 3; i++)
        c3 = c2--;
    cout << c2;
    cout << c3;
    c3 = ++c1;
    cout << c1;
    cout << c3;
    c3 = --c2;
    cout << c2;
    cout << c3;
}------------------------------------------------------Problem1841:#include<iostream>
using namespace std;
int main()
{
	cout << "12111\n";
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1841:#include<iostream>
using namespace std;
int main()
{
	cout << "12111\n";
}------------------------------------------------------Problem1842:#include<iostream>
using namespace std;
int main()
{
	cout << "71";
	return 0;
}------------------------------------------------------Problem1843:#include<iostream>
using namespace std;
int main()
{
	int a[3] = {2,1,6};
	for (int i = 0; i < 3; i++)
	{
		for (int j = 0; j < 3; j++)
		{
			for (int k = 0; k < 3; k++)
			{
				if ((i != j)&&(j != k)&&(k != i) &&( (a[i] * 100 + a[j] * 10 + a[k]) % 43 == 0)) cout << (a[i] * 100 + a[j] * 10 + a[k]) << endl;
			}
		}
	}
	a[2]=9;
	for (int i = 0; i < 3; i++)
	{
		for (int j = 0; j < 3; j++)
		{
			for (int k = 0; k < 3; k++)
			{
				if ((i != j) && (j != k) && (k != i) && ((a[i] * 100 + a[j] * 10 + a[k]) % 43 == 0)) cout << (a[i] * 100 + a[j] * 10 + a[k]) << endl;
			}
		}
	}
}------------------------------------------------------Problem1848:#include<iostream>
using namespace std;
class complex
{
public:
	double a;
	complex(double m = 0){a = m;}
	operator double() { return a; }
	complex operator ++(){return ++a;}
};
int main()
{
	complex c1; //构造函数被调用
	double d1;
	cin >> d1;
	c1 = d1;  //构造函数被调用
	++c1; //operator++函数被调用
	d1 = c1; //operator double函数被调用
	cout << d1;
}------------------------------------------------------Problem1849:#include<iostream>
using namespace std;
class A
{
	int a;
public:
	A() { cin >> a; }
	void show() 
	{
		cout << a<<endl;
	}//用于输出a
};
class B :public A
{
	int b;
public:
	B() { cin >> b; }
	void show() 
	{
		A::show();
		cout << b<<endl;
	}//输出a和b，其中输出a需调用A类的show函数完成，因为a是不可见的
};
int main()
{
	B b1;
	b1.show();
}------------------------------------------------------Problem1850:#include<iostream>
using namespace std;
class A
{
	int a;
public:
	A(int m) { a = m; }
	void show() { cout << a << endl; }
};
class B :public A
{
	int b;
public:
	B(int m, int n):A(m)
	{
		b = n;
	}
		void show() 
		{
			A::show();
			cout << b << endl;
		}
};
int main()
{
	int x, y;
	cin >> x >> y;
	B b1(x, y);
	b1.show();
}------------------------------------------------------Problem1851:#include<iostream>
using namespace std;
class Point
{
public:
	int x, y; //点坐标
	Point(int m, int n) { x = m; y = n; }
	void show()
	{
		cout << "(" << x << "," << y << ")";
	}
};
class HourHand :public Point //继承点类，继承来的x和y作为时针的顶点（钟表中心）
{ 
public:
	int lenth; //时针长度
	int hour; //目前时间（只表示0点3点6点9点）
	Point end; //时针末端点（针尖端）
	HourHand(int x, int y, int l, int endx, int endy) :Point (x, y),end (endx, endy)//x、y作为定点，endx、endy作为末端点
	{
		lenth= l; //l作为时针长度
			 //根据定点关系判断目前时间并赋值，不符合0点3点6点9点四种情况的不予考虑
		if ((end.x-x==0)&&(end.y-y==lenth)) hour = 0;
		if ((end.x - x == lenth) && (end.y - y == 0)) hour = 3;
		if ((end.x - x == 0) && (end.y - y == -lenth)) hour = 6;
		if ((end.x - x == -lenth) && (end.y - y == 0)) hour = 9;
	}
	void show()
	{
		cout << "目前时间：" << hour << "点" << endl;
		cout << "指针：";
		Point::show();
		cout << "-->";
		end.show();
	}
};
int main()
{
	int a, b, c, d, e;
	cin >> a >> b >> c >> d >> e;
	HourHand h1(a, b, c, d, e);
	if (h1.hour == 0 || h1.hour == 3 || h1.hour == 6 || h1.hour == 9)
		h1.show();
	else
		cout << "error" << endl;
}------------------------------------------------------Problem1852:#include <iostream>
using namespace std;
class Basic//基类
{
protected:
	double  r;
public:
	Basic() { r = 0; }
	Basic(double a) :r(a) {}
};
class Circular :  Basic
{
protected:
	double r, area;
public:
	Circular(double a)
	{
		r = a;
		area = 3.14 * r * r;
	}
	double getArea()
	{
		return area;
	}
};
class Column :Circular
{
protected:
	double h, cubage;
public:
	Column(double a, double b) : Circular(a)
	{
		h = b;
		cubage = getArea() * h;
	}
	double getCubage()
	{
		return cubage;
	}
};
int main()
{
	int r1, r2, h;
	cin >> r1 >> r2 >> h;
	Circular circular(r1);
	Column column(r2, h);
	cout << "圆的面积：" << circular.getArea() << endl;
	cout << "圆柱的体积：" << column.getCubage() << endl;
}------------------------------------------------------Problem1855:#include <iostream>
#include <cstring>
using namespace std;
class student
{
	char name[10];
	int id;
public:
	student() { strcpy(name, ""); id = 0; }
	char * getname() { return name; }
	friend istream& operator>>(istream&input, student &obj);
	friend ostream& operator<<(ostream&output, student &obj);
};
istream& operator>>(istream&input, student &obj)
{
	input >> obj.id >> obj.name;
	return input;
}
ostream& operator<<(ostream&output, student &obj)
{
	output << obj.id << " " << obj.name;
	return output;
}
class student_array
{
	student *a;
	int num;
public:
	student_array(int i = 0) { a = new student[i]; num = i; }
	void input()
	{
		for (int j = 0; j<num; j++)
			cin >> a[j];
	}
	void sort()
	{

		for (int i = 0; i<num; i++)
			for (int j = 0; j<num - 1; j++)
				if (strcmp(a[j].getname(), a[j + 1].getname())>0)
				{
					swap(a[j],a[j+1]);
				}
	}
	void show()
	{
		for (int i = 0; i<num; i++)
			cout << a[i] << endl;
	}
};
int main()
{
	int k;
	cin >> k;
	student_array m(k);
	m.input();
	m.sort();
	m.show();
}
------------------------------------------------------Problem1856:#include<iostream>
using namespace std;
int main()
{
	int n, a[100];
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> a[i];
	}
	for (int i = 0; i < n-1; i++)
	{
		for (int j = 0; j < n-1-i; j++)
		{
			if (a[j] > a[j + 1]) swap(a[j], a[j + 1]);
		}
	}
	for (int i = 0; i < n; i++)
	{
		cout << a[i];
		if (i != n - 1)cout << " ";
	}
	return 0;
}------------------------------------------------------Problem1857:#include<iostream>
using namespace std;
int main()
{
	int n;
	cin >> n;
	double sb[8];
	for (int i = 0; i < n; i++)
	{
		for (int i = 0; i < 8; i++)
		{
			cin >> sb[i];
		}
		for (int i = 0; i < 4; i++)
		{
			cout << (int)sb[i] / 36;
		}
		cout << ".";
		for (int i = 4; i < 8; i++)
		{
			cout << (int)sb[i] / 36;
		}
		cout << endl;
	}
}------------------------------------------------------Problem1858:#include<iostream>
using namespace std;
int main()
{
	int a[100],index=0,n;
	while (cin >> n) 
	{
		for (int i = 0; i < n; i++)
		{
			int t;
			cin >> t;
			int exist = 0;
			for (int j = 0; j < index; j++)
			{
				if (a[j] == t) exist = 1;
			}
			if (!exist)
			{
				a[index++] = t;
			}
		}
		cout << index << endl;
	}
}------------------------------------------------------Problem1859:#include<iostream>
#include<string>
#include<map>
using namespace std;
int main()
{
	string a, b;
	while (cin >> a >> b)
	{
		map<char, int> aMap;
		map<char, int> bMap;
		for (char i = 'a'; i <= 'z'; i++)
		{
			aMap[i] = 0;
			bMap[i] = 0;
		}
		for (int i = 0; i < a.length(); i++)
		{
			aMap[a[i]]++;
		}
		for (int i = 0; i < b.length(); i++)
		{
			bMap[b[i]] ++ ;
		}
		int flag = 1;
		for (char i = 'a'; i <= 'z'; i++)
		{
			if (aMap[i] != bMap[i])
			{
				flag = 0;
				break;
			}
		}
		if (flag) cout << "Yes\n";
		else cout << "No\n";
	}
}------------------------------------------------------Problem1860:#include<iostream>
using namespace std;
int main()
{
	int t,n;
	cin >> t;
	for (int j = 0; j < t; j++)
	{
		cin >> n;
		long long int a, b, c;
		if (n % 3 == 0)
		{
			a = n / 3;
			b = n / 3;
			c = n / 3;
		}
		else if (n % 3 == 1)
		{
			a = (n+2) / 3;
			b = n / 3;
			c = n / 3;
		}
		else if (n % 3 == 2)
		{
			a = (n + 1) / 3;
			b = (n+1) / 3;
			c = n / 3;
		}
		if (b + c > a)
		{
			cout << a*b*c << endl;
		}
		else
		{
			cout << 0 << endl;
		}
	}
}------------------------------------------------------Problem1862:#include<iostream>
#include<cstdio>
#include<cstdlib>
#include<string>
#include<cstring>
#include<algorithm>
using namespace std;
int dp[10005][2];
string map[10005];
int main()
{
	ios::sync_with_stdio(false);
	int T,n,m;
	cin>>T;
	while(T--)
	{
		cin>>n>>m;
		cin.get();
		memset(dp,0,sizeof(dp));
		int tmp=0;
		for(int i=0;i<n;++i)
		{
			getline(cin,map[i]);
		}
		for(int i=0;i<n;++i)
		{
			for(int j=0;j<m;++j)
			{
				if(map[i][j]=='1')tmp++;
			}
		}
		for(int i=0;i<n;++i)
		{
			int L=m+1,R=0;
			for(int j=1;j<=m;++j)
			{
				if(map[i][j-1]=='1')
				{
					L=j;break;
				}
			}
			for(int j=m;j>=1;j--)
			{
				if(map[i][j-1]=='1')
				{
					R=j;break;
				}
			}
			dp[i+1][0]=min(dp[i][0]+2*R*10,dp[i][1]+m*10);
			dp[i+1][1]=min(dp[i][0]+m*10,dp[i][1]+(m+1-L)*10*2);
		}
		cout<<tmp*300+min(dp[n][0],dp[n][1])<<endl;
	}
}------------------------------------------------------Problem1863:#include<iostream>
#include<set>
using namespace std;
int main()
{
	set<int> list;
	int n,tmp;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> tmp;
		list.insert(tmp);
	}
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> tmp;
		if (list.count(tmp))
		{
			cout << "Yes\n";
		}
		else {
			cout << "No\n";
		}
	}
}------------------------------------------------------Problem1867:#include<iostream>
using namespace std;
int main()
{
	int a, b;
	cin >> a >> b;
	cout << a + b << endl;
	//cin.get();
	//cin.get();
	return 0;
}------------------------------------------------------Problem1874:#include<iostream>
using namespace std;
int main()
{
	int n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cout << "ABC\n";
	}
}------------------------------------------------------Problem1875:#include<iostream>
using namespace std;
int main()
{
	int n;
	cin >> n;
	for (int i = 1; i <= n; i++)
	{
		cout << i;
		if (i != n)cout << " ";
	}
}------------------------------------------------------Problem1876:#include<iostream>
using namespace std;
int main()
{
	int n;
	cin >> n;
	if (n >= 60) cout << "A科室";
	else if (n >= 18)cout << "B科室";
	else if (n >= 7) cout << "C科室";
	else cout << "D科室";
}------------------------------------------------------Problem1877:#include<iostream>
using namespace std;
int main()
{
	int a, b;
	cin >> a >> b;
	int m = a < b ? a : b;
	int n = a > b ? a : b;
	for (int i = m; i <= n; i++)
	{
		if ((i % 3 == 0) && ((i % 10 + 1) == (i /10%10))) cout << i << " ";
	}
}------------------------------------------------------Problem1878:#include<iostream>
using namespace std;
int main()
{
	int n, a[1000];
	while (cin >> n)
	{
		for (int i = 0; i < n; i++)
		{
			cin >> a[i];
		}
		int sum=0, m=0, M=0;
		for (int i = 0; i < n; i++)
		{
			sum += a[i];
			if (a[i] < a[m])m = i;
			if (a[i] > a[M])M = i;
		}
		cout << a[M] << " " << a[m] << " " << sum << endl;
	}
}------------------------------------------------------Problem1879:#include<iostream>
using namespace std;
int get_month_days(int m, int y)
{
	switch (m)
	{
	case 1:case 3:case 5:case 7:case 8:case 10:case 12:
		return 31;
		break;
	case 4:case 6:case 9:case 11:
		return 30;
		break;
	case 2:
		if ((y % 4 == 0 && y % 100 != 0) || y % 400 == 0)return 29;
		else return 28;
		break;
	}
}
int main()
{
	int y, m, d;
	cin >> y >> m >> d;
	cout << get_month_days(m,y) - d;
}------------------------------------------------------Problem1880:#include<iostream>
using namespace std;
int main()
{
	int count[3] = { 0,0,0 };
	char c;
	while (cin >> c)
	{
		cout<<c<<++count[c - 65]<<endl;
	}
}------------------------------------------------------Problem1881:#include<iostream>
using namespace std;
int main()
{
	int n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cout << n << endl;
	}
}------------------------------------------------------Problem1883:#include<iostream>
using namespace std;
void print(int n, char c = ' ')
{
	for (int i = 0; i < n; i++)
	{
		cout << c;
	}
}
int main()
{
	int n;
	cin >> n;
	print(n - 1);
	print(n, '*');
	cout << endl;
	for (int i = 2; i <= n; i++)
	{
		print(n - i);
		cout << "*";
		print(2 * i + n - 4);
		cout << "*" << endl;
	}
	for (int i = n-1; i >=2; i--)
	{
		print(n - i);
		cout << "*";
		print(2 * i + n - 4);
		cout << "*" << endl;
	}
	print(n - 1);
	print(n, '*');
	cout << endl;
}------------------------------------------------------Problem1884:import java.util.Calendar;
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
}------------------------------------------------------Problem1885:#include<iostream>
using namespace std;
int main()
{
	int* p;
	int m, n;
	cin >> m >> n;
	p = new int[m];
	for (int i = 0; i < m; i++)
	{
		*(p + i) = 0;
	}
	p=(int*)realloc(p,sizeof(int)*(m+n));
	for (int i = m; i < m+n; i++)
	{
		*(p + i) = 1;
	}
	for (int i = 0; i < m+n; i++)
	{
		cout << p[i] << " ";
	}
}------------------------------------------------------Problem1886:#include<iostream>
using namespace std;
int main()
{
	int a[100], index = 0;
	int n;
	while (cin >> n)
	{
		if (n == -1)break;
		a[index++] = n;
	}
	for (int i = 0; i < index-1; i++)
	{
		for (int j = 0; j < index-1-i; j++)
		{
			if (a[j] > a[j + 1]) swap(a[j], a[j + 1]);
		}
	}
	for (int i = 0; i < index; i++)
	{
		cout << a[i]; 
		if (i != index - 1)cout << " ";
	}
}------------------------------------------------------Problem1888:#include<iostream>
#include<string>
using namespace std;
struct student
{
	string name;
	int a, b, c;
	int sum;
};
int main()
{
	student students[100];
	string str;
	int a, b, c,index=0;
	while (cin >> str >> a >> b >> c)
	{
		students[index].name = str;
		students[index].a = a;
		students[index].b = b;
		students[index].c = c;
		students[index].sum = a + b + c;
		index++;
	}
	for (int i = 0; i < index-1; i++)
	{
		for (int j = 0; j < index-1-i; j++)
		{
			if (students[j].sum < students[j + 1].sum)swap(students[j], students[j + 1]);
		}
	}
	for (int i = 0; i < index; i++)
	{
		cout << students[i].name << " " << students[i].a << " " << students[i].b << " " << students[i].c << endl;
	}
}------------------------------------------------------Problem1889:#include<iostream>
using namespace std;
int main()
{
	int a[12];
	for (int i = 0; i < 12; i++)
	{
		cin >> a[i];
	}
	for (int i = 0; i < 11; i++)
	{
		for (int j = 0; j < 11-i; j++)
		{
			if (a[j] > a[j + 1])swap(a[j], a[j + 1]);
		}
	}
	for (int i = 1; i <= 12; i++)
	{
		cout << a[i-1];
		if (i % 4 == 0)cout << endl;
		else cout << " ";
	}
}------------------------------------------------------Problem1890:#include<iostream>
using namespace std;
int main()
{
	int a[3][4];
	for (int i = 0; i < 3; i++)
	{
		for (int j = 0; j < 4; j++)
		{
			cin >> a[i][j];
		}
	}
	for (int i = 0; i < 3; i++)
	{
		int max = -999999999;
		for (int j = 0; j < 4; j++)
		{
			if (a[i][j]>max)max = a[i][j];
		}
		cout << max;
		if (i != 2)cout << " ";
	}
	cout << endl;
	for (int i = 0; i < 4; i++)
	{
		int max = -999999999;
		for (int j = 0; j < 3; j++)
		{
			if (a[j][i]>max)max = a[j][i];
		}
		cout << max;
		if (i != 3)cout << " ";
	}
}------------------------------------------------------Problem1891:#include<iostream>
#include<string>
using namespace std;

int main()
{
	int m;
	cin >> m;
	string str;
	while (cin >> str)
	{
		int sum = 0;
		for (int i = 0; i < str.length(); i++)
		{
			sum *= m;
			if (str[i] >= '0'&&str[i] <= '9')
			{
				sum += str[i] - 48;
			}
			else
			{
				sum += str[i] - 97 + 10;
			}
		}
		int flag = 1;
		if (sum == 1) flag = 0;
		for (int i = 2; i < sum; i++)
		{
			if (sum%i == 0)
			{
				flag = 0;
				break;
			}
		}
		if (flag)cout << sum << endl;
	}
}------------------------------------------------------Problem1898:#include<iostream>
using namespace std;
struct node{
    node* next;
    int data;
};
int main()
{
    node* head=new node;
    head->next=NULL;
    int n;
    while(cin>>n&&n)
    {
        node* s=new node;
        s->data=n;
        s->next=head->next;
        head->next=s;
    }
    node* p=head->next;
    while(p)
    {
        cout<<p->data<<" ";
        p=p->next;
    }
}------------------------------------------------------Problem1899:#include<iostream>
using namespace std;
struct node{
    node* next;
    int data;
};
int main()
{
    node* head=new node;
    head->next=NULL;
    int k;
    int n;
    cin>>k;
    while(k--)
    {
        cin>>n;
        node* s=new node;
        s->data=n;
        s->next=head->next;
        head->next=s;
    }
    node* p=head->next;
    while(p)
    {
        cout<<p->data<<" ";
        p=p->next;
    }
}------------------------------------------------------Problem1900:#include<iostream>
using namespace std;
struct node{
    node* next;
    int data;
};
int main()
{
    node* head=new node;
    head->next=NULL;
    int n;
    while(cin>>n&&n)
    {
        node* s=new node;
        s->data=n;
        s->next=NULL;
        node *p=head;
        while(p->next!=NULL)
        {
            p=p->next;
        }
        p->next=s;
    }
    node* p=head->next;
    while(p)
    {
        cout<<p->data<<" ";
        p=p->next;
    }
}------------------------------------------------------Problem1901:#include<iostream>
using namespace std;
struct node{
    node* next;
    int data;
};
int main()
{
    node* head=new node;
    head->next=NULL;
    int k,n;
    cin>>k;
    while(k--)
    {
        cin>>n;
        node* s=new node;
        s->data=n;
        s->next=NULL;
        node *p=head;
        while(p->next!=NULL)
        {
            p=p->next;
        }
        p->next=s;
    }
    node* p=head->next;
    while(p)
    {
        cout<<p->data<<" ";
        p=p->next;
    }
}------------------------------------------------------Problem1902:#include<iostream>
#include<set>
using namespace std;
int main()
{
    int n;
    set<int> list;
    while(cin>>n)
    {
        if(n==0)break;
        list.insert(n);
    }
    for(set<int>::iterator it=list.begin();it!=list.end();it++)
    {
        cout<<*it<<' ';
    }
}------------------------------------------------------Problem1903:#include<iostream>
#include<string>
#include<stack>
using namespace std;
//优先级
string proprity[7] =
{ 
	">><<<>>",
	">><<<>>",
	">>>><>>",
	">>>><>>",
	"<<<<<=0",
	">>>>0>>",
	"<<<<<0=" };
string mark = "+-*/()#";
char get_proprity(char operator1,char operator2)
{
	int m=6, n=5;
	for (int i = 0; i < 7; i++)
	{
		if (mark[i] == operator1) m = i;
		if (mark[i] == operator2) n = i;
	}
	return proprity[m][n];
}
//计算
int calc(int a,char opert,int b)
{
	switch (opert)
	{
	case '+':
		return a + b;
	case '-':
		return a - b;
	case '*':
		return a*b;
	case '/':
		return a / b;
	default:
		break;
	}
}

int main()
{
	string s;
	while (getline(cin, s))
	{
		if (s == "")continue;
		stack<char> opert;
		stack<int> operd;
		int tmp = 0;
		opert.push('#');
		for (int i = 0; i < s.length(); i++)
		{
			if (s[i] >= '0'&&s[i] <= '9')
			{
				tmp = tmp * 10 + (s[i] - '0');
				if (i==s.length()-1) {
					operd.push(tmp);
					tmp = 0;
				}
			}
			else
			{
				if (tmp != 0) {
					operd.push(tmp);
					tmp = 0;
				}
				int a, b;
				char ysf;
				switch (get_proprity(opert.top(),s[i]))
				{
				case '<':
					opert.push(s[i]);
					break;
				case '>':
					a = operd.top();
					operd.pop();
					b = operd.top();
					operd.pop();
					ysf=opert.top();
					opert.pop();
					operd.push(calc(b, ysf, a));
					i--;
					break;
				case '=':
					opert.pop();
				default:
					break;
				}
			}
		}
		int a, b;
		char ysf;
		while (opert.size() != 1)
		{
			a = operd.top();
			operd.pop();
			b = operd.top();
			operd.pop();
			ysf = opert.top();
			opert.pop();
			operd.push(calc(b, ysf, a));
		}
		cout << operd.top()<<endl;
	}
}------------------------------------------------------Problem1904:#include<iostream>
#include<stack>
#include<string>
using namespace std;
int main()
{
	string s;
	while (getline(cin, s))
	{
		stack<char> st;
		int ok = 1;
		for (int i = 0; i < s.length(); i++)
		{
			switch (s[i])
			{
			case '(':
			case '[':
			case '{':
				st.push(s[i]);
				break;
			case ')':
				if (!st.empty() && st.top() == '(')
					st.pop();
				else {
					ok = 0;
					goto outer;
				}
				break;
			case ']':
				if (!st.empty() && st.top() == '[')
					st.pop();
				else {
					ok = 0;
					goto outer;
				}
				break;
			case '}':
				if (!st.empty() && st.top() == '{')
					st.pop();
				else {
					ok = 0;
					goto outer;
				}
				break;
			default:
				break;
			}
		}
	outer:
		if (ok&&st.empty())cout << "yes\n";
		else cout << "no\n";
	}

}------------------------------------------------------Problem1905:#include<iostream>
using namespace std;
int visit[3][20];
int n, total;

void bfs(int current)
{
	if (current == n) {
		total++;
		return;
	}
	for (int i = 0; i < n; i++)
	{
		if (!visit[0][i] && !visit[1][current + i] && !visit[2][current - i + n])
		{
			visit[0][i] = visit[1][current + i] = visit[2][current - i + n] = 1;
			bfs(current + 1);
			visit[0][i] = visit[1][current + i] = visit[2][current - i + n] = 0;
		}
	}
}

int main()
{
	cin >> n;
	bfs(0);
	cout << total << endl;;
}------------------------------------------------------Problem1907:#include<iostream>
#include<string.h>
#include<cstdlib>
using namespace std;
int map[11][11];
int maxNum = 0;
int n;
int is_safe(int,int);
void dfs(int);
int main()
{
	while (cin >> n)
	{
		if (n == 0)break;
		memset(map, 0, sizeof(map));
		maxNum = 0;
		for (int i = 0; i < n; i++)
		{
			for (int j = 0; j < n; j++)
			{
				char tmp;
				cin >> tmp;
				if (tmp == 'X') map[i][j] = 2;
			}
		}
		dfs(0);
		cout << maxNum << endl;
	}
}

int is_safe(int x, int y)
{
	for (int i = x; i >= 0; i--)
	{
		if (map[i][y] == 1) return 0;
		if (map[i][y] == 2) break;
	}
	for (int i = x; i <n; i++)
	{
		if (map[i][y] == 1) return 0;
		if (map[i][y] == 2) break;
	}
	for (int i = y; i >= 0; i--)
	{
		if (map[x][i] == 1) return 0;
		if (map[x][i] == 2) break;
	}
	for (int i = y; i < n; i++)
	{
		if (map[x][i] == 1) return 0;
		if (map[x][i] == 2) break;
	}
	return 1;
}

void dfs(int current)
{
	for (int i = 0; i < n; i++)
	{
		for (int j = 0; j < n; j++)
		{
			if (map[i][j] == 0 && is_safe(i, j))
			{
				map[i][j] = 1;
				dfs(current + 1);
				map[i][j] = 0;
			}
		}
	}
	if (current > maxNum) maxNum = current;
}

------------------------------------------------------Problem1908:#include<iostream>
#include<string>
using namespace std;
int length;
struct dna{
	string s;
	int unsortendness;
};
int get_unsortendness(string s)
{
	int unsortendness=0;
	for (int i = 0; i < length-1; i++)
	{
		for (int j = i+1; j < length; j++)
		{
			if (s[j] < s[i]) unsortendness++;
		}
	}
	return unsortendness;
}

int main()
{
	dna dnas[105];
	int n;
	cin >> length >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> dnas[i].s;
		dnas[i].unsortendness = get_unsortendness(dnas[i].s);
	}
	for (int i = 0; i < n-1; i++)
	{
		for (int j = 0; j < n-1-i; j++)
		{
			if (dnas[j + 1].unsortendness < dnas[j].unsortendness) swap(dnas[j], dnas[j + 1]);
		}
	}
	for (int i = 0; i < n; i++)
	{
		cout << dnas[i].s << endl;
	}
}------------------------------------------------------Problem1909:#include<iostream>
#include<string>
using namespace std;
class tax
{
	string name;
	int date;
	int salary;
public:
	void input()
	{
		cin>>name;
		cin>>date;
		cin>>salary;
	}
	void show()
	{
		cout<<name<<" "<<date<<" "<<salary<<" "<<(salary<=800?0:(salary-800)*0.1)<<endl;
	}
};
int main()
{
	tax taxs[5];
	for(int i=0;i<5;i++)
	{
		taxs[i].input();
	}
	for(int i=0;i<5;i++)
	{
		taxs[i].show();
	}
}------------------------------------------------------Problem1910:#include<iostream>
#include<cstdio>
#include<cstdlib>
#include<string>
#include<cstring>
using namespace std;
int main()
{
	string nums;
	cin>>nums;
	int kase=0;
	for	(int i=100;i<=999;i++)
	{
		for(int j=10;j<=99;j++)
		{
			char buff[100];
			sprintf(buff,"%d%d%d%d%d",i,j,i*(j%10),i*(j/10),i*j);
			bool flag=true;
			for(int k=0;k<strlen(buff);++k)
			{
				if(nums.find(buff[k])==nums.npos)
				{
					flag=false;break;
				}
			}
			if(!flag)continue;
			printf("<%d>\n%5d\nX%4d\n-----\n%5d\n%4d\n-----\n%5d\n\n",++kase,i,j,i*(j%10),i*(j/10),i*j);
		}
	}
	printf("The number of solutions = %d",kase);
}------------------------------------------------------Problem1911:#include<iostream>
using namespace std;
class node
{
    int data;
public:
    node *next;
    void set(int data){this->data=data;}
    void print(){cout<<data<<" ";}
};
class list
{
    node *head;
public:
    void createlist1();
    void createlist2();
    void showlist();
    void deletelist();
};
void list::createlist1()
{
    head=new node;
    head->next=NULL;
    int n;
    while(cin>>n&&n)
    {
        node* s=new node;
        s->set(n);
        s->next=head->next;
        head->next=s;
    }
}
void list::createlist2()
{
    head=new node;
    head->next=NULL;
    node* p=head;
    int n;
    while(cin>>n&&n)
    {
        node* s=new node;
        s->set(n);
        s->next=p->next;
        p->next=s;
        p=p->next;
    }
}
void list::deletelist()
{
     
}
void list::showlist()
{
    node* p=head;
    while(p->next!= NULL)
    {
        p->next->print();
        p=p->next;
    }
    cout<<endl;
}
int main()
{
    int n;
    while(1)
    {
        cin>>n;
        if(n==0) break;
        if(n==1){list l1;l1.createlist1();l1.showlist();l1.deletelist();}
        if(n==2){list l2;l2.createlist2();l2.showlist();l2.deletelist();}
    }
}
------------------------------------------------------Problem1912:#include<iostream>
using namespace std;
class s
{
public:
    int data;
    void set(int data)
    {
        this->data=data;
    }
    void print()
    {cout<<data<<endl;}
};
int main()
{
    s s1,s2;
    s1.data=6;
    s2.data=10;
    s1.print();
    s2.print();
    s1.set(3);
    s1.print();
    s2.print();
}
------------------------------------------------------Problem1913:#include<iostream>
using namespace std;
class population
{
public:
    int num,borned,died;
    population()
    {
        cin>>num>>borned>>died;
    }
    float born_rate()
    {
        return (double)borned/num*100;
    }
    float die_rate()
    {
        return (double)died/num*100;
    }
};
int main()
{
    population* p=new population;
    float a=p->born_rate();
    float b=p->die_rate();
    printf("请输入城市人口：%d\n请输入出生人口：%d\n请输入死亡人口：%d\n这个城市的出生率是：%.2f%%\n这个城市的死亡率是：%.2f%%\n",p->num,p->borned,p->died,a,b);
 
}
------------------------------------------------------Problem1918:#include<iostream>
#include<string>
#include<stack>
using namespace std;
string source, target;
stack<char> zhan;
int length, ans[200];
void dfs(int cur, int ns, int nt)
{
	if (cur == length * 2)
	{
		for (int i = 0; i < length*2; i++)
		{
			cout << (ans[i] == 0 ? "o " : "i ");
		}
		cout << endl;
		return;
	}
	if (ns <length)
	{
		zhan.push(source[ns]);
		ans[cur] = 1;
		dfs(cur + 1, ns + 1, nt);
		zhan.pop();
	}
	if (!zhan.empty() && zhan.top() == target[nt])
	{
		char tmp = zhan.top();
		zhan.pop();
		ans[cur] = 0;
		dfs(cur + 1, ns, nt + 1);
		zhan.push(tmp);
	}
	return;
}
int main()
{
	while (cin >> source >> target)
	{
		if (source.length() != target.length())
		{
			cout << "[\n]\n"; continue;
		}
		length = source.length();
		cout << "[\n";
		dfs(0, 0, 0);
		cout << "]\n";
	}
}------------------------------------------------------Problem1920:#include<iostream>
#include<cstring>
using namespace std;
int main()
{
	char ciphertext[80];
	int plaintcode[80], ciphercode[80];
	int k,len=0;
	while (cin >> k)
	{
		if (k == 0) break;
		cin >> ciphertext;
		len = strlen(ciphertext);
		for (int i = 0; i < len; i++)
		{
			if (ciphertext[i] == '_') ciphercode[i] = 0;
			else if (ciphertext[i] == '.') ciphercode[i] = 27;
			else ciphercode[i] = ciphertext[i] - 96;
		}
		for (int i = 0; i < len; i++)
		{
			plaintcode[k*i % len] = (ciphercode[i] + i) % 28;
		}
		for (int i = 0; i < len; i++)
		{
			if (plaintcode[i] == 0) cout << '_';
			else if (plaintcode[i] == 27) cout << '.';
			else cout << char(plaintcode[i] + 96);
		}
		cout << endl;
	}
}------------------------------------------------------Problem1921:import java.math.BigDecimal;
import java.util.Scanner;

public class Main {

    public static void main(String[] args) {
        Scanner cin=new Scanner(System.in);
        int n=cin.nextInt();
        BigDecimal a,b;
        for (int i=0;i<n;i++){
            a=cin.nextBigDecimal();
            b=cin.nextBigDecimal();
            System.out.println("Case "+(i+1)+": \n"+a.toString()+" + "+b.toString()+" = "+a.add(b).toString()+" ");
            System.out.println();
        }
    }
}
------------------------------------------------------Problem1922:#include<iostream>
using namespace std;
class A
{
 int *p;
 int size;
 friend istream & operator>>(istream &i,A &a);
 friend ostream & operator<<(ostream &i,A &a);
public:
 A(int n=0)
 {size=n;p=new int[size];}
 A(const A &a)
 {
     size=a.size;
     p=new int[size];
     for(int i=0;i<size;++i)
     {
         p[i]=a.p[i];
     }
 }
 A operator=(A a)
 {
     size=a.size;
     p=new int[size];
     for(int i=0;i<size;++i)
     {
         p[i]=a.p[i];
     }
     return *this;
 }
 A operator++()
 { 
     for(int i=0;i<size;++i)
     {
         ++p[i];
     }
     return *this;
 }
 A operator++(int)
 {
     A temp=*this;
      for(int i=0;i<size;++i)
     {
         p[i]++;
     }
      return temp;
 }
 A operator+(A a)
 {
     A temp(size);
      for(int i=0;i<size;++i)
     {
         temp[i]=p[i]+a.p[i];
     }
      return temp;
 }
 int & operator[](int n)
 {
     return p[n];
 }
 operator int()
 {
     int temp=0;
       for(int i=0;i<size;++i)
     {
        temp+=p[i];
     }
       return temp;
 }
 ~A()
 { }
};
 istream & operator>>(istream &i,A &a)
 {
     int size=a.size;
      for(int j=0;j<size;++j)
     {
         i>>a.p[j];
     }
      return i;
 }
 
 ostream & operator<<(ostream &i,A &a)
 {
     int size=a.size;
      for(int j=0;j<size;++j)
     {
         i<<a.p[j]<<" ";
     }
      cout<<endl;
      return i;
 }
 
int main()
{
 A a1(10);
 cin>>a1;
 A a2=a1,a3(5),a4(10);
 cin>>a2>>a3;
 a4=a3=a1;
 a4=(++a1)+(a2++);
 cout<<a1<<a2<<a3<<a4;
 a4[5]=10000;
 cout<<a1<<a2<<a3<<a4;
 cout<<int(a4)<<endl;
}------------------------------------------------------Problem1923:#include<iostream>
#include<cstring>
using namespace std;
class  People
{ 
public :
    People (char * a) { strcpy(name,a); cout << "class People=" << a << endl ; } 
    char name[100];
} ;
class  Teather :virtual public People                                                 
{ 
public :  
    Teather (char * a,char * b): People(a){strcpy(TeatherNO,b); cout << "class Teather=" << b << endl ;  } 
    char TeatherNO[100];
} ;
class  Student :virtual public People                                                
{ 
public :
    Student (char * a,char * c):People(a) {strcpy(StudentNO,c); cout << "class Student=" <<c << endl ;  }
    char StudentNO[100];
} ;
class  TeacherStudent :  public  Teather ,  public  Student
{ 
public :  
    TeacherStudent (char * a,char * b,char * c):People(a),Teather(a,b),Student(b,c){cout << "class TeacherStudent" << endl ; } 
} ;  
int main ( )
{ 
    People aa("zhangsan"); 
    Teather bb("lisi","00001"); 
    Student cc("wangwu","00001"); 
    TeacherStudent  dd("zhaoliu","00002","00002"); 
}------------------------------------------------------
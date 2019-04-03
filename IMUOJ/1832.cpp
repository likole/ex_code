#include<iostream>
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
}
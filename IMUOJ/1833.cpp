#include<iostream>
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
}
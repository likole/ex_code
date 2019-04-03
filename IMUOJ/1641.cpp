#include<iostream>
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
}
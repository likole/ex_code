#include<iostream>
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
}
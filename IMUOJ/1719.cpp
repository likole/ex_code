#include<iostream>
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
}
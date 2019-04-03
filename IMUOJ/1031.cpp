#include<iostream>
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
}
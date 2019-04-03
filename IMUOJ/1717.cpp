#include<iostream>
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
}
#include<iostream>
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
}
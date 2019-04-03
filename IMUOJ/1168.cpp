#include<iostream>
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

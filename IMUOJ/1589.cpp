#include<iostream>
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

}
#include<iostream>
using namespace std;
double fact(int);
int main()
{
	int m, n;
	double ans;
	while (cin >> m >> n)
	{
		ans = fact(m) / (fact(n)*fact(m - n));
		cout << ans << endl;
	}
	return 0;
}
double fact(int x)
{
	double ans = 1;
	for (int i = 2; i <= x; i++)
	{
		ans *= i;
	}
	return ans;
}
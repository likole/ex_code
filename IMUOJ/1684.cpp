#include<iostream>
#include<cmath>
using namespace std;
int f(int, int, int);
int main()
{
	int n, x, y;
	cin >> n >> x >> y;
	int ans = 0;
	for (int i = 0; i <= n; i++)
	{
		ans += f(x, y, i);
	}
	cout << ans;
	return 0;
}
int f(int x, int y, int n)
{
	int j = 1;
	for (int i = 1; i <= n; i++)
	{
		j *= i;
	}
	return j*pow(x, n) + n*x*pow(y, n - 1);
}
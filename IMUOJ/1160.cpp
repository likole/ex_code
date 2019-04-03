#include<iostream>
#include<cmath>
#include<cstdlib>
using namespace std;
int main()
{
	int a[1000], b[1000], k, m, n;
	cin >> m >> n;
	for (int i = 0; i < m; i++)
	{
		cin >> a[i];
	}
	for (int i = 0; i < n; i++)
	{
		cin >> b[i];
	}
	int d = abs(a[0] - b[0]);
	for (int i = 0; i < n; i++)
	{
		for (int j = 0; j < m; j++)
		{
			if (abs(a[i] - b[j]) < d)
				d = abs(a[i] - b[j]);
		}
	}
	cout << d;
}
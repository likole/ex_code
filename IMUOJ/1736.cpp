#include<iostream>
using namespace std;
int main()
{
	int m, n, maxl=-999999, maxh=-999999;
	cin >> m >> n;
	int a[100][100];
	for (int i = 0; i < m; i++)
	{
		for (int j = 0; j <n; j++)
		{
			cin >> a[i][j];
		}

	}
	for (int i = 0; i < m; i++)
	{
		int l = 0;
		for (int j = 0; j < n; j++)
		{
			l += a[i][j];
		}
		if (l > maxl)maxl = l;

	}
	for (int i = 0; i < n; i++)
	{
		int h = 0;
		for (int j = 0; j < m; j++)
		{
			h += a[j][i];
		}
		if (h > maxh)maxh = h;
	}
	cout << maxl << endl<< maxh << endl;
}
#include<iostream>
using namespace std;
int main()
{
	int n, m, a[1000];
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> a[i];
	}
	cin >> m;
	for (int i = n; i < n+m; i++)
	{
		cin >> a[i];
	}
	for (int i = 0; i < m+n-1; i++)
	{
		for (int j = 0; j < m+n-1-i; j++)
		{
			if (a[j] > a[j + 1])swap(a[j], a[j + 1]);
		}
	}
	for (int i = 0; i < n+m; i++)
	{
		cout << a[i];
		if (i != n + m - 1)cout << " ";
	}
}
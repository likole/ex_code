#include<iostream>
using namespace std;
int main()
{
	int  n, m,a[2000];
	while (cin>>n>>m)
	{
		for (int i = 0; i < n; i++)
		{
			cin >> a[i];
		}
		for (int i = 0; i < n-1; i++)
		{
			for (int j = 0; j < n-1-i; j++)
			{
				if (a[j] < a[j + 1])swap(a[j], a[j + 1]);
			}
		}
		int sum = 0;
		for (int i = 0; i < m; i++)
		{
			sum += a[i];
		}
		cout << sum << endl;
	}
	return 0;
}
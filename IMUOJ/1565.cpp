#include<iostream>
using namespace std;
int main()
{
	int a[10][10], m, n,max[10];
	cin >> m >> n;
	for (int i = 0; i < m; i++)
	{
		max[i] = 0;
		for (int j = 0; j < n; j++)
		{
			cin >> a[i][j];
			if (a[i][j]>a[i][max[i]])max[i] = j;
		}
	}
	int sum=0;
	for (int i = 0; i < m; i++)
	{
		sum += a[i][max[i]];
	}
	cout << sum;
}
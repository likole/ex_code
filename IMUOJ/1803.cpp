#include<iostream>
using namespace std;
int main()
{
	int n,a[100][100],sum=0;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		for (int j = 0; j < n; j++)
		{
			cin >> a[i][j];
		}
	}
	for (int i = 0; i < n; i++)
	{
		for (int j = 0; j < n; j++)
		{
			sum += a[i][j];
		}
	}
	for (int i = 1; i < n-1; i++)
	{
		for (int j = 1; j < n-1; j++)
		{
			sum -= a[i][j];
		}
	}
	cout << (double)sum / (4*n-4) << endl;
	return 0;
}
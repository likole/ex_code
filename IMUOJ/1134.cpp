#include<iostream>
using namespace std;
int main()
{
	int a[10][10];
	int n,sum=0;
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
		sum += a[i][i];
		if (i != n - 1 - i) sum += a[i][n - 1 - i];
	}
	cout << sum << endl;
	//cin.get();
	//cin.get();
	return 0;
}
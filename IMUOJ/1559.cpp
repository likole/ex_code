#include<iostream>
#include<string>
using namespace std;
int main()
{
	int n,a[101][101];
	string str;
	while (cin >> n)
	{
		for (int i = 0; i < n+2; i++)
		{
			a[0][i] = 0;
			a[n + 1][i] = 0;
			a[i][0] = 0;
			a[i][n + 1] = 0;
		}
		for (int i = 1; i <= n; i++)
		{
			cin >> str;
			for (int j = 0; j < str.length(); j++)
			{
				a[i][j+1] =int (str[j] - 48);
			}
		}
		for (int i = 1; i <= n; i++)
		{
			for (int j = 1; j <= n; j++)
			{
				if (a[i][j] >= 9)
				{
					for (int k = i-1; k <=i+1; k++)
					{
						for (int m = j-1; m <= j+1; m++)
						{
							a[k][m]++;
						}
					}
				}
			}
		}
		for (int i = 1; i <= n; i++)
		{
			for (int j = 1; j <= n; j++)
			{
				if (a[i][j] > 9)a[i][j] = 9;
			}
		}
		for (int i = 1; i <= n; i++)
		{
			for (int j = 1; j <= n; j++)
			{
				cout << a[i][j];
			}
			cout << endl;
		}
	}
	return 0;
}
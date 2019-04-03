#include<iostream>
using namespace std;
int main()
{
	int m;//物品的个数
	int n;//总钱数
	int value[25] = { 0 }, weight[25] = { 0 };
	int max[25][3000] = { 0 };//个数为i，耗资j
	cin >> n >> m;
	for (int i = 1; i <= m; i++)
	{
		cin >> weight[i];
		cin >> value[i];
		value[i] *= weight[i];
	}
	for (int i = 1; i <= m; i++)
	{
		for (int j = 1; j <= n; j++)
		{
			if (j < weight[i])
			{
				max[i][j] = max[i - 1][j];
			}
			else
			{
				int x = max[i - 1][j];
				int y = max[i - 1][j - weight[i]] + value[i];
				max[i][j] = x>y ? x : y;
			}
		}
	}
	cout << max[m][n]<<endl;
}
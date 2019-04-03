#include<iostream>
using namespace std;
int main()
{
	int n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		int k[9],ans[9],index=0;
		for (int j = 0; j < 9; j++)
		{
			cin >> k[j];
		}
		for (int j = 9 - 1; j >= 0; j--)
		{
			if (k[j] <= k[0])
			{
				ans[index++] = k[j];
			}
		}
		for (int j = 1; j < 9; j++)
		{
			if (k[j] > k[0])
			{
				ans[index++] = k[j];
			}
		}
		for (int j = 0; j < 9; j++)
		{
			cout << ans[j];
			if (j != 8)cout << " ";
		}
		cout << endl;
	}
}
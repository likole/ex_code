#include<iostream>
using namespace std;
int n;
int selectstate[100];
int value[100][100];
int ans[100];
int maxvalue = 0;
void choose(int nowvalue, int now)
{
	if (now == n)
	{
		if (nowvalue > maxvalue)
		{
			for (int i = 0; i < n; i++)
			{
				ans[selectstate[i] - 1] = i + 1;
			}
			maxvalue = nowvalue;
		}
		return;
	}
	for (int i = 0; i < n; i++)
	{
		if (selectstate[i] == 0)
		{
			selectstate[i] = now + 1;
			choose(nowvalue + value[now][i], now + 1);
			selectstate[i] = 0;
		}
	}
}
int main()
{
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		for (int j = 0; j < n; j++)
		{
			cin >> value[i][j];
		}
	}
	choose(0, 0);
	for (int i = 0; i < n; i++)
	{
		cout << i + 1 << " " << ans[i] << endl;
	}
	cout << maxvalue << endl;
}

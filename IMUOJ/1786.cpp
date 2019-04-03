#include<iostream>
#include<cstring>
using namespace std;
int dp[10005];
int max_n(int a, int b)
{
	if (a > b)return a;
	return b;
}
int main()
{
	int n, v;
	while (cin >> n >> v)
	{
		if (n == 0 && v == 0)break;
		memset(dp, 0, sizeof(dp));
		int weight, value;
		for (int i = 0; i < n; i++)
		{
			cin >> weight >> value;
			for (int j = v; j >= weight; j--)
				dp[j] = max_n(dp[j - weight] + value, dp[j]);
		}
		cout << dp[v] << endl;
	}
}
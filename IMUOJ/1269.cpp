#include<iostream>
using namespace std;
int main() {
	int t, n, dp[101][1001], weight[101], price[101], max_price = 0;
	cin >> t >> n;
	for(int i=1;i<=n;i++)
	{
		cin>>weight[i]>>price[i];
	}
	for (int i = 0; i <= t; i++) {
		dp[0][i] = 0;
	}
	for(int i=1;i<=n;i++)
	{
		for(int j=0;j<=t;j++)
		{
			if(weight[i]>j)
			{
				dp[i][j]=dp[i-1][j];
			}
			else
			{
				int a=dp[i-1][j];
				int b=dp[i-1][j-weight[i]]+price[i];
				dp[i][j]=a>b?a:b;
			}
		}
	}
	cout << dp[n][t] << endl;
}


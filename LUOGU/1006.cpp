#include<iostream>
#include<cstdio>
#include<string>
#include<cstring>
#include<set>
#include<algorithm>
#include<iomanip>
#include<string>
#include<cmath>
#include<cstring>
using namespace std;
int dp[51][51][51][51],a[51][51];
int main()
{
    int m,n;
    cin>>m>>n;
    for(int i=1;i<=m;i++)
    {
        for(int j=1;j<=n;j++)
        {
            cin>>a[i][j];
        }
    }
    for(int i=1;i<=m;i++)
    {
        for(int j=1;j<=n;j++)
        {
            for(int k=1;k<=m;k++)
            {
                for(int t=1;t<=n;t++)
                {
                    dp[i][j][k][t]=max(max(dp[i-1][j][k-1][t],dp[i-1][j][k][t-1]),max(dp[i][j-1][k-1][t],dp[i][j-1][k][t-1]))+a[i][j]+a[k][t];
                    if(i==k&&j==t) dp[i][j][k][t]-=a[i][j];
                    //printf("%d ",dp[i][j][k][t]);
                }
            }
        }
    }
    printf("%d",dp[m][n][m][n]);

}


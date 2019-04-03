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
int dp[11][11][11][11],a[11][11];
int main()
{
    int n,x,y,v;
    scanf("%d",&n);
    while(scanf("%d %d %d",&x,&y,&v)==3)
    {
        if(x==0&&y==0&&v==0)break;
        a[x][y]=v;
    }
    for(int i=1;i<=n;i++)
    {
        for(int j=1;j<=n;j++)
        {
            for(int k=1;k<=n;k++)
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
    printf("%d",dp[n][n][n][n]);

}


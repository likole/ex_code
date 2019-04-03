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
int xb,yb,xm,ym;
long long dp[25][25];
int nxt[8][2]={1,2,2,1,2,-1,1,-2,-1,-2,-2,-1,-2,1,-1,2};
int main()
{
    cin>>xb>>yb>>xm>>ym;
    for(int i=0;i<=xb;i++)
    {
        for(int j=0;j<=yb;j++)
        {
            dp[i][j]=-1;
        }
    }
    dp[0][0]=1;
    for(int i=0;i<8;i++)
    {
        int nx=xm+nxt[i][0];
        int ny=ym+nxt[i][1];
        if(nx>=0&&nx<=xb&&ny>=0&&ny<=yb)
        {
            dp[nx][ny]=0;
        }
    }
    dp[xm][ym]=0;
    for(int i=0;i<=xb;i++)
    {
        for(int j=0;j<=yb;j++)
        {
            if(dp[i][j]==-1)
            {
                dp[i][j]=0;
                if(j>0)dp[i][j]+=dp[i][j-1];
                if(i>0)dp[i][j]+=dp[i-1][j];
            }
        }
    }
    cout<<dp[xb][yb];

}


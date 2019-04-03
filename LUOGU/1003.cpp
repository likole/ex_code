#include<iostream>
#include<cstdlib>
#include<cstdio>
using namespace std;
int zb[10000+5][4];
int n,x,y,ans=-1;
int main()
{
    scanf("%d",&n);
    for(int i=0;i<n;i++)
    {
        scanf("%d %d %d %d",&zb[i][0],&zb[i][1],&zb[i][2],&zb[i][3]);
    }
    scanf("%d %d",&x,&y);
    for(int i=0;i<n;i++)
    {
        if(x>=zb[i][0]&&y>=zb[i][1]&&x<=zb[i][0]+zb[i][2]&&y<=zb[i][1]+zb[i][3])
        {
            ans=i+1;
        }
    }
    cout<<ans<<endl;
}


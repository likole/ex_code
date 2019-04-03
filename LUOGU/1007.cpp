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
int main()
{
    ios::sync_with_stdio(false);
    int l,n,t,ans1=0,ans2=0;
    cin>>l>>n;
    for(int i=0;i<n;i++)
    {
        cin>>t;
        ans1=max(ans1,min(t,l+1-t));
        ans2=max(ans2,max(t,l+1-t));
    }
    printf("%d %d",ans1,ans2);
}


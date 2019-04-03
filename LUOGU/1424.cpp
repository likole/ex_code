#include<iostream>
#include<cstdio>
#include<cmath>
#include<cstdlib>
#include<algorithm>
using namespace std;
int main()
{
    int x,n,cnt=0;
    cin>>x>>n;
    x--;
    while(x!=0&&n>0){
        if(x!=5&&x!=6)cnt++;
        x=(x+1)%7;
        n--;
    }
    if(n>=7){
        cnt+=(n/7)*5;
        n%=7;
    }
    cnt+=min(n,5);
    cout<<(long long)cnt*250;
}


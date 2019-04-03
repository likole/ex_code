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
void f(int n)
{
    if(n==0)
    {
        cout<<"0";
        return;
    }
    int t[20],index=0;
    memset(t,0,sizeof(t));
    while(n)
    {
        t[index]=n%2;
        n/=2;
        index++;
    }
    int flag=0;
    for(int i=15; i>=0; i--)
    {
        if(t[i])
        {
            if(flag)cout<<"+";
            if(i==1)cout<<2;
            else
            {
                cout<<2<<"(";
                f(i);
                cout<<")";
            }
            flag=1;
        }
    }
}
int main()
{
    int n;
    cin>>n;
    f(n);
}


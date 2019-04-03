#include<iostream>
#include<cstdio>
#include<cmath>
using namespace std;
int main()
{
    int now=0,restored=0;
    int budge;
    int flag=0;
    for(int i=1;i<=12;i++)
    {
        cin>>budge;
        now+=300;
        if(now<budge&&flag==0) {
            flag=i;
        }
        restored+=(now-budge)/100;
        now=(now-budge)%100;
    }
    if(flag)cout<<"-"<<flag<<endl;
    else cout<<now+restored*120;
}


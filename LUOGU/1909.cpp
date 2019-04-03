#include<iostream>
#include<cstdio>
#include<cmath>
using namespace std;
int main()
{
    int mi=1000000000,need;
    int n,price;
    cin>>need;
    for(int i=0;i<3;i++)
    {
        cin>>n>>price;
        int t=ceil((double)need/n)*price;
        if(t<mi)mi=t;
    }
    cout<<mi;
}


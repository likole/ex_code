#include<iostream>
#include<cstdio>
#include<cmath>
using namespace std;
int main()
{
    int a,b,ma_v=0,ma_i=0;
    for(int i=0;i<7;i++)
    {
        cin>>a>>b;
        a+=b;
        if(a>ma_v){
            ma_v=a;
            ma_i=i+1;
        }
    }
    if(ma_v>8){
        cout<<ma_i;
    }else{
        cout<<0;
    }
}


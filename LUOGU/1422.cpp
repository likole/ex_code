#include<iostream>
#include<cstdio>
#include<cmath>
using namespace std;
int main()
{
    int a;
    double sum=0;
    cin>>a;
    sum+=min(150,a)*0.4463;
    a-=150;
    if(a>0){
        sum+=min(a,250)*0.4663;
        a-=250;
        if(a>0)sum+=a*0.5663;
    }
    printf("%.1f",sum);
}


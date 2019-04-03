#include<iostream>
#include<cstdio>
#include<cmath>
#include<cstdlib>
#include<algorithm>
using namespace std;
int main()
{
    double target,now=0,increse=2,cnt=0;
    cin>>target;
    while(now<target){
        now+=increse;
        increse*=0.98;
        cnt++;
    }
    cout<<cnt;
}


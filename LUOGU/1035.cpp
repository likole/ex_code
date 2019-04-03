#include<iostream>
#include<cstdio>
#include<cmath>
#include<cstdlib>
#include<algorithm>
using namespace std;
int main()
{
    int k,n=1;
    double sum=0;
    cin>>k;
    while(sum<=k){
        sum+=1.0/n++;
    }
    cout<<n-1;
}


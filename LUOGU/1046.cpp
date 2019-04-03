#include<iostream>
#include<cstdio>
#include<cmath>
#include<cstdlib>
#include<algorithm>
using namespace std;
int main()
{
    int a[10];
    for(int i=0;i<10;i++){
        cin>>a[i];
    }
    int h;
    cin>>h;
    h+=30;
    int cnt=0;
    for(int i=0;i<10;i++){
        if(a[i]<=h) cnt++;
    }
    cout<<cnt;
}


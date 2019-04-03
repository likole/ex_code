#include<iostream>
#include<cstdio>
using namespace std;
int main()
{
    int a,b,c,d;
    cin>>a>>b>>c>>d;
    int interval=(c*60+d)-(a*60+b);
    cout<<interval/60<<" "<<interval%60;
}


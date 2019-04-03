#include<iostream>
using namespace std;
int main()
{
    double a,s=1,s1=0,i;
    for(i=1;i<=64;i++)
    {
        s*=i;
        s1+=s;
    }
    cout<<s1;
}
#include<iostream>
using namespace std;
int max(int,int);
int main()
{
int a,b,c,d;
cin>>a>>b>>c;
d=max(a,b);
cout<<max(d,c)<<endl;
return 0;
}
int max (int x,int y)
{
int m;
m=x>y?x:y;
return m;
}

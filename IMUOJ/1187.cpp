#include<iostream>
#include<cmath>
using namespace std;
long long int f(int n,int m)
{
	if(n<m)
	{
		return pow(2,n);
	}
	else if(n==m)
	{
		return pow(2,n)-1;
	}
	else
	{
		return (f(n-1,m)*2-f(n-m -1,m));
	}
}
int main()
{
	int l,n,m;
	cin>>l;
	for	(int j=0;j<l;j++)
	{
		cin>>n>>m;
		cout<<f(n,m)<<endl;
	}
}


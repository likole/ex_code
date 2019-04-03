#include<iostream>
#include<cmath>
using namespace std;
int main()
{
	int k,n,t[33],index=0;
	cin>>k>>n;
	while(n)
	{
		t[index++]=n%2;
		n/=2;
	}
	int ans=0;
	for(int i=0;i<index;i++)
	{
		if(t[i]==1)
		{
			ans+=pow(k,i);
		}
	}
	cout<<ans<<endl;
}


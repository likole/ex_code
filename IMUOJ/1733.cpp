#include<iostream>
using namespace std;
int main()
{
	int a[10];
	for(int i=0;i<10;i++)
	{
		cin>>a[i];
	}
	for(int i=0;i<10;i++)
	{
		cout<<a[9-i];
		if(i!=9)cout<<" ";
	}
}


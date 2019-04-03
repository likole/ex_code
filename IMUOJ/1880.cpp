#include<iostream>
using namespace std;
int main()
{
	int count[3] = { 0,0,0 };
	char c;
	while (cin >> c)
	{
		cout<<c<<++count[c - 65]<<endl;
	}
}
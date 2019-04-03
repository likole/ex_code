#include<iostream>
using namespace std;
int main()
{
	int c[10];
	for (int i = 0; i < 10; i++)
	{
		cin>>c[i];
	}
	for (int j = 9; j >=0; j--)
	{
		cout << c[j];
		if (j != 0)cout << " ";
	}
	//cin.get();
	//cin.get();
	return 0;
}

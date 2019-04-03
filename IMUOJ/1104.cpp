#include<iostream>
using namespace std;
int main()
{
	int a[6], b[8];
	for (int i = 0; i < 6; i++)
	{
		cin >> a[i];
	}
	for (int i = 0; i < 8; i++)
	{
		cin >> b[i];
	}
	for (int i = 0; i < 6; i++)
	{
		for (int j = 0; j < 8; j++)
		{
			if (a[i] == b[j]) cout << a[i] << endl;
		}
	}
	//cin.get();
	//cin.get();
	return 0;
}
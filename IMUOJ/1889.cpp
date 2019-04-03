#include<iostream>
using namespace std;
int main()
{
	int a[12];
	for (int i = 0; i < 12; i++)
	{
		cin >> a[i];
	}
	for (int i = 0; i < 11; i++)
	{
		for (int j = 0; j < 11-i; j++)
		{
			if (a[j] > a[j + 1])swap(a[j], a[j + 1]);
		}
	}
	for (int i = 1; i <= 12; i++)
	{
		cout << a[i-1];
		if (i % 4 == 0)cout << endl;
		else cout << " ";
	}
}
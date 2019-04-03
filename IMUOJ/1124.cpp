#include<iostream>
using namespace std;
int main()
{
	int a[4];
	for (int i = 0; i < 4; i++)
	{
		cin >> a[i];
	}
	for (int i = 0; i < 3; i++)
	{
		for (int j = 0; j < 3-i; j++)
		{
			if (a[j] > a[j + 1])
			{
				int tmp = a[j];
				a[j] = a[j + 1];
				a[j + 1] = tmp;
			}
		}
	}
	for (int i = 0; i < 4; i++)
	{
		cout << a[i];
		if (i != 3)cout << " ";
	}
	//cin.get();
	//cin.get();
	return 0;
}
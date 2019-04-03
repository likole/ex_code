#include<iostream>
using namespace std;
int main()
{
	int a[9];
	for (int i = 0; i < 10; i++)
	{
		cin >> a[i];
	}
	for (int i = 0; i < 9; i++)
	{
		for (int j = 0; j < 9-i; j++)
		{
			if (a[j + 1] < a[j])
			{
				int tmp = a[j];
				a[j] = a[j + 1];
				a[j + 1] = tmp;
			}
		}
	}
	for (int i = 0; i < 10; i++)
	{
		cout << a[i] << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}
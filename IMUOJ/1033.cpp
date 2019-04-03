#include<iostream>
using namespace std;
int main()
{
	int a[10];
	for (int i = 0; i < 10; i++)
	{
		cin >> a[i];
	}
	for (int i = 0; i < 9; i++)
	{
		int k = i;
		for (int j = i+1; j < 10; j++)
		{
			if (a[k] > a[j]) k = j;
		}
		if (k!=i)
		{
			int tmp = a[i];
			a[i] = a[k];
			a[k] = tmp;
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
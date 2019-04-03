#include<iostream>
using namespace std;
int main()
{
	int a[3];
	cin >> a[0] >> a[1] >> a[2];
	for (int i = 0; i < 2; i++)
	{
		for (int j = 0; j < (2-i); j++)
		{
			if (a[j] > a[j + 1])
			{
				int tmp = a[j+1];
				a[j+1] = a[j];
				a[j] = tmp;
			}
		}
	}
	for (int i = 0; i < 3; i++)
	{
		cout << a[i] << " ";
	}
	cout << endl;
	//cin.get();
	//cin.get();
	return 0;
}
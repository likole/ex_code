#include<iostream>
using namespace std;
int main()
{
	int a[20];
	for (int i = 0; i < 20; i++)
	{
		cin >> a[i];
	}
	for (int i = 0; i < 20; i++)
	{
	    bool is_ok = 0;
		for (int j = 0; j < 20; j++)
		{
			if (a[i]%a[j] == 0 && i != j) is_ok = 1;
		}
		if (is_ok)cout << a[i] << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}
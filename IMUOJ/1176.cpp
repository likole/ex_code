#include<iostream>
using namespace std;
int main()
{
	int n, num[100];
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> num[i];
	}
	for (int i = 0; i < n; i++)
	{
		int ini = 3;
		for (int j = 0; j < num[i]; j++)
		{
			ini = (ini - 1) * 2;
		}
		cout << ini << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}
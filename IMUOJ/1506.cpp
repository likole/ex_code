#include<iostream>
using namespace std;
int main()
{
	int a[3][4], b[4][3];
	for (int i = 0; i < 3; i++)
	{
		for (int j = 0; j < 4; j++)
		{
			cin >> a[i][j];
		}
	}
	for (int i = 0; i < 4; i++)
	{
		for (int j = 0; j < 3; j++)
		{
			b[i][j] = a[j][i];
		}
	}
	for (int i = 0; i < 4; i++)
	{
		for (int j = 0; j < 3; j++)
		{
			cout << b[i][j] << " ";
		}
		cout << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}
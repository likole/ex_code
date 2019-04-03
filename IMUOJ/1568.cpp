#include<iostream>
using namespace std;
int main()
{
	int a[3][4],max[3];
	for (int i = 0; i < 3; i++)
	{
		max[i] = 0;
		for (int j = 0; j < 4; j++)
		{
			cin >> a[i][j];
			if (a[i][j]>a[i][max[i]])max[i] = j;
		}
	}
	for (int i = 0; i < 3; i++)
	{
		if (max[i] != 0)swap(a[i][0], a[i][max[i]]);
	}
	for (int i = 0; i < 3; i++)
	{
		for (int j = 0; j < 4; j++)
		{
			cout << a[i][j] << " ";
		}
		cout << endl;
	}
}
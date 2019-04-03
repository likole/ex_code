#include<iostream>
using namespace std;
void yanghui(int array[20][20]);
int main()
{
	
	int a[20][20];
	int i, j, n;
	yanghui(a);
	int x;
	while (cin >> x)
	{
		if (x == 0)break;
		for (n = 1, i = 0; n<=x; n++, i++)
		{
			for (j = 0; j < n; j++)
			{
				cout << a[i][j];
				if (j != n - 1)cout << " ";
			}
			cout << endl;
		}
	}
	//cin.get();
	//cin.get();
	return 0;
}
void yanghui(int array[20][20])
{
	int i, j, n;
	for (n = 1, i = 0; n<21; n++, i++)
		for (j = 0; j < n; j++)
			if ((j == 0) || (i == j))
				array[i][j] = 1;
			else
				array[i][j] = array[i - 1][j - 1] + array[i - 1][j];
}
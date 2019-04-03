#include<iostream>
using namespace std;
int main()
{
	int x[20][20],n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		for (int j = 0; j < n; j++)
		{
			cin >> x[i][j];
		}
	}
	for (int i = 0; i < n; i++)
	{
		for (int j = 0; j < n; j++)
		{
			cout << x[j][i];
			if (j != n - 1)cout << " ";
		}
		cout << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}
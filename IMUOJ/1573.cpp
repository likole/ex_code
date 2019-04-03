#include<iostream>
using namespace std;
int main()
{
	int n, a[1000][3];
	while (cin >> n)
	{
		for (int i = 0; i < n; i++)
		{
			cin >> a[i][0] >> a[i][1];
			a[i][2] = i + 1;
		}
		for (int i = 0; i < n - 1; i++)
		{
			for (int j = 0; j < n - 1 - i; j++)
			{
				if (a[j][0]<a[j + 1][0])swap(a[j], a[j + 1]);
			}
		}
		for (int i = 0; i < n - 1; i++)
		{
			for (int j = 0; j < n - 1; j++)
			{
				if (a[j][0] == a[j + 1][0] && a[j][1]>a[j + 1][1])swap(a[j], a[j + 1]);
			}
		}
		for (int i = 0; i < n - 1; i++)
		{
			for (int j = 0; j < n - 1; j++)
			{
				if (a[j][0] == a[j + 1][0] && a[j][1] == a[j + 1][1] && a[j][2]>a[j + 1][2])swap(a[j], a[j + 1]);
			}
		}
		for (int i = 0; i < n; i++)
		{
			cout << a[i][2];
			if (i != n - 1)cout << " ";
		}
		cout << endl;
	}
}
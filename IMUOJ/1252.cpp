#include<iostream>
#include<cmath>
using namespace std;
int main()
{
	int self[1000], other[1000];
	int n;
	while (cin >> n)
	{
		if (n == 0)break;
		for (int i = 0; i < n; i++)
		{
			cin >> self[i];
		}
		for (int i = 0; i < n; i++)
		{
			cin >> other[i];
		}
		for (int i = 0; i < n - 1; i++)
		{
			for (int j = 0; j < n - 1 - i; j++)
			{
				if (self[j] < self[j + 1])swap(self[j], self[j + 1]);
				if (other[j] > other[j + 1])swap(other[j], other[j + 1]);
			}
		}
		int win = 1;
		for (int i = 0; i < n/2+1; i++)
		{
			if (self[i] <= other[n / 2 - i])win = 0;
		}
		if (win)cout << "YES\n";
		else cout << "NO\n";
	}
}
#include<iostream>
using namespace std;
int main()
{
	int m, p[1000];
	cin >> m;
	for (int t = 0; t < m; t++)
	{
		int n;
		cin >> n;
		for (int i = 0; i < n; i++)
		{
			cin >> p[i];
		}
		for (int i = 0; i < n - 1; i++)
		{
			for (int j = 0; j < n - 1 - i; j++)
			{
				if (p[j] > p[j + 1])swap(p[j], p[j + 1]);
			}
		}
		int is_ok = 1;
		for (int i = 0; i < n - 2; i++)
		{
			if (p[i + 1] - p[i] != p[i + 2] - p[i + 1])
			{
				is_ok = 0;
				break;
			}
		}
		cout << (is_ok ? "yes" : "no") << endl;
	}
}
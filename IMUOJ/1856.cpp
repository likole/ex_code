#include<iostream>
using namespace std;
int main()
{
	int n, a[100];
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cin >> a[i];
	}
	for (int i = 0; i < n-1; i++)
	{
		for (int j = 0; j < n-1-i; j++)
		{
			if (a[j] > a[j + 1]) swap(a[j], a[j + 1]);
		}
	}
	for (int i = 0; i < n; i++)
	{
		cout << a[i];
		if (i != n - 1)cout << " ";
	}
	return 0;
}
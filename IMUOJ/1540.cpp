#include<iostream>
using namespace std;
int binary_search(int a[], int len, int goal)
{
	int low = 0, high = len - 1;
	while (low <= high)
	{
		int middle = (high - low) / 2 + low;
		if (a[middle] == goal) return 1;
		else if (a[middle] > goal) high = middle - 1;
		else low = middle + 1;
	}
	return 0;
}
int main()
{
	int m, n;
	while (cin >> m >> n)
	{
		if (m == 0 && n == 0)break;
		int  *a, *b, sum = 0;
		a = new int[m];
		b = new int[n];
		for (int i = 0; i < m; i++)
		{
			cin >> a[i];
		}
		for (int i = 0; i < n; i++)
		{
			cin >> b[i];
		}
		for (int i = 0; i < m; i++)
		{
			if (binary_search(b, n, a[i]))sum++;
		}
		cout << sum<<endl;
		delete a, b;
	}
}
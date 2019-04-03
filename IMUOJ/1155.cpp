#include<iostream>
using namespace std;
int main()
{
	int a[100];
	for (int i = 0; i < 100; i++)
	{
		a[i] = 2 * i + 2;
	}
	int n, m;
	while (cin >> n >> m)
	{
		int ans[100], index = 0;
		for (int i = 0; i < n/m; i++)
		{
			int t = 0;
			for (int j = i*m; j < i*m+m; j++)
			{
				t += a[j];
			}
			ans[index] = t / m;
			index++;
		}
		if (n%m != 0)
		{
			int t = 0;
			for (int i = 0; i < n%m; i++)
			{
				t += a[n - 1 - i];
			}
			ans[index] = t / (n%m);
			index++;
		}
		for (int i = 0; i < index; i++)
		{
			cout << ans[i];
			if (i != index - 1)cout << " ";
		}
		cout << endl;
	}
	return 0;
}
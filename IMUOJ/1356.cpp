#include<iostream>
using namespace std;
int main()
{
	int n,a[10000],m[10000];
	while (cin >> n)
	{
		for (int i = 0; i < n; i++)
		{
			cin >> a[i];
		}
		m[0] = 1;
		int ans = 0;
		for (int i = 1; i < n; i++)
		{
			int k = 0;
			for (int j = 0; j < i; j++)
			{
				if (a[j] < a[i] && k < m[j])k = m[j];
			}
			m[i] = k + 1;
			if (ans < m[i])ans = m[i];
		}
		cout << ans << endl;
	}
}
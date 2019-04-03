#include<iostream>
using namespace std;
int main()
{
	int m, n,a[1][1];
	while (cin >> m >> n)
	{
		if (m == 0 && n == 0)break;
		int count = 0;
		for (int i = 0; i < m; i++)
		{
			for (int j = 0; j < n; j++)
			{
				cin >> a[0][0];
				if (a[0][0] == 0) count++;
			}
		}
		if (count > double(m*n*2 / 3.0))cout << "Yes\n";
		else cout << "No\n";
	}
	return 0;
}
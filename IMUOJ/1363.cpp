#include<iostream>
using namespace std;
int main()
{
	int n, a[20000];
	while (cin >> n)
	{
		if (n == 0)break;
		for (int i = 0; i < 2 * n; i++)
		{
			cin >> a[i];
		}
		int left = 0, right = 2 * n - 1, sum_l = a[0], sum_r = a[2 * n - 1], count = 0;
		while (left < 2 * n&&right >= 0)
		{
			if (sum_l < sum_r)
			{
				sum_l += a[++left];
			}
			else if (sum_l>sum_r)
			{
				sum_r += a[--right];
			}
			else
			{
				count++;
				sum_l += a[++left];
			}
		}
		cout << count << endl;
	}
}
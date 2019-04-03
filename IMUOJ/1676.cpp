#include<iostream>
using namespace std;
int main()
{
	int n, ans[10], index = 0;
	for (int i = 0; i < 10; i++)
	{
		cin >> n;
		int flag = 1;
		if (n == 1) flag = 0;
		for (int i = 2; i < n; i++)
		{
			if (n%i == 0) flag = 0;
		}
		if (flag)
		{
			ans[index++] = n;
		}
	}
	if (index)
	{
		for (int i = 0; i < index-1; i++)
		{
			for (int j = 0; j < index-1-i; j++)
			{
				if (ans[j] < ans[j + 1])swap(ans[j], ans[j + 1]);
			}
		}
		cout << ans[0];
	}
	else
	{
		cout << "None\n";
	}
	return 0;
}
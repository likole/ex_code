#include<iostream>
using namespace std;
int main()
{
	int len;
	cin >> len;
	bool *tree= new bool[len+1];
	for (int i = 0; i < len+1; i++)
	{
		tree[i] = 1;
	}
	int n;
	cin >> n;
	for (int k = 0; k < n; k++)
	{
		int m, n;
		cin >> m >> n;
		for (int i = m; i <= n; i++)
		{
			tree[i] = 0;
		}
	}
	int sum = 0;
	for (int i = 0; i <= len; i++)
	{
		if (tree[i] == 1) ++sum;
	}
	cout << sum << endl;
}
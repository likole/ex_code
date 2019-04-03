#include<iostream>
using namespace std;
int main()
{
	int a[50000], b[50000], c[5], ai = 0, bi = 0, ci = 0;
	int m, n;
	cin >> m >> n;
	for (int i = 0; i <m; i++)
	{
		cin >> a[i];
	}	
	for (int i = 0; i <n; i++)
	{
		cin >> b[i];
	}
	while (ci<5&&ai < m&&bi < n)
	{
		if (a[ai] < b[bi])
		{
			c[ci++] = a[ai++];
		}
		else
		{
			c[ci++] = b[bi++];
		}
	}
	while (ci < 5&&ai < m)
	{
		c[ci++] = a[ai++];
	}
	while (ci < 5&&bi < n)
	{
		c[ci++] = b[bi++];
	}
	cout << c[4] << endl;
	ai = 0, bi = 0, ci = 0;
	while (ci<5 && ai<m&&bi<n)
	{
		if (a[m-1-ai] > b[n-1-bi])
		{
			c[ci++] = a[m-1-(ai++)];
		}
		else
		{
			c[ci++] = b[n-1-(bi++)];
		}
	}
	while (ci < 5 && ai<m)
	{
		c[ci++] = a[m-1-(ai++)];
	}
	while (ci < 5 && ai<n)
	{
		c[ci++] = b[n-1-(bi++)];
	}
	cout << c[4];
	return 0;
}
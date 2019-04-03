#include<iostream>
using namespace std;
int main()
{
	int *p, n;
	cin >> n;
	p = new int[n];
	for (int i = 0; i < n; i++)
	{
		p[i] = 1;
	}
	int count = 0,remain=n,index=0;
	while (remain > 1)
	{
		if (p[index] == 1)count++;
		if (count == 3)
		{
			p[index] = 0;
			remain--;
			count = 0;
		}
		index++;
		if (index == n) index = 0;
	}
	for (int i = 0; i < n; i++)
	{
		if (p[i] == 1)cout << i + 1;
	}
}
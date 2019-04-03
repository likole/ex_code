#include<iostream>
using namespace std;
int main()
{
	int a[100], b[100],c[200],ai=0,bi=0,ci=0;
	int n;
	while (cin >> n)
	{
		if (n == 0)break;
		a[ai++] = n;
	}
	while (cin >> n)
	{
		if (n == 0)break;
		b[bi++] = n;
	}
	for (int i = 0; i < ai-1; i++)
	{
		for (int j = 0; j < ai-1-i; j++)
		{
			if (a[j] > a[j + 1])swap(a[j], a[j + 1]);
		}
	}
	for (int i = 0; i < bi - 1; i++)
	{
		for (int j = 0; j < bi - 1 - i; j++)
		{
			if (b[j] > b[j + 1])swap(b[j], b[j + 1]);
		}
	}
	int p = 0, q = 0;
	while (p < ai&&q < bi)
	{
		if (a[p] < b[q]) c[ci++] = a[p++];
		else c[ci++] = b[q++];
	}
	while (p < ai)
	{
		c[ci++] = a[p++];
	}
	while (q < bi)
	{
		c[ci++] = b[q++];
	}
	for (int i = 0; i < ai; i++)
	{
		cout << a[i] << " ";
	}
	cout << endl;
	for (int i = 0; i < bi; i++)
	{
		cout << b[i] << " ";
	}
	cout << endl;
	for (int i = 0; i < ci; i++)
	{
		cout << c[i] << " ";
	}
}
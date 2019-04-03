#include<iostream>
#include<string>
using namespace std;
int main()
{
	int **p, n;
	cin >> n;
	p = new int*[n];
	for (int i = 0; i < n; i++)
	{
		p[i] = new int[2];
	}
	for (int i = 0; i < n; i++)
	{
		p[i][0] = i;
		cin >> p[i][1];
	}
	for (int i = 0; i < n-1; i++)
	{
		for (int j = 0; j < n-1-i; j++)
		{
			if (p[j][1] < p[j+1][1])swap(p[j], p[j + 1]);
		}
	}
	for (int i = 0; i < n; i++)
	{
		cout << p[i][1] << " ";
	}
	cout << endl;
	for (int i = 0; i < n; i++)
	{
		cout << p[i][0] << " ";
	}
}
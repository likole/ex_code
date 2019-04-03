#include<iostream>
using namespace std;
int main()
{
	int *p,n;
	cin >> n;
	p = new int[n];
	for (int i = 0; i < n; i++)
	{
		cin >> p[i];
	}
	for (int i = n - 1; i >= 0; i--)
	{
		cout << p[i];
		if (i != 0)cout << " ";
	}
}
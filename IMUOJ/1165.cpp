#include<iostream>
#include<cmath>
#include<cstdlib>
using namespace std;
int main()
{
	int n,a[100];
	while (cin >> n)
	{
		if (n == 0)break;
		for (int i = 0; i < n; i++)
		{
			cin >> a[i];
		}
		for (int i = 0; i < n-1; i++)
		{
			for (int j = 0; j < n-1-i; j++)
			{
				if (abs(a[j]) < abs(a[j + 1])) swap(a[j], a[j + 1]);
			}
		}
		cout << a[0];
		for (int i = 1; i < n; i++)
		{
			cout << " " << a[i];
		}
		cout << endl;
	}
}
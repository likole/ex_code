#include<iostream>
#include<cmath>
#include<stdlib.h>
using namespace std;
int main()
{
	int m, n;
	cin >> m >> n;
	m = abs(m);
	n = abs(n);
	int max, min;
	for (int i = 1; i <= (m>n?n:m); i++)
	{
		if (m%i == 0 && n%i == 0)max = i;
	}
	for (int i = (m>n?m:n); i <= m*n; i++)
	{
		if (i%m == 0 && i%n == 0)
		{
			min = i;
			break;
		}
	}
	cout << max << " " << min<<endl;
}
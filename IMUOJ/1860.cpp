#include<iostream>
using namespace std;
int main()
{
	int t,n;
	cin >> t;
	for (int j = 0; j < t; j++)
	{
		cin >> n;
		long long int a, b, c;
		if (n % 3 == 0)
		{
			a = n / 3;
			b = n / 3;
			c = n / 3;
		}
		else if (n % 3 == 1)
		{
			a = (n+2) / 3;
			b = n / 3;
			c = n / 3;
		}
		else if (n % 3 == 2)
		{
			a = (n + 1) / 3;
			b = (n+1) / 3;
			c = n / 3;
		}
		if (b + c > a)
		{
			cout << a*b*c << endl;
		}
		else
		{
			cout << 0 << endl;
		}
	}
}
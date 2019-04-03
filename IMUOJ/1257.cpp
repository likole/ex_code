#include<iostream>
#include<cmath>
using namespace std;
int main()
{
	long long int s, a, b;
	while (cin >> s)
	{
		for (a = 0; a <= s / 2; a++)
		{
			b = sqrt(2 * s + a*a - a + 0.25) - 0.5;
			b = (long long int)b;
			if ((b - a + 1)*(a + b) / 2 == s)
			{
				cout << a << " " << b;
				if (b < 1000)cout << " ";
				cout << endl;
			}
		}
		cout << endl;
	}
}

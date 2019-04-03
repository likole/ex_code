#include<iostream>
using namespace std;
int main()
{
	int a, b;
	while (cin >> a >> b)
	{
		if (a == 0 && b == 0)break;
		int last = 0, count = 0;
		while (a > 0 || b > 0)
		{
			last = a % 10 + b % 10 + last;
			if (last > 9)
			{
				count++;
			}
			a /= 10;
			b /= 10;
			last /= 10;
		}
		if (count == 0)cout << "No carry operation.\n";
		else if (count == 1)cout << "1 carry operation.\n";
		else cout << count << " carry operations.\n";
	}
}
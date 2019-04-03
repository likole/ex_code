#include<iostream>
using namespace std;
int main()
{
	int a, b, c;
	for (int i = 2; i < 1000; i++)
	{
		if (i / 10 < 1)
		{
			if (i == i*i*i)cout << i << "  ";
		}
		else if (i / 100 < 1)
		{
			a = i / 10;
			b = i % 10;
			if (i == a*a*a + b*b*b)cout << i << "  ";
		}
		else
		{
			a = i / 100;
			b = i / 10 % 10;
			c = i % 10;
			if (i == a*a*a + b*b*b + c*c*c) cout << i << "  ";
		}

	}
	//cin.get();
	//cin.get();
	return 0;
}
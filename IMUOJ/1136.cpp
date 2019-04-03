#include<iostream>
using namespace std;
int main()
{
	int a, b, c, d;
	for (int i = 95860;; i++)
	{
		a = i / 10000;
		b = i / 1000 % 10;
		c = i % 100 / 10;
		d = i % 10;
		if (a == d&&b == c)
		{
			cout << i << endl;
			break;
		}
	}
	//cin.get();
	//cin.get();
	return 0;
}
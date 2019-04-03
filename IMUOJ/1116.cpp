#include<iostream>
using namespace std;
int main()
{
	for (int i = 100; i <= 999; i++)
	{
		int a, b, c;
		a = i / 100;
		b = (i / 10) % 10;
		c = i % 10;
		if (i == a*a*a + b*b*b + c*c*c) cout << i<< endl;
	}
	//cin.get();
	//cin.get();woc
	return 0;
}
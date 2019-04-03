#include<iostream>
using namespace std;
int main()
{
	int x;
	cin >> x;
	cout << x << "*" << x << "*" << x << "=" << x*x*x << "=";
	for (int i = 0; i < x; i++)
	{
		cout << x*x - x + 1 + 2 * i;
		if (i != x - 1) cout << "+";
	}
}
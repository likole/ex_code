#include<iostream>
using namespace std;
int f(int);
int main()
{
	int n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		cout << f(i + 1) << endl;
	}
}
int f(int x)
{
	if (x == 0) return 0;
	else return (25173 * f(x - 1)+ 13849) % 65536;
}
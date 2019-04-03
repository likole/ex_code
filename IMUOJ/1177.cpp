#include<iostream>
using namespace std;
int f(int);
int main()
{
	int x;
	while (cin >> x)
	{
		cout << f(x) << endl;
	}
}
int f(int x)
{
	if (x == 1)return 0;
	else if (x == 2)return 1;
	else return ((x - 1)*(f(x - 1) + f(x - 2)));
}
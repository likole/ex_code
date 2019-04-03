#include<iostream>
using namespace std;
int f(int);
int main()
{
	int x;
	while (cin >> x)
	{
		if (x == 0)break;
		cout << f(x) << endl;
	}
}
int f(int x)
{
	if (x == 1)return 1;
	else if (x == 2) return 2;
	else if (x == 3)return 4;
	else return f(x - 1) + f(x - 2) + f(x - 3);
}
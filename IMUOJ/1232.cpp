#include<iostream>
using namespace std;
int f(int x)
{
	if (x == 1) return 2;
	else if (x == 2) return 4;
	else if (x == 3)return 7;
	else if (x == 4) return 13;
	else return f(x - 1) * 2 - f(x - 4);
}
int main()
{
	int n;
	while (cin>>n)
	{
		cout << f(n) << endl;
	}
}
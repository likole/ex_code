#include<iostream>
using namespace std;
void f(int x)
{
	for (int i = 0; i < x; i++)
	{
		cout << "*";
	}
}
void g(int x)
{
	for (int i = 0; i < x; i++)
	{
		cout << "#";
	}
}
int main()
{
	int n;
	while (cin >> n)
	{
		if (n == 0)break;
		f(n);
		cout << endl;
		for (int i = 0; i < (n-1)/2; i++)
		{
			f((n - 1) / 2 - i);
			g(i*2+1);
			f((n - 1) / 2 - i);
			cout << endl;
		}
		g(n);
		cout << endl;
	}
}
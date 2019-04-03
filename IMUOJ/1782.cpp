#include<iostream>
using namespace std;
int f(int);
int main()
{
	int a, b;
	cin >> b;
	a = f(b);
	cout << a;
}
int f(int a)
{
	int ans = 1;
	for (int i = 0; i < a; i++)
	{
		ans *= 2;
	}
	return ans;
}
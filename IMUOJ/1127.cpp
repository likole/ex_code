#include<iostream>
using namespace std;
int fib(int);
int main()
{
	int n;
	cin >> n;
	for (int i = 1; i <= n; i++)
	{
		cout << fib(i);
		if (i != n)cout << " ";
	}
	//cin.get();
	//cin.get();
	return 0;
}
int fib(int x)
{
	int ans;
	if (x == 1 || x == 2)ans = 1;
	else ans = fib(x - 1) + fib(x - 2);
	return ans;
}
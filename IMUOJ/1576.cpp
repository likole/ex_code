#include<iostream>
using namespace std;
int main()
{
	int fib[46];
	fib[0] = 0;
	fib[1] = 1;
	for (int i = 2; i <= 45; i++)
	{
		fib[i] = fib[i - 1] + fib[i - 2];
	}
	int n;
	cin >> n;
	for (int i = 0; i < n; i++)
	{
		int t;
		cin >> t;
		cout << fib[t] << endl;
	}
	return 0;
}
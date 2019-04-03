#include<iostream>
using namespace std;
int fib[10000][250];
void add(int n)
{
	for (int i = 0; i < 250; i++)
	{
		fib[n][i]+=(fib[n-1][i] + fib[n-2][i]);
		if (fib[n][i] > 9999)
		{
			fib[n][i] -= 10000;
			fib[n][i + 1]++;
		}
	}
}
int main()
{
	fib[0][0] = 1;
	fib[1][0] = 1;
	for (int i = 2; i <10000; i++)
	{
		add(i);
	}
	int n;
	cin >> n;
	int started = 0;
	for (int i = 250 - 1; i >= 0; i--)
	{
		if (started==0&&fib[n - 1][i] != 0)
		{
			cout << fib[n - 1][i];
			started = 1;
		}
		else if (started == 1)
		{
			printf("%04d", fib[n - 1][i]);
		}		
	}
}

#include<iostream>
using namespace std;
bool not_prime[1001];
int main()
{
	for (int i = 2; i < 1001; i++)
	{
		if (not_prime[i] == 0)
		{
			for (int j = 2 * i; j < 1001; j += i)
			{
				not_prime[j] = 1;
			}
		}
	}
	int a, b;
	cin >> a >> b;
	int m = a < b ? a : b;
	int n = a > b ? a : b;
	for (int i = m; i <= n - 2; i++)
	{
		if (not_prime[i] == 0 && not_prime[i + 2] == 0)cout << i << " " << i + 2 << endl;
	}

}
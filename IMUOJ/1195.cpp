#include<iostream>
using namespace std;
bool not_prime[32767];
int main()
{
	not_prime[0] = 1;
	not_prime[1] = 1;
	for (int i = 2; i < 32767; i++)
	{
		if (not_prime[i] == 0)
		{
			for (int j = 2*i; j < 32767; j+=i)
			{
				not_prime[j] = 1;
			}
		}
	}
	int n,sum=0;
	cin >> n;
	for (int i = 2; i <= n/2; i++)
	{
		if (not_prime[i] == 0 && not_prime[n - i] == 0)sum++;
	}
	cout << sum;
	return 0;
}
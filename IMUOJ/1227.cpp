#include<iostream>
using namespace std;
const int MAXN = 3000;
bool isnPrime[MAXN];
int div(int n)
{
	int t = n;
	int *tmp= new int[n + 1];
	for (int i = 0; i < n+1; i++)
	{
		tmp[i] = 0;
	}
	for (int i = 2; i < n; i++)
	{
		if (isnPrime[i] == 0)
		{
			while (t%i == 0)
			{
				tmp[i]++;
				t /= i;
			}
		}
	}
	int ans = 1;
	for (int i = 0; i < n+1; i++)
	{
		if (tmp[i])
		{
			ans *= (tmp[i] + 1);
		}
	}
	return ans;
}
int main()
{
	for (int i = 2; i < MAXN; i++)
	{
		if (isnPrime[i] == 0)
		{
			for (int j = 2*i; j < MAXN; j+=i)
			{
				isnPrime[j] == 1;
			}
		}
	}
	int a, b,max_num=0;
	cin >> a >> b;
	for (int i = a; i <= b; i++)
	{
		int t = div(i);
		if (t > max_num)max_num = t;
	}
	cout << max_num << endl;
}
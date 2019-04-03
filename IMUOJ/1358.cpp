#include<iostream>
using namespace std;
int n,state[10],num[10];
int is_prime(int n)
{
	if (n == 1)return 0;
	if (n == 2 || n == 3)return 1;
	if (n % 6 != 1 && n % 6 != 5)return 0;
	for (int i = 5; i*i < n; i+=6)
	{
		if (n%i == 0 || n % (i + 2) == 0) return 0;
	}
	return 1;
}
void dfs(int times, int ans)
{
	if (times == n)
	{
		if (is_prime(ans)) cout << ans << endl;
		return;
	}
	for (int i = 0; i < n; i++)
	{
		if (state[i] == 0)
		{
			state[i] = 1;
			dfs(times + 1, ans * 10 + num[i]);
			state[i] = 0;
		}
	}
}
int main()
{
	while (cin >> n)
	{
		if (n == 0)break;
		for (int i = 0; i < n; i++)
		{
			cin >> num[i];
			state[i] = 0;
		}
		for (int i = 0; i < n - 1; i++)
		{
			for (int j = 0; j < n - 1 - i; j++)
			{
				if (num[j] > num[j + 1]) swap(num[j], num[j + 1]);
			}
		}
		dfs(0, 0);
	}
}
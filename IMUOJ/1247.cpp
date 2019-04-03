#include<iostream>
using namespace std;
long long int fact(int);
int main()
{
	int n, m;
	while (cin >> n >> m)
	{
		long long int ans = fact(n) / (fact(m)*fact(n-m));
		cout << ans<<endl;
	}
	return 0;
}
long long int fact(int x)
{
	long long int ans = 1;
	for (int i = 2; i <= x; i++)
	{
		ans *= i;
	}
	return	ans;
}
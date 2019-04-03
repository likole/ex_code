#include<iostream>
using namespace std;
long long int  fact(int);
int main()
{
	int n;
	cin >> n;
	long long int ans = 0;
	for (int i = 1; i <= n; i++)
	{
		ans += fact(i);
	}
	cout << ans << endl;
	//cin.get();
	//cin.get();
	return 0;
}
long long int fact(int x)
{
	long long int  ans=1;
	for (int i = 2; i <= x; i++)
	{
		ans *= i;
	}
	return ans;
}
#include<iostream>
using namespace std;
int isprime(int);
int main()
{
	int m, n;
	cin >> m >> n;
	int sum=0;
	for (int i = m; i <= n; i++)
	{
		if (!isprime(i))sum += i;
	}
	cout << sum << endl;
	//cin.get();
	//cin.get();
	return 0;
}
int isprime(int n)
{
	int tmp = 0;
	if (n == 1)tmp++;
	for (int i = 2; i < n; i++)
	{
		if (n%i == 0)tmp++;
	}
	return tmp;
}
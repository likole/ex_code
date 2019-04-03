#include<iostream>
using namespace std;
int f(int a, int *b, int &c);
int main()
{
	int m, n, k;
	cin >> m >> n >> k;
	m = f(m, &n, k);
	cout << m << endl << n << endl << k << endl;
}
int f(int a, int *b, int &c)
{
	int x = a, y = *b, z = c;
	int ans1=0, ans2=0, ans3=1;
	for (int i = 1; i <= x; i++)
	{
		ans1 += i;
	}
	for (int i = 1; i <= y; i++)
	{
		ans2 += i*i;
	}
	for (int i = 1; i <= z; i++)
	{
		ans3 *= i;
	}
	*b = ans2;
	c = ans3;
	return ans1;
}
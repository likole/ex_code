#include<iostream>
using namespace std;
int get_num(int x)
{
	int a = x / 100;
	x %= 100;
	int b = x / 50;
	x %=50;
	int c = x / 10;
	x %= 10;
	int d = x / 5;
	x %= 5;
	int e = x / 2;
	x %= 2;
	return a + b + c + d + e + x;
}
int main()
{
	int n;
	while (cin>>n)
	{
		if (n == 0)break;
		int sum = 0;
		for (int i = 0; i < n; i++)
		{
			int t;
			cin >> t;
			sum += get_num(t);
		}
		cout << sum << endl;
	}
}
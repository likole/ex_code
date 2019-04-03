#include<iostream>
using namespace std;
int isHW(long long int x)
{
	long long int a = x;
	long long int b = 0;
	while (x) {
		b = b * 10 + x % 10;
		x /= 10;
	}
	if (a == b)return 1;
	return 0;
}
int main()
{
	long long int n;
	while (cin >> n)
	{
		for (long long int i = n + 1;; i++)
		{
			if (isHW(i))
			{
				cout << i << endl;
				break;
			}
		}
	}
}
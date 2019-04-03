#include<iostream>
using namespace std;
int main()
{
	long long int n;
	while (cin >> n)
	{
		if (n == 0)break;
		if (n == 1)
		{
			cout << 0 << endl;
			continue;
		}
		int t = 0;
		while (n >3)
		{
			if (n % 3 == 0)
			{
				n /= 3;
				t++;
			}
			else if (n % 3 == 1)
			{
				n /= 3;
				t++;
				n ++;
			}
			else if (n % 3 == 2)
			{
				n = (n + 1) / 3;
				t++;
			}
		}
		cout << t + 1 << endl;
	}
}
#include<iostream>
using namespace std;
int main()
{
	int n;
	while (cin >> n)
	{
		int flag = 1;
		for (int i = 2; i < n; i++)
		{
			if (n%i == 0)flag = 0;
		}
		if (flag)cout << n << " ";
	}
	return 0;
}
#include<iostream>
using namespace std;
int main()
{
	int n;
	cin >> n;
	for (int i = 1; i <= n; i++)
	{
		int fac = 0;
		for (int j = 1; j <i; j++)
		{
			if (i%j == 0) fac= j;
		}
		if (fac == 1) cout << i << " ";
	}
	//cin.get();
	//cin.get();
	return 0;
}
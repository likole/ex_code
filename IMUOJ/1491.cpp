#include<iostream>
#include<cmath>
using namespace std;
int main()
{
	int year, bit;
	while (cin >> year)
	{
		if (year == 0)break;
		bit = (year - 1960) / 10 + 2;
		bit = 1 << bit;
		double sum = 0;
		int n = 1;
		while (sum < bit)
		{
			sum += log(n) / log(2);
			++n;
		}
		cout << n-2 << endl;
	}
}
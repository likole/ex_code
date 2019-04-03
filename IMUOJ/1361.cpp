#include<iostream>
using namespace std;
int main()
{
	int n;
	while (cin >> n)
	{
		if (n == 0)break;
		int sum = 1;
		while (n > 3)
		{
			n /= 3;
			sum++;
		}
		cout << sum << endl;
	}
}
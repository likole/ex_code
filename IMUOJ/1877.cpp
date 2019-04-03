#include<iostream>
using namespace std;
int main()
{
	int a, b;
	cin >> a >> b;
	int m = a < b ? a : b;
	int n = a > b ? a : b;
	for (int i = m; i <= n; i++)
	{
		if ((i % 3 == 0) && ((i % 10 + 1) == (i /10%10))) cout << i << " ";
	}
}
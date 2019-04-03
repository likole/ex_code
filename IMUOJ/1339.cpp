#include<iostream>
using namespace std;
int main()
{
	unsigned int n, m;
	while (cin >> n >> m)
	{	
		if (n == 0 && m == 0)break;
		if (m >= n * 2 && m <= n * 4 && m % 2 == 0)
		{
			cout << ((4 * n - m) / 2) << " " << ((m - 2 * n) / 2)<<endl;
		}
		else
			cout << "Error"<<endl;
	}
	return 0;
}
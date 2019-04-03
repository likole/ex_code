#include <iostream>
using namespace std;
int main()
{
	unsigned int x;
	while (cin >> x)
	{
		int sum = 0;
		while (x >= 1)
		{
			sum += x % 10;
			x /= 10;
		}
		cout << sum << endl;
	}
	//cin.get();
	//cin.get();
	return 0;
}

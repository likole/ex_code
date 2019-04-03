#include<iostream>
using namespace std;
int main()
{
	int m, n;
	cin >> m >> n;
	int tmp;
	while (m%n != 0)
	{
		tmp = n;
		n = m%n;
		m = tmp;
	}
	cout << n;
	//cin.get();
	//cin.get();
	return 0;
}
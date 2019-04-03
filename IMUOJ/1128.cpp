#include<iostream>
using namespace std;
int main()
{
	int x, m = -999999999;
	while (cin >> x)
	{
		if (x == -1)break;
		if (x > m)m = x;
	}
	cout << m << endl;
	//cin.get(); cin.get();
	return 0;
}
#include<iostream>
using namespace std;
int main()
{
	int x,m=-99999;
	while (cin >> x)
	{
		if (x == 0)break;
		if (x > m)m = x;
	}
	cout << m << endl;
	//cin.get(); cin.get();
	return 0;
}
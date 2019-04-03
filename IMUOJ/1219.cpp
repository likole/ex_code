#include<iostream>
using namespace std;
int calc(int);
int main()
{
	int x;
	cin >> x;
	cout << calc(x) << endl;
	//cin.get();
	//cin.get();
	return 0;
}
int calc(int x)
{
	switch (x)
	{
	case 1:
		return 3;
		break;
	case 2:
		return 4;
		break;
	case 3:
		return 5;
		break;
	default:
		return calc(x - 1) + calc(x - 2) + calc(x - 3);
		break;
	}
}
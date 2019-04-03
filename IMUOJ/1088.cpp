#include<iostream>
#include<iomanip>
using namespace std;
int main()
{
	int x;
	float y;
	cin >> x;
	if (x < 1) y = x;
	else if (x >= 10) y = x * 3 - 11;
	else y = x * 2 - 1;
	cout << fixed << setprecision(2) << y;
	//cin.get();
	//cin.get();
	return 0;
}
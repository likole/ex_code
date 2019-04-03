#include<iostream>
using namespace std;
void LEAP_YEAR(int);
int main()
{
	int y;
	cin >> y;
	LEAP_YEAR(y);
	//cin.get();
	//cin.get();
	return 0;
}
void LEAP_YEAR(int y)
{
	if ((y % 4 == 0 && y % 100 != 0) || (y % 400 == 0))cout << "L";
	else cout << "N";
}
#include<iostream>
using namespace std;
int get_day(int, int);
int main()
{
	int a, b, c;
	cin >> a >> b >> c;
	cout << get_day(b, a) - c;
}
int get_day(int m,int y)
{
	switch (m)
	{
	case 1:case 3:case 5:case 7:case 8:case 10:case 12:
		return 31;
		break;
	case 4:case 6:case 9:case 11:
		return 30;
		break;
	case 2:
		if ((y % 4 == 0 && y % 100 != 0) || y % 400 == 0)return 29;
		else return 28;
		break;
	}
}
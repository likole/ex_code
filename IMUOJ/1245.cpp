#include<iostream>
using namespace std;
int get_day(int,int);
int main()
{
	int y, m, d;
	char sign;
	while (cin >> y >> sign >> m >> sign >> d)
	{
		int ans = 0;
		for (int i = 1; i < m; i++)
		{
			ans += get_day(i, y);
		}
		cout << (ans + d) << endl;
	}
	//cin.get();
	//cin.get();
}
int get_day(int m, int y)
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
		if ((y % 4 == 0 && y % 100 != 0) || (y % 400 == 0)) return 29;
		else return 28;
		break;
	}
}
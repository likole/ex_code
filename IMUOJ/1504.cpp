#include<iostream>
using namespace std;
int get_year_days(int year);
int get_month_days(int month, int year);
int main()
{
	int y, m, d,count=0;
	cin >> y >> m >> d;
	for (int i = 2000; i < y; i++)
	{
		count += get_year_days(i);
	}
	for (int i = 1; i < m; i++)
	{
		count += get_month_days(i, y);
	}
	count += d;
	int index = count % 5;
	if (index == 1 || index == 2 || index == 3)cout << "1";
	else cout << "2";
}
int get_year_days(int y)
{
	if ((y % 4 == 0 && y % 100 != 0) || y % 400 == 0)return 366;
	else return 365;
}
int get_month_days(int m,int y)
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
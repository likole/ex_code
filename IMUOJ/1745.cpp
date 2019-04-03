#include<iostream>
using namespace std;
int get_year_days(int year);
int get_month_days(int month, int year);
int main()
{
	int y, m, d;
	cin >> y >> m >> d;
	int year_last_day, year_past_day=0,sum=0;
	if (y == 2014)cout << (16 - d) << endl;
	else
	{
		for (int i = 1; i < m; i++)
		{
			year_past_day += get_month_days(i, y);
		}
		year_past_day += d;
		year_last_day = get_year_days(y) - year_past_day;
		for (int i = y + 1; i <= 2013; i++)
		{
			sum += get_year_days(i);
		}
		sum += year_last_day;
		sum += 16;
		cout << sum << endl;
	}
}
int get_year_days(int y)
{
	if ((y % 4 == 0 && y % 100 != 0) || y % 400 == 0)return 366;
	else return 365;
}
int get_month_days(int m, int y)
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